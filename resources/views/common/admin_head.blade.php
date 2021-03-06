@section('admin_head')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<title>Hunc_admin-@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{ asset('img/favicon.ico',$is_production) }}">
<!-- Bootstrap -->
<link href="{{ asset('css/app.css',$is_production) }}" rel="stylesheet">
<!--Vue-->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!--external css-->
<link href="{{ asset('lib/font-awesome/css/font-awesome.css',$is_production) }}" rel="stylesheet">
<link href="{{ asset('css/admin/zabuto_calendar.css',$is_production) }}" rel="stylesheet">
<link href="{{ asset('lib/gritter/css/jquery.gritter.css',$is_production) }}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{ asset('css/admin/style.css',$is_production) }}" rel="stylesheet">
<link href="{{ asset('css/admin/style-responsive.css',$is_production) }}" rel="stylesheet">
<script src="{{ asset('lib/chart-master/Chart.js',$is_production) }}"></script>

<style type="text/css">
<!--
/* body {font-family:"Meiryo"; } */
-->
</style>


@yield('style')
@endsection