@extends('master')

@section('head')
@endsection

@section('navbar')
<div class="container">
    <span class="display-5">Eloquent</span>
    <br>
    {{-- <small>Estudando Relacionamentos do Eloquent!</small> --}}
</div>
@endsection

@section('content')

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            {{-- <tr> --}}
                <th scope="col">Titulo</th>
                <th scope="col">Endereco</th>
                <th scope="col">Tipo</th>
                {{-- <th scope="col">Opções</th> --}}
            {{-- </tr> --}}
        </thead>
        <tbody>

            @php
                use App\Models\Imovel;
                $imovels=Imovel::all();
            @endphp

            @forelse ($imovels as $imovel)
            {{-- corrigir, ainda não esta funcionando --}}
                <tr> 
                    <td > {{$imovel->titulo}}</td>
                    <td > {{$imovel->endereco->rua}}</td>
                    <td > {{$imovel->tipo}}</td>
                </tr>
                    @empty
                <td>Nenhum imovel cadastrado</td>
            @endforelse

        </tbody>
    </table>
</div>


@endsection



