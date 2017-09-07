<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listagem Usuário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <?php include('init.php');?>
        <div class="container">
            <h1>Listagem de Usuário</h1>

            <br>
            
            <a href="" class="btn btn-default">Cadastrar Usuário</a> 

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($usuarios as $k => $usuario) : ?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$usuario['nome']?></td>
                        <td><?=$usuario['funcao']?></td>
                        <td>
                            <a href="" class="btn btn-primary">Editar</a>
                            <a href="" class="btn btn-danger">Deletar</a>
                            
                        </td>

                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>

            </table>
        </div>
    </body>
</html>
