@php
$nav = '';    
$header = '';    
$footer = '';    
$style = '';
@endphp
@extends('layouts.app')
@section('content')


 

    <!-- Custom fonts for this template-->
    <link href="{{asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

 

    <!-- Page Wrapper -->
    <div id="wrapper">

                    <!-- Sidebar -->
                        @include('dashboard.left-nav')
                    <!-- End of Sidebar -->

         <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                     @include('dashboard.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                      

                
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Services</h1>
   
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a type="button"  data-toggle="modal" data-target="#addPostService" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> New Service Post</a>
        </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
     

        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        <div class="row"><div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  
                    <thead>
                        <tr>
                            <th rowspan="1" colspan="1">#</th>
                            <th rowspan="1" colspan="1">Name</th>
                             <th rowspan="1" colspan="1">Description</th>
                             <th rowspan="1" colspan="1">Icon</th>
                            <th rowspan="1" colspan="1">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                                 
                        @forelse ($service_post as $key => $service)
                        <tr class="odd">
                            <td class="sorting_1">
                              {{$key+1}}
                            </td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->description}}</td>
                            <td><img style=" max-width: 30px; " src="{{asset(str_replace('public','storage',$service->icon))}}" alt="" srcset=""></td>
                            
                            <td>
                                 <div  type="button"  data-toggle="modal" data-target="#editProduct{{$service->id}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</div>
                                <div  type="button"  data-toggle="modal" data-target="#deleteProduct{{$service->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</div>                                
                            </td>
                         </tr>
                        @empty
                            {{'No data to show.'}}
                        @endforelse
                        
  
                      </tbody>
                </table>
            </div>
        </div>
       </div>
            </div>
        </div>
    </div>

</div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    </div>
     @include('dashboard.services.posts.create')

@foreach ($service_post as $service)
@include('dashboard.services.posts.edit')
@include('dashboard.services.posts.delete')
@endforeach

    
@endsection



@section('scripts')
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="{{asset('js/jquery-easing/jquery.easing.min.js')}}"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    
        <!-- Page level plugins -->
     
        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
     

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.1/datatables.min.js"></script>


        <script>
            $(document).ready( function () {
                $('#dataTable').DataTable();
            } );
 
            function preview(e,id)
            {
               for(var i = 0;i <=e.files.length;i++)
               {
                   if (id == null)
                   {
                    $('#pics').append('<div class="col-md-4"><img class="img-fluid" src="' + window.URL.createObjectURL(e.files[i])  +'"></div>')
                   }else 
                   {
                    $('#pics'+id).append('<div class="col-md-4"><img class="img-fluid" src="' + window.URL.createObjectURL(e.files[i])  +'"></div>')
                   }

               }
            }
        </script>
@endsection




