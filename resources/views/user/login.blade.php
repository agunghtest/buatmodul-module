@extends('tema::layouts.login')

@section('style')
<link rel="stylesheet" href="{{asset('tema/assets/css/dashforge.css')}}	">
<link rel="stylesheet" href="{{asset('tema/assets/css/dashforge.auth.css')}}">
@endsection

@section('content')
<div class="media-body align-items-center d-none d-lg-flex">
	<div class="mx-wd-600">
		<img src="http://themepixels.me/dashforge/assets/img/img15.png" class="img-fluid" alt="">
	</div>
	<div class="pos-absolute b-0 l-0 tx-12 tx-center">
		Workspace design vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
	</div>
</div>
<div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
	<div class="wd-100p">
		<h3 class="tx-color-01 mg-b-5">Masuk</h3>
		<p class="tx-color-03 tx-16 mg-b-40">Selamat datang kembali! Mohon masuk untuk melanjutkan.</p>
		<div class="form-group">
			<label>Alamat email</label>
			<input type="email" class="form-control" placeholder="yourname@yourmail.com">
		</div>
		<div class="form-group">
			<div class="d-flex justify-content-between mg-b-5">
				<label class="mg-b-0-f">Katasandi</label>
				<a href="" class="tx-13">Lupa Katasandi?</a>
			</div>
			<input type="password" class="form-control" placeholder="Enter your password">
		</div>
		<button class="btn btn-brand-02 btn-block">Masuk</button>
		<div class="divider-text">atau</div>
		<a href="{{ url('sso') }}" class="btn btn-outline-success btn-block">Masuk dengan Email LAPAN</a>
	</div>
</div>
@endsection