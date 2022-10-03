<!-- 예제 4-8 블레이드 레이아웃 -->

<!-- resources/views/layouts/master.blade.php -->
<html>
    <head>
	<title> 웹 사이트 | @yield('title', 'Home Page')</title>
    </head>
    <body>
	<div class="container">
	    @yield('content')
	</div>
	@section('footerScripts')
	    <script src="app.js"></script>
	@show
    </body>
</html>
