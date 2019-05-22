@extends('layouts.main_layout')

@section('content')
<div class="container" style="margin-bottom: 5%">
	<div class="row">
	<div class="col-6">
		@foreach ($product->product_media as $img)
			<img src="{{env('image_storage')}}/{{$img->url}}" class="img-responsive" style="margin-bottom:5%;height:100%;width:100%">
		@endforeach
	</div>
	<div class="col-6">
		<p style="font-size: 15pt;">{{$product->en_description}}</p>
	</div>
	</div>
	<div class="row">
		<div class="col-6">
			<p style="font-size:18pt;font-weight:bold;text-align: center;">{{$product->en_title}}</p>
		</div>
	</div>
	<div class="row">
  <div class="col-lg-3 offset-lg-9">
  	<a href="/application/create" class="btn btn-info" style="background-color:#3544ab;color:white;border-color:#3544ab">
  		Buy Now
  	</a>
  </div>
	</div>
</div>
@endsection