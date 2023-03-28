<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <!-- Page head Start-->
    @include('admin.layouts.head-tag')
    @yield('head-tag')
   <!-- Page head Ends-->
</head>

<body class="dark-only">
 
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
 
  <div class="page-wrapper compact-wrapper" id="pageWrapper">

    <!-- Page header Start-->
        @include('admin.layouts.header')
    <!-- Page header Ends-->

    <div class="page-body-wrapper horizontal-menu">
      <!-- Page Sidebar Start-->
        @include('admin.layouts.sidebar')
      <!-- Page Sidebar Ends-->
      <div class="page-body">
       @yield('content')
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
  
    </div>
  </div>
  <!-- latest script-->
    @include('admin.layouts.scripts')
    @yield('script')
</body>

</html>