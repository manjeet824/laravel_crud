@extends('layout')

@section('content')
<section class='section-padding' id='InsertFrom'>

	<div class='container'>
		<div class='section-header'>
			<h2>
				Insert Product Details
			</h2>
		</div>
		<div class="clearfix"></div>
<form class='insert-form' method="post" action="{{action('productscontroller@insert')}}">
	@csrf
  <div class="form-group" >
    <label for="exampleInputname">Product Name</label>
    <input type="text" class="form-control" name="pName" id="exampleInputname" aria-describedby="emailHelp" placeholder="Product Name">
   </div>
  <div class="form-group">
    <label for="exampleInputslug">Slug</label>
    <input type="text" class="form-control" name="pSlug" id="exampleInputslug" placeholder="Enter Slug">
  </div>
  <div class="form-group">
    <label for="exampleInputsku">SKU Id</label>
    <input type="text" class="form-control" name="psku" id="exampleInputsku" placeholder="Enter SKU Id">
  </div>
  <div class="form-group">
    <label for="exampleInputexpert">Expert</label>
    <input type="text" class="form-control" name="pExpert" id="exampleInputexpert" placeholder="Enter ExpertExpert">
  </div>
  <div class="form-group">
    <label for="exampleInputdesc">Description</label>
    <input type="text" class="form-control" name="pDesc" id="exampleInputdesc" placeholder="Enter Description">
  </div>
   <div class="form-group">
    <label for="exampleInputprice">Price</label>
    <input type="text" class="form-control" name="pPrice" id="exampleInputprice" placeholder="Enter Price">
  </div>
     <div class="form-group">
    <label for="exampleInputstock">Stocks</label>
    <input type="text" class="form-control" name="pstocks" id="exampleInputstock" placeholder="Enter Stocks">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</section>
@endsection('content')