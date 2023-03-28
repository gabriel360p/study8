@extends('master')

@section('head')
@endsection

@section('navbar')
<div class="container">
    <span class="display-5">Adicionando Endereço</span>
</div>
@endsection

@section('content')

<div class="container">
    <form action="{{route('enderecos.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
          <label for="" class="form-label">Rua</label>
          <input type="text"
            class="form-control" name="rua" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Nome da rua</small>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Numero</label>
            <input type="number"
              class="form-control" name="numero" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Numero</small>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Bairro</label>
            <input type="text"
              class="form-control" name="bairro" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Nome do Bairro</small>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Imovel</label>
            <select class="form-select form-select-lg" name="imovel" id="" required>
              @php
                  use App\Models\Imovel;
                  $imovels=Imovel::all();
              @endphp
              @foreach ($imovels as $imovel)
                <option value="{{$imovel->id}}">{{$imovel->titulo}}</option>  
              @endforeach

            </select>
          </div>

          <button class="btn btn-primary">Adicionar</button>

    </form>
</div>

@endsection



