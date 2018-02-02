@extends('master')
@section('content')

<div class="container">
    <div id="content" class="space-top-none">
      <div class="main-content">
        <div class="space60">&nbsp;</div>
        <div class="row">
          <div class="col-sm-12">
            <div class="beta-products-list">
              <h4>Tìm Kiếm </h4>

                <p class="timthay">Tìm Thấy {{count($sanpham)}} Sản  Phẩm</p>
        <div class="clearfix"></div>

              <div class="row"> 
                @foreach($sanpham as $new)
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
                      <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="product.html">Xem Chi Tiết <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
               
                @endforeach
                            
                 </div>         

                </div>
              </div>
     
            <div class="space50">&nbsp;</div>

@endsection