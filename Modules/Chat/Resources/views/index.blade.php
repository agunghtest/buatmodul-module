@extends('chat::layouts.master')
@section('content')
<div class="chat-wrapper">
	<div class="chat-navleft">
		<nav class="nav flex-column">
			<a href="" class="nav-link" data-toggle="tooltip" title="Contacts" data-placement="right">
				<i data-feather="users"></i>
			</a>
			<a href="" class="nav-link active" data-toggle="tooltip" title="Messages" data-placement="right">
				<i data-feather="message-square"></i>
			</a>
			<a href="" class="nav-link" data-toggle="tooltip" title="Phone Calls" data-placement="right">
				<i data-feather="phone"></i>
			</a>
			<a href="" class="nav-link" data-toggle="tooltip" title="Mentions" data-placement="right">
				<i data-feather="at-sign"></i>
			</a>
			<a href="" class="nav-link" data-toggle="tooltip" title="Help" data-placement="right">
				<i data-feather="help-circle"></i>
			</a>
		</nav>
	</div>
	<div class="chat-sidebar">
		<div class="chat-sidebar-header">
			<a href="#" data-toggle="dropdown" class="dropdown-link">
				<div class="d-flex align-items-center">
					<div class="avatar avatar-sm mg-r-8"><span class="avatar-initial rounded-circle">T</span></div>
					<span class="tx-color-01 tx-semibold">Pustikpan</span>
				</div>
				<span><i data-feather="chevron-down"></i></span>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="" class="dropdown-item"><i data-feather="user-plus"></i> Invite People</a>
				<a href="" class="dropdown-item"><i data-feather="plus-square"></i> Create Channel</a>
			<!-- <a href="" class="dropdown-item"><i data-feather="server"></i> Server Settings</a>
			<a href="" class="dropdown-item"><i data-feather="bell"></i> Notification Settings</a>
			<a href="" class="dropdown-item"><i data-feather="zap"></i> Privacy Settings</a>
			<div class="dropdown-divider"></div>
			<a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Team Details</a>
			<a href="" class="dropdown-item"><i data-feather="shield-off"></i> Hide Muted Channels</a> -->
		</div><!-- dropdown-menu -->
	</div><!-- chat-sidebar-header -->
	<!-- start sidebar body -->
	<div class="chat-sidebar-body">
		<x-chat-channellist />
		<x-chat-directmessagelist />
	</div>
	<div class="chat-sidebar-footer">
		<div class="d-flex align-items-center">
			<div class="avatar avatar-sm avatar-online mg-r-8"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
			<h6 class="tx-semibold mg-b-0">Katherine</h6>
		</div>
		<div class="d-flex align-items-center">
			<a href=""><i data-feather="mic"></i></a>
			<a href=""><i data-feather="settings"></i></a>
		</div>
	</div>
</div>
<div class="chat-content">
	<div class="chat-content-header">
		<h6 id="channelTitle" class="mg-b-0">#general</h6>
		<div id="directTitle" class="d-none">
			<div class="d-flex align-items-center">
				<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">b</span></div>
				<h6 class="mg-l-10 mg-b-0">@dfbot</h6>
			</div>
		</div>
		<div class="d-flex">
			<nav id="channelNav">
				<a href="#modalInvitePeople" data-toggle="modal"><span data-toggle="tooltip" title="Invite People"><i data-feather="user-plus"></i></span></a>
				<a id="showMemberList" href="" data-toggle="tooltip" title="Member list" class="d-flex align-items-center">
					<i data-feather="users"></i>
					<span class="tx-medium mg-l-5">25</span>
				</a>
			</nav>
			<nav id="directNav" class="d-none">
				<a href="" data-toggle="tooltip" title="Call User"><i data-feather="phone"></i></a>
				<a href="" data-toggle="tooltip" title="User Details"><i data-feather="info"></i></a>
				<a href="" data-toggle="tooltip" title="Add to Favorites"><i data-feather="star"></i></a>
				<a href="" data-toggle="tooltip" title="Flag User"><i data-feather="flag"></i></a>
			</nav>
			<div class="search-form mg-l-15 d-none d-sm-flex">
				<input type="search" class="form-control" placeholder="Search">
				<button class="btn" type="button"><i data-feather="search"></i></button>
			</div>
			<nav class="mg-sm-l-10">
				<a href="" data-toggle="tooltip" title="Channel Settings" data-placement="left"><i data-feather="more-vertical"></i></a>
			</nav>
		</div>
	</div>
	<div class="chat-content-body">
		<x-chat-chatlist />
	</div>
	<div class="chat-sidebar-right">
		<x-chat-userlist />
	</div>
	<div class="chat-content-footer">
		<x-chat-chatinput />
	</div>
</div>
</div>
<div class="modal fade effect-scale" id="modalCreateChannel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body pd-20">
				<button type="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i data-feather="x" class="wd-20"></i></span>
				</button>

				<h6 class="tx-uppercase tx-spacing-1 tx-semibold mg-b-20">Create Channel</h6>
				<input type="text" class="form-control" placeholder="Channel name" value="">
			</div>
			<div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
				<button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary tx-13">Create</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade effect-scale" id="modalInvitePeople" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body pd-20 pd-sm-30">
				<button type="button" class="close pos-absolute t-20 r-20" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i data-feather="x" class="wd-20"></i></span>
				</button>

				<h6 class="tx-18 tx-sm-20 mg-b-5">Invite People</h6>
				<p class="tx-color-03 mg-b-20">Share this link to your friend to grant access and join to this channel</p>
				<div class="input-group mg-b-5">
					<input type="text" class="form-control" value="http://themepixels.me/dashforge" readonly>
					<div class="input-group-append">
						<button class="btn btn-outline-light" type="button" id="button-addon2">Copy</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
