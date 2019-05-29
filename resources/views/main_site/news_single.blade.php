@extends('layouts.main_layout')

@section('content')
<div class="container">
	 <div class="row">
	 		<div class="col-md-6">
                     <h1>{{$news->getTitle()}}</h1>
                     <img src="{{env('image_storage')}}/{{$news->media[0]->url}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     </div>
                     <div class="col-md-6">
                     <article style="margin-top: 10%;"><p>
                         {{$news->getBody()}}    
                         </p></article>
                     </div>
                 </div>
                 </div>
@endsection