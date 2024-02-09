<x-layout title="Editar">
<form action="{{ route('atualizar', ['id' => $dado->id]) }}" method="post">
        @csrf
        <label> Id: </label>
        <input type="number" id="id" name="id" value="{{$dado->id}}" disabled required/><br><br>
 
        <label> Nome: </label>
        <input type="text" id="nome" name="nome" value="{{$dado->nome}}" required/><br><br>

        <label> Descrição: </label>
        <input type="text" id="descricao" name="descricao" value="{{$dado->descricao}}" required/><br><br>

        <button class="btn btn-primary" type="submit">Atualizar</button>
        <a class="btn btn-primary" href="/cadastrar">Voltar</a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Excluir
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        </div>
    </form>
</x-layout>
