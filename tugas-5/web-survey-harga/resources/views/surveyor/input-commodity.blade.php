@extends('main')
@section('title','Commodity Center')
@section('content')
    <div id="input-commodity-surveyor">
        <div class="greeting-message">
            <h1>Add Commodity</i> </h1>
        </div>
        <form autocomplete="off" class="card" id="add-commodity-form" action="{{route('surveyor-do-input-commodity')}}" method="post">
            @csrf    
            <div class="form-group">
                <label for="commodityName">Commodity Name</label>
                <input type="text" name="name" class="form-control addable" id="commodity-name" placeholder="Commodity Name" required>
            </div>

            <div class="form-group">
                <label for="market">Marketplace</label>
                <input type="text" name="market" class="form-control addable" id="market" placeholder="Marketplace" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Price" onkeyup="toIDR()" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                
                <input type="date" name="date" class="form-control" id="date" placeholder="Date" required>
            </div>

            <div class="submit-button form-group">
                <input type="submit" class="form-control" value="Add Commodity" required>
            </div>
        </form>
    </div>
@endsection
@section('script')
<script>
    var rupiah = document.getElementById('price');
	function toIDR() {
		// body...
		rupiah.value = formatRupiah(rupiah.value);
	}
	
   	function formatRupiah(angka){
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
 		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return rupiah;
	}
</script>
@endsection