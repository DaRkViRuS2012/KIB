@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/gallery_images/update/{{$gallery_image->id}}' method="POST" enctype="multipart/form-data">
	@csrf


	<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="gallery_id">
  	  <option value="{{$gallery_image->id}}" selected>{{$gallery_image->gallery->title}}</option>
  </select>
</div>
	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="image" enctype="multipart/form-data">
	<br><br>
	<button  type="submit" class="btn btn-primary"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Update Image of gallery</button>
</form>
	</div>
@endsection