<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width">
	<title>Project Management</title>

	<script src="http://use.typekit.net/udt8boc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/jquery.atwho.js') }}"></script>
<script src="{{ asset('js/jquery.caret.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/jquery.atwho.min.css') }}">
@include('mentions::assets')
</head>
<body>
	<div class="container">
		
		@yield('content')
	</div>
</body>
</html>