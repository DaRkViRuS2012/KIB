@extends('layouts.main_layout')

@section('content')
<div class="container">
	

<div class="row">
	<h2 style="color:#3544ab">Fill Your Application</h2>
</div>
<form action="/application/create" method="post">
  @csrf
<div class="row">
  <div class="form-group col-4">
    <label for="email">First Name</label>
    <input name="fname_en" class="form-control" id="email" type="text">
  </div>
  <div class="form-group col-4">
    <label for="pwd">Father's Name</label>
    <input name="father_name_en" class="form-control" id="pwd" type="text">
  </div>

    <div class="form-group col-4">
    <label for="pwd">Last Name</label>
    <input name="lname_en" class="form-control" id="pwd" type="text">
  </div>


   <div class="form-group col-4">
    <label for="email">الاسم</label>
    <input name="fname_ar" class="form-control" id="email" type="text">
  </div>
  <div class="form-group col-4">
    <label for="pwd">اسم الاب</label>
    <input name="father_name_ar" class="form-control" id="pwd" type="text">
  </div>

    <div class="form-group col-4">
    <label for="pwd">الكنية</label>
    <input name="lname_ar" class="form-control" id="pwd" type="text">
  </div>

    <div class="form-group col-6">
    <label for="pwd">service</label>
    <select class="form-control" name="service" name="main_service" id="main_service">
    	<option selected disabled>Select Your Main Service</option>
    	@foreach ($services as $service)
    		<option value="{{$service->id}}">{{$service->en_title}}</option>
    	@endforeach
    </select>
  </div>


    <div class="form-group col-6">
    <label for="pwd">sub service</label>
    <select class="form-control" name="sub_service" id="sub_service">
      <option selected disabled>Select Your Main Service</option>
    </select>
  </div>



</div>

  <div class="row" id="options">
    
  </div>
{{--     <div class="form-group col-4">
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