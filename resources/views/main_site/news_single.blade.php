@extends('layouts.main_layout')

@section('content')
<div class="container">
	 <div class="row">
	 		<div class="col-md-6">
                     <h1>Title 1</h1>
                     <img src="{{ asset('/img/1.jpg') }}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     </div>
                     <div class="col-md-6">
                     <article style="margin-top: 10%;"><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.    
                         </p></article>
                     </div>
                 </div>
                 </div>
@endsection