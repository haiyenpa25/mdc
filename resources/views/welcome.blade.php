<!DOCTYPE html>
<html lang="en">
<head>
  @extends('layouts.head')   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png'); }}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  @extends('layouts.nav')  
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @extends('layouts.menu-left') 
  <!-- Content Wrapper. Contains page content -->
  @extends('layouts.content') 
  <!-- /.content-wrapper -->
  @extends('layouts.footer')) 
</body>
</html>
