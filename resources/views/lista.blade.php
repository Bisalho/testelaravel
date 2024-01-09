<!DOCTYPE html>
<html>

<head>
    <title> Listagem </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Lista de mensagens</h1>

        <hr />

            <table class="table table_striped" align='center' width='600px' border='1'>
        <thead>
            <tr>
                <td>codigo</td>
                <td>nome</td>
                <td>categoria</td>
                <td>preco</td>
                <td>descricao</td>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $row)
                <tr>
                    <th scope="row">{{ $row->codigo }}</th>
                    <td>{{ $row->nome }} </td>
                    <td>{{ $row->categaria }} </td>
                    <td>{{ $row->preco }} </td>
                    <td>{{ $row->descricao }} </td>
                </tr>
            @endforeach
        </tbody>

            </table>
  
</body>
</html>
