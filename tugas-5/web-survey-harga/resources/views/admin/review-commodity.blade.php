@extends('main')
@section('title','Commodity Center')
@section('content')

<div class="card-body" style="border-radius: 0">
    <form action="{{Route('admin-do-commodity-request')}}" method="POST">
	   	@csrf
		<table id="list_usulan_belum_terverifikasi" class="table table-hover text-nowrap" style="width:100%">
	        <thead>
	            <tr>
                    <th>Commodity Name</th>
                    <th>Market</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th><input type="checkbox" name="check-all" id="checkbox-all" onchange="toggleCheckbox(this)"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commodityList as $commodity)
                <tr>
                    <td>{{$commodity->commodityName}}</td>
                    <td>{{$commodity->market}}</td>
                    <td>Rp.{{$commodity->commodityPrice}}</td>
                    <td>{{$commodity->date}}</td>
                    <td><input type="checkbox" value="{{$commodity->id}}" onchange="clickedCheckbox(this)" name="check[]" class="checkbox-item"></td>
                </tr>
                @endforeach
            </tbody>	
        </table>
        <input type="submit" class="btn btn-primary" value="Verifikasi" name="action" />
        <input type="submit" class="btn btn-danger" value="Tolak" name="action" />
    </form>
</div>
@endsection
@section('script')
    <script type="text/javascript">
		const hasAlert = @if(Session::has("type") || Session::has("message")) true @else false @endif;
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
		})
		$(document).ready(function() {
			if(hasAlert){
				Toast.fire({
					icon: '{{Session::get("type")}}',
					title: '{{Session::get("message")}}'
				})
			}
		} );
		
		function toggleCheckbox(element){
			if($('#checkbox-all').is(':checked')){
				$(".checkbox-item").prop('checked', true);
			}else{
				$(".checkbox-item").prop('checked', false);
			}
		}
		function clickedCheckbox(element){
			$("#checkbox-all").prop('checked', false);
		}

    </script>
@endsection