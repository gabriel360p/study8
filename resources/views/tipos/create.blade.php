@extends('master')

@section('head')
@endsection

@section('navbar')
<div class="container">
    <span class="display-5">Adicionando Tipo de Imovél</span>
</div>
@endsection

@section('content')

<div class="container">
    <form action="{{route('tipos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Tipo</label>
          <input type="text"
            class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Tipo de Imovel</small>
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
</div>

@endsection



