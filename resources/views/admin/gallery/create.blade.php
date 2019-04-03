@extends('layouts.admin_layout')
@section('content')


@if($errors->any())
<div class="alert alert-danger col-lg-6">
  {{$errors->first()}}
</div>           
@endif

	<div class="col-6">
<form  class="container" action='/admin/galleries/create' method="POST" enctype="multipart/form-data">
	@csrf

			<div class="form-group">
		<label for="exampleInputEmail1">Gallery Title</label>
		<input name="title" class="form-control"  id="comment" required>
		
	</div>




	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="image[]" enctype="multipart/form-data" required multiple>
	<br><br>
	<button  type="submit" class="btn btn-success"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Create gallery</button>
</form>
	</div>
@endsection