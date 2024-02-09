<x-layout title="Consultar">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <div class="container">
        @csrf
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">tarefa</th>
                    <th scope="col">descricao</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dados as $dado)
                <tr>
                    <th scope="row">{{$dado->id}}</th>
                    <td>{{$dado->nome}}</td>
                    <td>{{$dado->descricao}}</td>
                    <td>
                    <a class="btn btn-primary" href="{{ url('/editar/'.$dado->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                        <!-- Ícone de edição -->
                    </svg>
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
