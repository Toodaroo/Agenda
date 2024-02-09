<x-layout title="Excluir">
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$dado->nome}}</h5>
                <p class="card-text">{{$dado->descricao}}</p>
                <p class="card-text"><small class="text-muted">{{$dado->data_hora}}</small></p>
            </div>
        </div>

        <form action="/excluir/{{$dado->id}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Excluir</button>
            <a href="/consultar" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
</x-layout>
