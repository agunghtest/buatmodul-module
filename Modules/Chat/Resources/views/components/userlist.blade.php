<div class="pd-y-20 pd-x-10">
	<div class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1 pd-l-10">Members List</div>
	<div class="chat-member-list">
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">b</span></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">dfbot</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">situmay</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">acantones</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-offline"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">rlabares</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">h.owen</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-xs avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">k.billie</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">m.audrey</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">m</span></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">macasindil</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">e.ocaba</h6>
			</div><!-- media-body -->
		</a><!-- media -->
		<a href="#" class="media">
			<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
			<div class="media-body mg-l-10">
				<h6 class="mg-b-0">avendula</h6>
			</div><!-- media-body -->
		</a><!-- media -->
	</div><!-- chat-msg-list -->
</div>
<script>
	function getUsers() {
		$.ajax({
			type:'GET',
			url:'https://simpeg.lapan.go.id/index.php/api/sdmpusispan?email=karima.fadla@lapan.go.id',
			success:function(data) {
				console.log('userlist', data)
			}
		});
	}
	getUsers();
</script>
