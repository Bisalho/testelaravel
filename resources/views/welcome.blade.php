<!DOCTYPE html <html>
<head>
    <title>testelaravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>testelaravel</h1>
    <hr />
        <form action="/enviar" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome"> </div>
        <div class="form-group">
            <label for="categoria">categoria</label>
            <input type="text" id="categoria" name="categoria" class="form-control" placeholder="categoria"> </div>
        <div class="form-group">
            <label for="categoria">preco</label>
            <input type="preco" id="preco" name="preco" class="form-control" placeholder="preço"> </div>
        <div class="form-group">
            <textarea id="descricao" name="descricao" class="form-control" placeholder="Digite sua descricao"></textarea>
        </div>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
</body>
</html>