@extends('layouts.main_layout')

@section('content')
  <div class="row">
    <div class="bg-light border-right col-2 d-none d-lg-block " id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 class="medium_font">Choose what Type of Service you want:</h5>
      </div>
      <div class="list-group list-group-flush">
        @foreach ($services as $service)
        @if ($service->id==$main_service->id)
            <a style="background-color: #3544ab!important;color: white;" href="/service/{{$service->id}}/show" class="list-group-item list-group-item-action bg-light">{{$service->en_title}}</a>
              @else
               <a href="/service/{{$service->id}}/show" class="list-group-item list-group-item-action bg-light">{{$service->en_title}}</a>
        @endif
     
        @endforeach
      </div>
    </div>


 <div class="bg-light border-right col-2 d-block d-lg-none" id="sidebar-wrapper">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:#3544ab;color:white;border-color: #3544ab;">Choose what Type of Service you want:
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      @foreach ($services as $service)
       @if ($service->id==$main_service->id)
      <li style="background-color: #3544ab!important;color: white;"><a style="color: white;" href="/service/{{$service->id}}/show">{{$service->en_title}}</a></li>
         @else
          <li style="background-color:#ffffff;color:black"><a style="color: white;" href="/service/{{$service->id}}/show">{{$service->en_title}}</a></li>
         @endif
      @endforeach
    </ul>
  </div>
</div>

    <div class="col-lg-10 col-md-12 col-sm-12" id="main" style="background-color:#d6d6d6;">
      <div class="container">
        <div class="row">
        <div class="container-fluid">
        <div class="row" style="margin-top: 2%;margin-bottom: 2%;">
          @foreach ($main_service->sons as $service)
            {{-- expr --}}
          
<div class="card small_font" id="service">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$service->media[0]->url}}" alt="Card image">
  <div class="card-body">
      <h5 class="card-title">{{$service->en_title}}</h5>
      <p class="card-text">{{ str_limit($service->en_description, $limit = 150, $end = '...') }}</p>
      @if ($service->parent_id==0)
     <a href="/service/{{$service->id}}/show" id="service_button" href="#" class="btn btn-primary">More ...</a>
      @else
      <a href="/service/{{$service->id}}" id="service_button" href="#" class="btn btn-primary">More ...</a>
      @endif
  </div>
</div>













@endforeach
        </div>
      </div>

        </div>


        </div>
</div>
    </div>

    <section id="clients">
<div class="container">
  <div class="row">
    <div id="owl" class=" col-lg-12 owl-carousel">
      @foreach ($partners as $partner)
      <div class="col-lg-10 client">
        <img style="width: 100px !important;height: 100px !important;border-radius: 50%;" src="{{env('image_storage')}}/{{$partner->image}}" class="img-responsive item">
      </div>
      @endforeach
    </div>
  </div>
 </div>

</section>

@endsection