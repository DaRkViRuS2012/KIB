@extends('layouts.main_layout')

@section('content')
   @foreach ($galleries as $gallery)
                            
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card img">
                                    <a href="/gallery/{{$gallery->id}}">
                                    <div class="card-body img">
                                        <img src="{{env('image_storage')}}/{{$gallery->media[0]->url}}" alt="" class="img-fluid corner">
                                        <h5 id="gallery_title" class="card-title">{{$gallery->en_title}}</h5>
                                    </div>
                                     </a>
                                </div>
                            </div>
                       
                              @endforeach
@endsection