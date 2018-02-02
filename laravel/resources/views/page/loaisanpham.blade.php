		@extends('master')
@section('content')		

		<div class="inner-header">
			<div class="container">
				<div class="pull-left">
						<div class="clearfix"></div>
					<h6 class="inner-title">Sản Phẩm {{$loaisp->name}}</h6>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="content" class="space-top-none">
				<div class="main-content">
					<div class="space60">&nbsp;</div>
					<div class="row">
						<div class="col-sm-3">
							<ul class="aside-menu">
								@foreach($loai as $loaisp)
								<li><a href="{{route('loaisanpham',$loaisp->id)}}">{{$loaisp->name}}</a></li>
								@endforeach	
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="beta-products-list">
								<h4>Sản Phẩm Hot</h4>
								<div class="beta-products-details">
									<p class="timthay" >Tìm Thấy {{count($sp_theoloai)}} Sản  Phẩm</p>
									<div class="clearfix"></div>
								</div>

								<div class="row">
									@foreach($sp_theoloai as $sp)
									<div class="col-sm-4">
										<div class="single-item">
											<div class="single-item-header">
												        @if($sp->giakm!=0)
                 										   <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                										  @endif
												<a href="{{route('chitietsanpham',$sp->id)}}"><img src="source/image/product/{{$sp->img}}" alt="" ></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$sp->tensp}}</p>
												<p class="single-item-price">
													@if($sp->giakm ==0)
											   <span class="flash-sale">{{number_format($sp->giaban)}} VND Đồng</span>
                   								     @else
                    						    <span class="flash-del">{{number_format($sp->giaban)}} VND Đồng</span></br>
                    						    <span class="flash-sale">{{number_format($sp->giakm)}} VND Đồng</span>
               								        @endif
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Xem Chi Tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
											@endforeach
								

								</div>
							</div> <!-- .beta-products-list -->

							<div class="space50">&nbsp;</div>

							<div class="beta-products-list">
								<h4>Sản Phẩm Khác</h4>
								<div class="beta-products-details">
							<p class="timthay" >Tìm Thấy {{count($sp_khac)}} Sản  Phẩm</p>
									<div class="clearfix"></div>
								</div>
								<div class="row">
								@foreach($sp_khac as $sp_k)
									<div class="col-sm-4">
										<div class="single-item">
											<div class="single-item-header">
												      @if($sp_k->giakm!=0)
                 										   <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                										  @endif
											
												<a href="{{route('chitietsanpham',$sp_k->id)}}"><img src="source/image/product/{{$sp_k->img}}" alt="" height="10px"; width="15px;" "></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$sp_k->tensp}}</p>
												<p class="single-item-price">
												@if($sp_k->giakm ==0)
											   <span class="flash-sale">{{number_format($sp_k->giaban)}} VND Đồng</span>
                   								     @else
                    						    <span class="flash-del">{{number_format($sp_k->giaban)}} VND Đồng</span></br>
                    						    <span class="flash-sale">{{number_format($sp_k->giakm)}} VND Đồng</span>
               								        @endif
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('chitietsanpham',$sp_k->id)}}">Xem Chi Tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
							@endforeach
								</div>
								<div class="phantrang">{{$sp_khac->links()}} </div>
								
							</div> <!-- .beta-products-list -->
						</div>
					</div> <!-- end section with sidebar and main content -->


				</div> <!-- .main-content -->
			</div> <!-- #content -->
		</div> <!-- .container -->
@endsection