@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default">
  @if(Auth::check())
    Xin chào, {{Auth::user()->name}}!
      
 <h3>Thông Tin Người Dùng</h3>
    <ul>
        <li>Tên:{{Auth::user()->name}}</li>
        <li>Email:{{Auth::user()->email}}</li>  
    </ul>
@else
    Chào bạn, vui lòng <a href="/auth/login">Đăng nhập </a>
    hoặc <a href="/auth/register">Đăng ký</a>
@endif

 <h2> <a href="{{ route('logout') }}" 
     onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
   Đăng Xuất  </a> </h2>
            </div>
        </div>
    </div>
</div>
@endsection
