@extends('layouts.main_layout')

@section('content')
	<div class="row">
    <div class="bg-light border-right col-2 d-none d-lg-block " id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 >Choose what Type of Service you want:</h5>
      </div>
      <div class="list-group list-group-flush">
      	@foreach ($services as $service)
        <a href="/service/{{$service->id}}" class="list-group-item list-group-item-action bg-light">{{$service->en_title}}</a>
        @endforeach
      </div>
    </div>


        <div class="bg-light border-right col-2 d-block d-lg-none" id="sidebar-wrapper">
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:#3544ab;color:white;border-color: #3544ab;">Choose what Type of Service you want:
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	@foreach ($services as $service)
    <li style="background-color:#3544ab;"><a style="color: white;" href="/service/{{$service->id}}">{{$service->en_title}}</a></li>
    @endforeach
  </ul>
</div>
    </div>

    <div class="col-lg-10 col-md-12" id="main" style="background-color:#d6d6d6;">
      <div class="container">
  <h1 class="text-center">Services</h1>
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
        </div>
        <div class="container">
        <div class="row" style="margin-top: 2%">
        	@foreach ($services as $service)
        		{{-- expr --}}
        	
                  <div class="card col-lg-4">
  <img class="card-img-top img-responsive" src="{{env('image_storage')}}/{{$service->media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">{{$service->en_title}}</h4>
    <p class="card-text">{{$service->en_description}}</p>
    <a id="service_button" href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
@endforeach
        </div>
      </div>

        </div>


        </div>
</div>
    </div>

@endsection