@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/galleries/update/{{$gallery->id}}' method="POST" enctype="multipart/form-data">
	@csrf

			<div class="form-group">
		<label for="exampleInputEmail1">Product Title</label>
		<input value="{{$gallery->title}}" name="title" class="form-control"  id="comment" required>
		
	</div>

	<button  type="submit" class="btn btn-primary"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Update Agent</button>
</form>
	</div>
@endsection