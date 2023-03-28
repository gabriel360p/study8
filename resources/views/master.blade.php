<!DOCTYPE html>
<html>
<head>
	@yield('head')
	<meta charset="utf-8">
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>@yield('title')</title>
</head>
<body>
	
<div class="container">
	@yield('navbar')
	<div class="btn-toolbar" role="toolbar" aria-label="Toolbar">
		<div class="btn-group" role="group" aria-label="Button Group">
			<a href="{{url('/')}}" type="button" class="btn btn-primary">Inicio</a>
			<a href="{{route('imovels.create')}}" type="button" class="btn btn-primary">Novo Imovel</a>
			<a href="{{route('enderecos.create')}}" type="button" class="btn btn-primary">Novo Endereco</a>
			<a href="{{route('tipos.create')}}" type="button" class="btn btn-primary">Novo Tipo de imovel</a>
			{{-- <a href="{{route('categorias.create')}}" type="button" class="btn btn-primary">Nova Categoria</a> --}}
			{{-- <a href="" type="button" class="btn btn-primary">Button</a> --}}
		</div>
	</div>
</div>

<div class="container">
	@yield('content')
</div>


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</body>
</html>