<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>

	<div>
		
		@if(isset($produtos))
			<h1 style="color: red"><center>Recebi a lista de produtos</center></h1>
			@else
				<h1>Não recebi a lista de produtos</h1>
		@endif
		@component('components.navbar', ['produtos'=>$produtos, 'cor'=>'navbar-red'])
		@endcomponent

		@component('components.produtoCard')
		@endcomponent

	</div>

	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>