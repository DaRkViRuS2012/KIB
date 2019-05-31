@extends('layouts.main_layout')

@section('content')
<div class="container">

<div class="row">
	<h2 style="color:#3544ab">Your Application Details</h2>
</div>
<form action="/application/create" method="post">
  @csrf
<div class="row">
  <div class="form-group col-6">
    <label for="email">Applicant Full name </label>
    <input name="fname_en" class="form-control" id="email" type="text" value="{{$application->applicant_name_en}}" disabled>
  </div>
  <div class="form-group col-6">
    <label for="pwd">الاسم الكامل</label>
 <input name="fname_ar" class="form-control" id="email" type="text" value="{{$application->applicant_name_ar}}" disabled>
  </div>


     <div class="form-group col-6">
    <label for="pwd">Birthdate</label>
    <input name="birthdate"  class="form-control" id="pwd" type="text" value="{{$application->birthdate}}" disabled>
  </div>

    <div class="form-group col-6">
    <label for="pwd">Service Name</label>
    <input name="service_name_en" class="form-control" id="pwd" type="text" value="{{$application->service->en_title}}" disabled>
  </div>

   <div class="form-group col-6">
    <label for="pwd">اسم الخدمة</label>
    <input name="service_name_ar" class="form-control" id="pwd" type="text" value="{{$application->service->ar_title}}" disabled>
  </div>

  @foreach ($application->options as $option)
  	{{-- expr --}}

   <div class="form-group col-6">
    <label for="email">{{$option->title}}</label>
    <input name="{{$option->attr}}" class="form-control" id="email" type="text" value="{{$option->app_option->value}}" disabled>
  </div>
    @endforeach


     <div class="form-group col-6">
    <label for="pwd">Code</label>
    <input name="birthdate"  class="form-control" id="pwd" type="text" value="{{$application->code}}" disabled>
  </div>

      <div class="form-group col-6">
    <label for="pwd">Cost</label>
    <input name="birthdate"  class="form-control" id="pwd" type="text" value="{{$cost}}" disabled>
  </div>

</div>

 <div class="row">
<a style="color:#3544ab;margin: 1%;font-size: 20px;" href="/">click here if you want to back to main page</a>
</div>

{{--     <div class="form-group col-6">
    <label for="pwd">service</label>
    <select class="form-control" name="service_sons">
    	<option selected disabled>Select Your Main Service</option>
    	@foreach ($services as $service)
    	@foreach ($ as $element)
    		<option value="{{$service->id}}">{{$service->en_title}}</option>
    	@endforeach
    	
    	@endforeach
    </select>

    
  </div> --}}

<div class="row">
<button style="margin: 1%;
    padding: 1% 3% 1% 3%;background-color:#3544ab;border-color:#3544ab" type="submit" class="btn btn-primary">Submit</button>	
</div>
  
</form>
</div>


<script type="text/javascript" src="{{ asset('main_site/js/options.js') }}"></script>
<script type="text/javascript">
  $('#main_service').on('change', '', function (e) {
get_sub_service();
});
	  $('#sub_service').on('change', '', function (e) {
get_options();
});
  


</script>
@endsection