@extends('layouts.main_layout')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
       <div class="container">
           

                    <div class="row">
      <h4 style="color: #3544ab;margin: 0 auto;" class="text-center">{{$gallery->getDescription()}}</h4>
    </div>
        <div class="row">

            @foreach ($gallery->media as $image)
            <a href="{{env('image_storage') }}/{{$image->url}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img style="margin-bottom: 10%;height: 300px!important;" src="{{env('image_storage') }}/{{$image->url}}" class="img-fluid">
            </a>
            @endforeach  
        </div>
           </div>
        
    </div>
</div>

<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
@endsection
