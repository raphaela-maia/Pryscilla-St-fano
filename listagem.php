<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']){
            case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

            case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';   
            break; 
        }
    }

    $resultados = '';
    foreach($consultas as $consulta){
        $resultados .= '<tr>
                    <td>'.$consulta->id.'</td>
                    <td>'.$consulta->nome.'</td>
                    <td>'.$consulta->email.'</td>
                    <td>'.date('d/m/Y', strtotime($consulta->data)).'</td>
                    <td>'.$consulta->hora.'</td>
                    <td>'.$consulta->telefone.'</td>
                    <td>
                        <a href="">
                            <button type="button" onclick="funcao1()" class="btn btn-success">Marcar</button>
                            </a>
                        <a href="desmarcar.php?id=' .$consulta->id.'">
                            <button type="button" class="btn btn-danger">Desmarcar</button>
                            </a>
                    </td>
                    </tr>';
        
        
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                        <td colspan="7" class="text-center">
                                                            Nenhuma consulta encontrada
                                                        </td>
                                                       </tr>';
?>

<main>

<script>
function funcao1()
{
alert("Consulta marcada!");
}
</script>

    <?=$mensagem?>


    <section>

        <table bgcolor="#C0C0C0" class ="table text-light mt-3">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?=$resultados?>
                </tbody>
        </table>

    </section>

</main>