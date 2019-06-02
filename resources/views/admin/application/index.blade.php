    @extends('layouts.admin_layout')
@section('styles')
    <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this application -->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection
    @section('content')
    <div id="content-wrapper">



     

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
                    <th>applicant english name </th>
                    <th>applicant arabic name </th>
                    <th>service</th>
                    <th>user</th>
                    <th>birthdate</th>
                    <th>code</th>
                    <th>application date</th>
                     <th>Operations</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($applications as $application)
                  <tr>
                    <td>{{$application->id }}</td>
                    <td>{{$application->applicant_name_en}}</td>
                    <td>{{$application->applicant_name_ar}}</td>
                    <td>{{$application->service->en_title}}</td>
                    <td>{{$application->user->name}}</td>
                     <td>{{$application->birthdate}}</td>
                      <td>{{$application->code}}</td>
                       <td>{{$application->date}}</td>
                    <td style="width: 17%;"><div class="container">
                      <div  class="row"><a style="margin-left:1%" href="/admin/{{Request::segment(2)}}/{{$application->id}}"><button class="btn btn-primary" aria-hidden="true">View App details</button></a></div>
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
            <span>Copyright © KIB 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
    @endsection

    @section('scripts')
   <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all applications-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- application level plugins -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- application level custom scripts -->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <script src="{{ asset('js/dropzone.js') }}"></script>

    <script type="text/javascript">
      $(".js-example-tokenizer").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
    </script>
@endsection