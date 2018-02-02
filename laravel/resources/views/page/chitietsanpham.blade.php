@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
					<div class="clearfix"></div>
				<h6 class="inner-title">Thông Tin Sản Phẩm</h6>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-sm-3" id="hinhchitiet">
							<img src="source/image/product/{{$sanpham->img}}" alt="">
						</div>
						<div class="col-sm-12">
							<div class="single-item-body">
								<p class="single-item-title">{{$sanpham->tensp}}</p>
								<p class="single-item-price">
								  @if($sanpham->giakm==0)
                        <span class="flash-sale">{{number_format($sanpham->giaban)}} VND Đồng</span>
                        @else
                        <span class="flash-del">{{number_format($sanpham->giaban)}} VND Đồng</span></br>
                        <span class="flash-sale">{{number_format($sanpham->giakm)}} VND Đồng</span>
                      @endif
								</p>
							</div>

							<div class="clearfix"></div>
					

							<div class="single-item-desc">
								<p>{{$sanpham->mota}}</p>
							</div>
		
						</div>



						<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô Tả Sản Phẩm</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<li>Giao Hàng Toàn Quốc</li>
							<li>Thanh Toán Khi Nhận Hàng</li>
							<li>Điện Thoại Đặt Hàng : 0905887925</li>
					
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
					<div class="beta-products-list">
						<h4>Sản Phẩm Tương Tự</h4>

						<div class="row">
							@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/product/{{$sptt->img}}" alt=""></a>
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
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
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