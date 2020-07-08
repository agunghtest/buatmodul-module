<a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
	<div class="avatar avatar-sm"><img src="{{$image}}" class="rounded-circle" alt=""></div>
</a><!-- dropdown-link -->
<div class="dropdown-menu dropdown-menu-right tx-13">
	<div class="avatar avatar-lg mg-b-15"><img src="{{$image}}" class="rounded-circle" alt=""></div>
	<h6 class="tx-semibold mg-b-5">{{$name}}</h6>
	<p class="mg-b-25 tx-12 tx-color-03">{{$org}}</p>

	<a href="" class="dropdown-item"><i data-feather="edit-3"></i> Ubah Profil</a>
	<a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> Lihat Profil</a>
	<div class="dropdown-divider"></div>
	<a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Pusat Bantuan (ext 242)</a>
	<a href="" class="dropdown-item"><i data-feather="life-buoy"></i> Forum</a>
	<a href="" class="dropdown-item"><i data-feather="settings"></i>Atur Akun</a>
	<a href="" class="dropdown-item"><i data-feather="settings"></i>Atur Privasi</a>
	<a href="{{url('logout')}}" class="dropdown-item"><i data-feather="log-out"></i>Keluar</a>
</div>