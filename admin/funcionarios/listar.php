<?php

require_once('class/funcionarios.php');
$funcionarios = new FuncionariosClass();
$lista = $funcionarios->ListarFuncionarios();

//var_dump($lista)



?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&i=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Funcionario
    </a>


</div>



<div class="table-responsive">
    <table class="table">
        <caption> Lista de funcionarios</caption>

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Turno </th>
                <th scope="col">Nivel</th>
                <th scope="col">Email</th>
                <th scope="col">senha</th>
                <th scope="col">status</th>
            </tr>
        <tbody>
            <?php foreach ($lista as $funcionario) { ?>
                <tr>
                    <td><?php echo $funcionario['idFuncionario']; ?></td>
                    <td><?php echo $funcionario['nomeFuncionario']; ?></td>
                    <td><?php echo $funcionario['turnoFuncionario']; ?></td>
                    <td><?php echo $funcionario['nivelFuncionario']; ?></td>
                    <td><?php echo $funcionario['emailFuncionario']; ?></td>
                    <td><?php echo $funcionario['senhaFuncionario']; ?></td>
                    <td><?php echo $funcionario['statusFuncionarios']; ?></td>


                </tr>
            <?php } ?>


        </tbody>









    </table>

</div>