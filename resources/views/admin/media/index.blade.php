    @extends('layouts.admin_layout')

    @section('content')
    <div id="content-wrapper">

      <a style="margin:1%" href="/admin/gallery_images/create/{{$galleryimages[0]->gallery->id}}" class="btn btn-success"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Add image to gallery</a>

     

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" style="text-transform: capitalize;">{{Request::segment(2)}}</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            {{Request::segment(2)}}</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>gallery</th>>
                    <th>image</th>
                    <th>Operations</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($galleryimages as $gallery_image)
                  <tr>
                    <td>{{$gallery_image->id}}</td>
                    <td>{{$gallery_image->gallery->title }}</td>
                       <td><img class="img-responsive col-md-4" src="{{env('image_storage') }}/{{$gallery_image->image}}"></td>
                    <td style="width: 17%;"><div class="container">
                      <div  class="row"><a style="margin-left:1%" href="/admin/gallery_images/update/{{$gallery_image->id}}"><button class="btn btn-primary" aria-hidden="true">Edit</button></a><a  style="margin-left:1%;color:rgba(204, 0, 0, 1);" onclick="return confirm('Are you sure you want to delete this product')" href="/admin/gallery_images/delete/{{$gallery_image->id}}"><button class="btn btn-danger" aria-hidden="true">Delete</button></a></div>
                      </div>
                    <div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

   

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
    @endsection