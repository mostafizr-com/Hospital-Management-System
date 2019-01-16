<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/assets/images/favicon.ico') }}">

        <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>

        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
        <style>

          .logo{
            line-height:75px !important;
          }  
          .slimScrollBar{
              display: none !important;
          }
          .topbar-left{
            height: 70px;
            background:#6d7beba1; 
          }

          .menu-title{
            /* background: #A2ABF2; */
            color: #2d3b48bf;
            font-size: 14px;
          }
          .fa{
              /* color: #F1A52F !important; */
              font-size: 22px !important;
          }
          .red{
              color:red !important;
          }
          .green{
              color: #0B6623 !important;
          }
          .blue{
              color: blue !important;
          }
          .orange{
              color: orange !important;
          }
          .purple{
              color: purple !important;
          }
          .mauve{
            color: #754C82 !important;
          }
          .scarelet{
              color: #FF2300 !important;
          }
          .air{
              color:#598BAE !important;
          }
          .moss{
            color: #8A9A5B !important;
          }

        </style>

        @stack('css')
</head>

<body class="fixed-left">

     <div id="app">    
        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('cp.inc.left-sidebar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include('cp.inc.topbar')
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            @if (Session::get('success'))
                                <div class="alert alert-success">

                                    {{ Session::get('success') }}

                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if (Session::get('error'))
                                <div class="alert alert-danger">
                                    
                                    {{ Session::get('error') }}

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                           @endif
    

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{ $error }}

                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endforeach
                            @endif
                        


                            
                        @yield('content')



                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Annex by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

         <!-- Required datatable js -->
         <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
         <!-- Buttons examples -->
         <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
         <!-- Responsive examples -->
         <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
         <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
 
         <!-- Datatable init js -->
         <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        {{-- <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();  
            } );
        </script> --}}


        @stack('js')
       

     </div>

</body>
</html>