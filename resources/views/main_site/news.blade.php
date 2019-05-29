@extends('layouts.main_layout')

@section('content')
	
@foreach ($news as $news1)
    {{-- expr --}}

	   <div class="col-md-10 blogShort">
                     <h1>{{$news1->getTitle()}}</h1>
                     <img src="{{env('image_storage')}}/{{$news1->media[0]->url}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="width:50%;height:50%">
                     <article><p>
                        {{$news1->getBody()}}   
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="/news_single/{{$news1->id}}">READ MORE</a> 
                 </div>
@endforeach                 
@endsection