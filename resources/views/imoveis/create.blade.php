@extends('master')

@section('head')
@endsection

@section('navbar')
<div class="container">
    <span class="display-5">Adicionando Imovel</span>
</div>
@endsection

@section('content')

<div class="container">
    <form action="{{route('imovels.store')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="" class="form-label">Titulo</label>
          <input type="text"
            class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Nome do imovel</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Descrição do Imovel</label>
          <textarea class="form-control" name="descricao" id="" rows="3"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Imovel</label>
            <select class="form-select form-select-lg" name="tipo_id" id="" required>
                @php
                    use App\Models\Tipo;
                    $tipos = Tipo::all();
                @endphp

                @foreach ($tipos as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                @endforeach

            </select>
        </div>

        <button class="btn btn-primary">Salvar</button>

    </form>
</div>

@endsection



