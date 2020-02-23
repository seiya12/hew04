@section('admin_head')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hunc_admin-@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- CSS -->
<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
<!--Vue-->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!--hammer.js-->
<script src="{{ asset('js/hammer.min.js') }}"></script>
<script src="{{ asset('js/jquery.hammer.js') }}"></script>

@yield('style')
@endsection