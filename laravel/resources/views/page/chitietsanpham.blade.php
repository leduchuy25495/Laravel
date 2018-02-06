@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
					<div class="clearfix">
				<h6 class="inner-title">Thông Tin Sản Phẩm</h6>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-12">
						<div class="col-sm-3" id="hinhchitiet">
							<img src="source/image/product/{{$sanpham->img}}" alt="">
						</div>

				

						<div class="col-sm-9" id="hienthichitietsp" >	
						<div class="woocommerce-tabs">
										<div class="single-item-body">
								<p class="single-item-title">{{$sanpham->tensp}}</p>
								<p class="single-item-price">
								  @if($sanpham->giakm==0)
                        <span class="flash-sale">{{number_format($sanpham->giaban)}} VND Đồng</span>
                        @else
                       Giá Gốc : <span class="flash-del">{{number_format($sanpham->giaban)}} VND Đồng</span></br>
                       Giá Bán : <span class="flash-sale">{{number_format($sanpham->giakm)}} VND Đồng</span>
                      @endif
								</p>
							</div>
						<ul class="tabs">
							<li><a href="#tab-description">Mô Tả Sản Phẩm</a></li>
						</ul>
						<div class="panel" id="tab-description">
							<li class="fa fa-check">Giao Hàng Toàn Quốc</li></br>
							<li class="fa fa-check">Thanh Toán Khi Nhận Hàng</li></br>
							<li class="fa fa-check">Điện Thoại Đặt Hàng : 0905887925</li></br>
							<li class="fa fa-check">Kiểu Đồng Hồ :{{$sanpham->loaiday}} </li></br>
							<li class="fa fa-check">Tình Trạng : </li>
					
						</div>		

					</div>
				</div>
				<div class="giohangct">
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Số Lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					
						
					</div>
	
					<div class="space50">&nbsp;</div>

			<div class="container">
  <ul class="nav nav-tabs">
   <p> <li class="active"><a data-toggle="tab" href="#home">Chi Tiết Sản Phẩm</a></li>
    <li><a data-toggle="tab" href="#menu2">Thông Số Kỹ Thuật</a></li>
    <li><a data-toggle="tab" href="#menu3">Hướng Dẫn Sử Dụng</a></li></p>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
   
      <p><li>Thương Hiệu: {{$sanpham->thuonghieu}} </li></p>
       <p><li>Loại Máy: {{$sanpham->loaimay}} </li></p>
         <p><li>Mặt Kính: {{$sanpham->matkinh}} </li></p>
          <p><li>Vỏ: {{$sanpham->vo}}</li></p>
           <p><li>Độ Dày: {{$sanpham->doday}} </li></p>
            <p><li>Bảo Hành: {{$sanpham->baohanh}} </li></p>

    </div>
    <div id="menu3" class="tab-pane fade">
      
      <p> 1. Lưu ý chung

-  Tránh va đập đồng hồ vào vật cứng hoặc làm rơi vỡ đồng hồ.</br>

 -  Không sử dụng đồng hồ khi rửa tay bằng nước nóng, đi tắm, đi bơi, xông hơi.</br>

-  Không để đồng hồ gần những nơi phát ra từ trường mạnh như: ti vi, loa thùng, dàn âm thanh, nam châm, bộ phát wifi</br>
-  Nhiệt độ sử dụng đồng hồ an toàn từ 10 độ C đến 40 độ C.</br>
-  Khi không sử dụng, hãy tháo đồng hồ ra khỏi tay, cất vào nơi an toàn, tránh xa tầm tay của trẻ em.</br>
-  Với chiếc đồng hồ cơ tự động bạn phải thường xuyên sử dụng đồng hồ, cử động tay đeo nhiều để bộ lên dây cót tự động nạp được năng lượng.</br>

- Tránh đeo đồng hồ khi vận động mạnh như đánh bong, đá bóng….</p>
    </div>
  </div>
</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Tương Tự</h4>

						<div class="row">
							@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sptt->id)}}"><img src="source/image/product/{{$sptt->img}}" alt=""></a>
									</div>
									     @if($sptt->giakm!=0)
                 										   <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                										  @endif
									<div class="single-item-body">
										<p class="single-item-title">{{$sptt->tensp}}</p>
										<p class="single-item-price">
										        @if($sptt->giakm==0)
                					        <span class="flash-sale">{{number_format($sptt->giaban)}} VND Đồng</span>
                					        @else
                					        <span class="flash-del">{{number_format($sptt->giaban)}} VND Đồng</span></br>
                					        <span class="flash-sale">{{number_format($sptt->giakm)}} VND Đồng</span>
                					      @endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Chi Tiết Sản Phẩm <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="phantrang">{{$sp_tuongtu->links()}} </div>
					</div> 
					<!-- .beta-products-list -->
				</div>

		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection