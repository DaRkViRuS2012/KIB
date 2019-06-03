<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
<div class="container">


<div class="row">
  <h2 style="color:#3544ab">Fill Your Application</h2>
</div>
<form action="/application/{{$user->id}}/{{$user->token}}/create" method="post">
  @csrf
<div class="row">
  <div class="form-group col-lg-4 col-sm-12">
    <label for="email">First Name</label>
    <input name="fname_en" class="form-control" id="email" type="text">
  </div>
  <div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">Father's Name</label>
    <input name="father_name_en" class="form-control" id="pwd" type="text">
  </div>

    <div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">Surname (Family Name)</label>
    <input name="lname_en" class="form-control" id="pwd" type="text">
  </div>


   <div class="form-group col-lg-4 col-sm-12">
    <label for="email">الاسم</label>
    <input name="fname_ar" class="form-control" id="email" type="text">
  </div>
  <div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">اسم الاب</label>
    <input name="father_name_ar" class="form-control" id="pwd" type="text">
  </div>

    <div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">الكنية</label>
    <input name="lname_ar" class="form-control" id="pwd" type="text">
  </div>



  <div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">Nationality الجنسية</label>
    <input name="nationality" class="form-control" id="pwd" type="text">
  </div>


    <div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">National ID الرقم الوطني</label>
    <input name="national_id" class="form-control" id="pwd" type="text">
  </div>

<div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">Martial Status الحالة الاجتماعية</label>
    <input name="martial_status" class="form-control" id="pwd" type="text">
  </div>

<div class="form-group col-lg-4 col-sm-12">
    <label for="pwd">Work المهنة</label>
    <input name="work" class="form-control" id="pwd" type="text">
  </div>






  <div class="form-group col-lg-6 col-sm-12">
<label for="pwd">Issuing date تاريخ الاصدار</label>
<input name="is_date"  class="form-control" id="pwd" type="date">
</div>


<div class="form-group col-lg-6  col-sm-12">
<label for="pwd">Date of Birth (DD-MM-YY) تاريخ الميلاد</label>
<input name="birthdate"  class="form-control" id="pwd" type="date">
</div>
</div>
<!--
  <div class="form-group col-lg-6 col-sm-12">
   <label for="pwd">service</label>
   <select class="form-control" name="service_sons">
     <option selected disabled>@lang('select')</option>
     @foreach ($services as $service)

       <option value="{{$service->id}}">{{$service->en_title}}</option>
     @endforeach
   </select>


 </div> -->
 <div class="row">
   
 
 <div class="form-group col-lg-6 col-sm-12">
 <label for="pwd">@lang('category') </label>
 <select class="form-control" name="service"  id="main_service">
   <option selected disabled>Select Your Main Service</option>
   @foreach ($services as $service)
     <option value="{{$service->id}}">{{$service->en_title}}</option>
   @endforeach
 </select>
</div>

<div class="form-group col-lg-6 col-sm-12">
<label for="pwd">@lang('product')</label>
<select class="form-control" name="sub_service" id="sub_service">
  <option selected disabled>@lang('select')</option>
</select>
</div>
</div>






  <div class="row" id="options">

  </div>


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
    $('#main_service').on('change', '', function (e) {
get_options();
});



</script>
</body>
</html>