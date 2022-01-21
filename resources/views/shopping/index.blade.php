<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>

<body>
    <h1>Lista de Compras</h1>
    <form action="/shopping/store" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Nome do Item">
        <button type="submit">Adicionar</button>
    </form>
    <hr>
    @foreach($item as $it)
        <h2>{{ $it->name }}</h2>
    @endforeach
</body>

</html>