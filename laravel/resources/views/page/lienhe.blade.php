	@extends('master')
	@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h3>Form Liên Hệ</h3>
					<div class="space20">&nbsp;</div>
					<p>Xin Vui Lòng Nhập Thông Tin Và Nội Dung Muốn Liên Hệ Góp Ý. Xin Cảm Ơn.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Họ Tên Người Gửi">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="E Mail Người Gửi">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Tiêu Đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Nội Dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi Mail <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<h3>Thông Tin Liên Hệ</h3>
				<div class="col-sm-4">
					
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa Chỉ</h6>
					<p>
						48 Đặng Văn Ngữ.Khuê Trung. Cẩm Lệ.TP Đà Nẵng
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Hỗ Trợ Kinh Doanh</h6>
					<p>
						<a href="mailto:leduchuy25495@gmail.com">leduchuy25495@gmail.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Hỗ Trợ Nhân Sự</h6>
					<p>
						<a href="hmailto:leduchuy25495@gmail.com">leduchuy25495@gmail.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.00061882618!2d108.20447641441716!3d16.013483288915424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a243def0649%3A0x6f1164bbde09b873!2zxJDhurduZyBWxINuIE5n4buvLCBLaHXDqiBUcnVuZywgQ-G6qW0gTOG7hywgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2sus!4v1516787856257" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</div>	
@endsection