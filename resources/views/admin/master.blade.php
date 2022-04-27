<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
  	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Novas - Admin</title>
    <!-- BEGIN: CSS Assets-->
   @include('admin.styles')
    {{--@stack('style')--}}
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
<!-- BEGIN: Mobile Menu -->
@include('admin.sidebar-mobile')
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
        @include('admin.sidebar')
    <!-- END: Side Menu -->

    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('admin.top-bar')
        <!-- END: Top Bar -->
        @yield('content')
    </div>
    <!-- END: Content -->
</div>

<!-- BEGIN: JS Assets-->
@include('admin.script')
<!-- END: JS Assets-->
</body>
</html>
