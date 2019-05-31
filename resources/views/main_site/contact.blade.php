@extends('layouts.main_layout')
@section('content')
<section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
            <h2 class="tittle text-center mb-md-5 mb-4">Get In Touch</h2>
            <div class="container">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p id="address1"> California, USA

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p id="email1">Email :
                                    <a href="mailto:example@email.com"> mail@example.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p id="phone1">+1 234 567 8901</p>

                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 map">
                      <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                    </div>
                    <div class="col-md-6 main_grid_contact">
                           @if (Session::get('locale')=="en")
                               <h4 class="mb-4 text-left">@lang('Send us a message')</h4><br>
                               @else
                               <h4 class="mb-4 text-right">@lang('Send us a message')</h4><br>
                            @endif
                        <div class="form">
                         
                            <form method="post" action="{{ route('contactus.store') }}">
                             {{--    <form method="post" action="#"> --}}
                                @csrf
                                <div class="form-group">
                                    <label class="my-2">@lang('Name')</label>
                                    <input class="form-control" type="text" name="name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>@lang('Email')</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                        <div class="form-group">
  <label for="comment">@lang('Comment')</label>
  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
</div>

                                          <div class="form-group">
    <label for="exampleInputEmail1">type</label>
    <select name="type" class="form-control">
      <option disabled>Select  type</option>
      <option value="enquiry">enquiry</option>
      <option value="complaint">complaint</option>

    </select>
    
  </div>

                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="@lang('Submit')" style="background-color: #3544ab;
    color: white;">
                                </div>

              </form>
                            @if(session()->has('success'))
    <div style="margin-top:3%" class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
{{-- <center>
    <h1>
        Under Construction
    </h1>
    </center> --}}
@endsection