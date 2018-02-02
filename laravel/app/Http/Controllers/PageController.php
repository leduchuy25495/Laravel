<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\loaisanpham;	
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
      $new_sanpham = sanpham::where('tinhtrang',1)->paginate(4);
      $sanpham_km = sanpham::where('giakm','<>',0)->paginate(8);
        return view('page.trangchu',compact('new_sanpham','sanpham_km'));

    }

    public function getLoaiSp($type){
     $sp_theoloai = sanpham::where('id_type',$type)->get();
      $sp_khac = sanpham::where('id_type','<>',$type)->paginate(6);
      $loai= loaisanpham::all();
      $loaisp=loaisanpham::where('id',$type)->first();
    	return view('page.loaisanpham',compact('sp_theoloai','sp_khac','loai','loaisp'));
    }
      public function getChitiet(Request $req){ 
        $sanpham=sanpham::where('id',$req->id)->first();
        $sp_tuongtu=sanpham::where('id_type',$sanpham->id_type)->paginate(8);
   
      	return view('page.chitietsanpham',compact('sanpham','sp_tuongtu',''));
      }
      public function getLienhe(){
      	return view('page.lienhe');
      }

      public function getTimkiem(Request $req){
        $sanpham = sanpham::where('tensp','like','%'.$req->key.'%')
                                  ->orWhere('giakm','like','%'.$req->key.'%')
                                  ->get();
        return view('page.timkiem',compact('sanpham'));
      }


    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout(){
        return view('page.dathang');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');

        $khachhang = new khachhang;
        $khachhang->name = $req->name;
        $khachhang->gioitinh = $req->gioitinh;
        $khachhang->email = $req->email;
        $khachhang->diachi = $req->diachi;
        $khachhang->sodienthoai = $req->sodienthoai;
        $khachhang->ghichu = $req->ghichu;
        $khachhang->save();

        $hoadon = new hoadon;
        $hoadon->id_khachhang = $khachhang->id;
        $hoadon->date_order = date('Y-m-d');
        $hoadon->tongtien = $cart->tongtien;
        $hoadon->hinhthucthanhtoan = $req->hinhthucthanhtoan;
        $hoadon->ghichu = $req->ghichu;
        $hoadon->save();

        foreach ($cart->items as $key => $value) {
            $hoadonchitiet = new hoadonchitiet;
            $hoadonchitiet->id_hoadon = $hoadon->id;
            $hoadonchitiet->id_sanpham = $key;
            $hoadonchitiet->soluong = $value['qty'];
            $hoadonchitiet->giaban = ($value['giaban']/$value['qty']);
            $hoadonchitiet->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');

    }
}

