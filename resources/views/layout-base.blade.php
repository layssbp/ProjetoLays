<html>
<head>
	<title>minha página</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>
	<div> <h1> Cabeçalho</h1></div>
	<div> @yield('conteudo') </div>
	<div> <h1> Rodape</h1></div>
	<button class="btn btn-danger"> Clique em mim</button>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>

</html>