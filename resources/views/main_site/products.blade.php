@extends('layouts.main_layout')

@section('content')
	<div class="row">
    <div class="bg-light border-right col-2 d-none d-lg-block " id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 class="medium_font">Choose what Type of product you want:</h5>
      </div>
      <div class="list-group list-group-flush">
      	@foreach ($products as $product)
        <a href="/product/{{$product->id}}" class="list-group-item list-group-item-action bg-light">{{$product->en_title}}</a>
        @endforeach
      </div>
    </div>


        <div class="bg-light border-right col-2 d-block d-lg-none" id="sidebar-wrapper">
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:#3544ab;color:white;border-color: #3544ab;">Choose what Type of product you want:
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	@foreach ($products as $product)
    <li style="background-color:#3544ab;"><a style="color: white;" href="/product/{{$product->id}}">{{$product->en_title}}</a></li>
    @endforeach
  </ul>
</div>
    </div>

    <div class="col-lg-10 col-md-12 col-sm-12" id="main" style="background-color:#d6d6d6;">
      <div class="container">
        <div class="row">
        <div class="container-fluid">
        <div class="row" style="margin-top: 2%;margin-bottom: 2%;">
        	@foreach ($products as $product)
        		{{-- expr --}}
        	
                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
  </div>
</div>

                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
  </div>
</div>

                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
  </div>
</div>

                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
  </div>
</div>

                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
  </div>
</div>

                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
  </div>
</div>

                  <div class="card small_font" id="product">
  <img class="card-img-top" src="{{env('image_storage')}}/{{$product->product_media[0]->url}}" alt="Card image">
  <div class="card-body">
    <h5 class="card-title">{{$product->en_title}}</h5>
    <p class="card-text">{{ str_limit($product->en_description, $limit = 150, $end = '...') }}</p>
    <a href="/product/{{$product->id}}" id="product_button" href="#" class="btn btn-primary">More ...</a>
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
        <img src="{{env('image_storage')}}/{{$partner->image}}" class="img-responsive item">
      </div>
      @endforeach
    </div>
  </div>
 </div>

</section>

@endsection