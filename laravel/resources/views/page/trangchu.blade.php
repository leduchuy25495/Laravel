
@extends('master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
      <div class="main-content">
        <div class="space60">&nbsp;</div>
        <div class="row">
          <div class="col-sm-12">
            <div class="beta-products-list">
              <h4>ĐỒNG HỒ ĐEO TAY MỚI</h4>
                <p class="timthay">Tìm Thấy {{count($new_sanpham)}} Sản  Phẩm</p>

        <div class="clearfix"></div>

              <div class="row"> 
                @foreach($new_sanpham as $new)
                <div class="col-sm-3">
                  <div class="single-item">
                    @if($new->giakm!=0)
                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                  @endif
                    <div class="single-item-header">
                      <a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->img}}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                     <h3> <p class="single-item-title">{{$new->tensp}}</p></h3>
                     <p class="single-item-price">
                        @if($new->giakm==0)
                        <span class="flash-sale">{{number_format($new->giaban)}} VND Đồng</span>
                        @else
                        <span class="flash-del">{{number_format($new->giaban)}} VND Đồng</span></br>
                        <span class="flash-sale">{{number_format($new->giakm)}} VND Đồng</span>
                      @endif
                 </div>
                    </div>
                    <div class="single-item-caption">
                      <form method="POST" action="{{url('cart')}}">
                                    <input type="hidden" name="sanpham_id" value="{{$new->id}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <a class="add-to-cart pull-left" href="{{route('dathang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>

                                        <a class="beta-btn primary" href="product.html">Xem Chi Tiết <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                                </form>
                  
                    </div>
                  </div>
               
                @endforeach
                            
                 </div>                
                         <div class="phantrang">{{$new_sanpham->links()}} </div>

                </div>
              </div>
     
            <div class="space50">&nbsp;</div>

            <div class="beta-products-list">
              <h4>ĐỒNG HỒ KHUYẾN MÃI</h4>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                 @foreach($sanpham_km as $spkm) 
                <div class="col-sm-3">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/{{$spkm->img}}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                   <h3> <p class="single-item-title">{{$spkm->tensp}}</p></h3>
                  <p class="single-item-price">
                        <span class="flash-del">{{number_format($spkm->giaban)}} VND Đồng</span></br>
                        <span class="flash-sale">{{number_format($spkm->giakm)}} VND Đồng</span>
                      </p>
                    </div>

                    <div class="single-item-caption">
                      <a class="add-to-cart pull-left" href="{{route('dathang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="product.html">Xem Chi Tiết <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                      <div class="clearfix"></div>  
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                   @endforeach
                      <p class="timthay">Tìm Thấy {{count($sanpham_km)}} Sản  Phẩm</p>
                    </div>
                    <div class="phantrang">{{$sanpham_km->links()}}</div>
                  </div>
                </div>
              </div>
             </div>
               </div>
             </div>




@endsection