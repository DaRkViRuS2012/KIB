@extends('layouts.main_layout')

@section('content')
<div id="aniimated-thumbnials">
  <a href="{{ asset('main_site/img/1.jpg') }}">
    <img src="{{ asset('main_site/img/1.jpg') }}" class="img-fluid" />
  </a>
  <a href="{{ asset('main_site/img/1.jpg') }}">
    <img src="{{ asset('main_site/img/1.jpg') }}" class="img-fluid" />
  </a>
  ...
</div>
<script type="text/javascript">
          $('#aniimated-thumbnials').lightGallery({
    thumbnail:true
}); 
</script>
@endsection