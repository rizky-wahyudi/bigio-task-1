@extends('main')
@section('title','Commodity Center')
@section('content')

<div class="card-body" style="border-radius: 0">
    <h1>Commodity List</h1>
	<table id="list_usulan_belum_terverifikasi" class="table table-hover text-nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Commodity Name</th>
                <th>Market</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commodityList as $commodity)
                <tr>
                    <td>{{$commodity->commodityName}}</td>
                    <td>{{$commodity->market}}</td>
                    <td>Rp.{{$commodity->commodityPrice}}</td>
                    <td>{{$commodity->date}}</td>
                </tr>
            @endforeach
        </tbody>	
    </table>
</div>
@endsection