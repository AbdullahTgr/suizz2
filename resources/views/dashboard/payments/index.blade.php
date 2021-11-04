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
    <h1 class="h3 mb-2 text-gray-800">Payments</h1>
   
   
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
                            <th rowspan="1" colspan="1">Service</th>
                             <th rowspan="1" colspan="1">Email</th>
                             <th rowspan="1" colspan="1">phone</th>
                             <th rowspan="1" colspan="1">Price</th>
                            <th rowspan="1" colspan="1">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                                 
                        @forelse ($payments as $key => $payment)
                        <tr class="odd">
                            <td class="sorting_1">
                             {{$key+1}}
                            </td>
                            <td>{{$payment->name}}</td>
                            <td>{{$payment->service_id ? $payment->service->name : 'Custom Price'}}</td>
                            <td>{{$payment->email}}</td>
                            <td>{{$payment->phone}}</td>
                            <td>${{$payment->price}}</td>
                             
                            <td>
                                @if ($payment->status == null)
                                <div  type="button"  data-toggle="modal" data-target="#deleteProduct{{$payment->id}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approve</div>
                                 @elseif ($payment->status == 'Approved')
                                  <span class="badge bg-success">Approved</span>
                                @endif                                
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
  
@foreach ($payments as $payment)
 @include('dashboard.payments.approve')
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




