 <nav class="navbar navbar-default" role="navigation" style="background-color: #cbcbcb";>
            <div class="container"> 
                <!-- Brand and toggle get grouped for better mobile display   -->
                <div class="navbar-header"> 
                    
                    
                       <ul class="nav navbar-nav"> 
                       <li><a href="#">Trang Chủ</a></li>

                      <li><div class="dropdown">
                          <a href="{{route('trangchu')}}" data-toggle="dropdown">Loại Sản Phẩm</a> 
                          <ul class="dropdown-menu">
                           @foreach($loaisp as $loai)
                            <li><a href="{{route('loaisanpham',$loai->id  )}}">{{$loai->name}}</a></li>
                          @endforeach
                          </ul>
                           </div>
                      </li>
                            <li><a href="#">Giới Thiệu</a></li>
                            <li><a href="{{route('lienhe')}}">Liên Hệ</a></li>
                        </ul>
                </div>
          
                <!-- Collect the nav links, forms, and other content for toggling -->

                   <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                        <li><a href="{{ route('register') }}">Đăng Ký</a></a></li>
                                     <form class="navbar-form navbar-left" role="search" method="get" action="{{route('timkiem')}}">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="key" >
                        </div>
                        <button type="submit" class="btn btn-default"  >Tìm Kiếm</button>
                    </form>
                        <!-- Authentication Links -->
                        @guest  
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"> 
                                    {{ Auth::user()->LogOut }}  <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>    
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>

</nav>
<div class="container" >
<div id="myCarousel" class="carousel slide" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner" >
    <div class="item active">
      <img src="source/image/slide/banner1.png" width="100%" " >
  
    </div>

    <div class="item">
      <img src="source/image/slide/banner2.jpg" width="100%" >
 
    </div>

    <div class="item">
      <img src="source/image/slide/banner3.jpg" width="100%">
    
    </div></div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</div>