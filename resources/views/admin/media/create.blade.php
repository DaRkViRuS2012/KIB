@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/gallery_images/create/{{$gallery->id}}' method="POST" enctype="multipart/form-data">
	@csrf


	<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="gallery_id">
  	  <option value="{{$gallery->id}}" selected>{{$gallery->title}}</option>
  </select>
</div>
	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="image" enctype="multipart/form-data">
	<br><br>
	<button  type="submit" class="btn btn-primary"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Add Image to gallery</button>
</form>
	</div>
@endsection