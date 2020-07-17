<script src="{{asset('tema/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('tema/lib/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('tema/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('tema/lib/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('tema/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('tema/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('tema/lib/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('tema/lib/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('tema/lib/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('tema/lib/jquery.timeago.js/jquery.timeago.js')}}"></script>

<script src="{{asset('tema/assets/js/dashforge.js')}}"></script>
<script src="{{asset('tema/assets/js/dashforge.sampledata.js')}}"></script>
<script src="{{asset('tema/assets/js/dashboard-two.js')}}"></script>

<!-- append theme customizer -->
<script src="{{asset('tema/lib/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('tema/assets/js/dashforge.settings.js')}}"></script>
{{-- Laravel Mix - JS File --}}
{{--<script src="{{ asset('js/tema.js') }}"></script> --}}

<script type="text/javascript">
	$(document).ready(function(){
		function load_unseen_notification(){
			$.ajax({
				url:"http://localhost:3000/notifications/1/5",
				method:"GET",
				dataType:"json",
				success:function(data){
					console.log(data.values)
					let appendBody='';
					let appendTotal= '';
					data.values.forEach(
					 function(element, index, array) {
					  appendBody += `<a href="" class="dropdown-item">
					    <div class="media">
					      <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded" alt=""></div>
					      <div class="media-body mg-l-15">
					        <p>`+element.text+`</p>
					        <span>`+jQuery.timeago(element.create_at)+`</span>
					      </div>
					    </div>
						</a>`;
					   appendTotal = element.total
					 }
					);
					$('#notifications').html(appendBody);
					$('#count-notifications').html(appendTotal);
					// if(data.unseen_notification > 0){
					// 	$('#count-notifications').html(data.unseen_notification);
					// }
				}
			});
		}
		load_unseen_notification();
		setInterval(function(){
			load_unseen_notification();
		}, 3000);
	});
</script>
