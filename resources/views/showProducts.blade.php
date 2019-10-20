@extends('layout')

@section('content')

<section class='section-padding'>
	<div class="container">
		<div class='section-header'>
			<h2>Product List</h2>
		</div>
	<table id="productlist" class="table md-table table-striped table-bordered" style="width:100%">
        <thead> 
            <tr>
                <th>Sr. No</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Stocks</th>
             </tr>
        </thead>
        <tbody>
        	<?php  $no =1;?>
        	@foreach($products as $pro)
            <tr>
                <td>{{$no}}</td>
                <td><a href="{{ url('/products/'. $pro->slug ) }}">{{$pro->ProdcutName}}</a></td>
                <td>{{$pro->price}}</td>
                <td>{{$pro->stock}}</td>
             </tr>
             <?php  $no++;?>
             @endforeach
            </tbody>
    </table>
</div>
</section>

@endsection('content')