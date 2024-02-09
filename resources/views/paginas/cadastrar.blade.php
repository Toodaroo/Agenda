<x-layout title="Cadastro">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container">
        <form action="/cadastrar/salvar" method="POST">
            @csrf
            <br><br><br>
            <h1>Cadastrar Tarefa</h1>

            <br><br>

            <label for="nome">Tarefa:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite a tarefa" required>

            <br><br>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" placeholder="Digite a descrição da tarefa"></textarea>

            <br><br>

            <label for="data_hora">Data e Hora:</label>
            <input type="datetime-local" id="data_hora" name="data_hora" required>

            <br><br>

            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>
</x-layout>
