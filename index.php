<?php include './View/Header.php'; ?>
<?php include './DAO/Conecta.php'; ?>
<script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
<script src="./Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./Assets/js/zepto.min.js" type="text/javascript"></script>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nome</td>
            <th>Sobrenome</td>
            <th>CPF</td>
            <th>Data de Nascimento</td>
            <th>Ação</td>
        </tr>
    </thead>

    <!-- Estrutura de loop -->
    <?php
    $Conecta = new Conecta();
    $BFetch = $Conecta->selectDB(
            "*", "pessoafisica", "", array());

    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $Fetch['nome']; ?></td>
            <td><?php echo $Fetch['sobrenome']; ?></td>
            <td><?php echo $Fetch['cpf']; ?></td>
            <td><?php echo $Fetch['data_nasc']; ?></td>
            <td>
                <a href="<?php echo "./View/Cadastro.php?id={$Fetch['id']}" ?>"><img src="./Assets/img/edit.png" width="30px" alt="Editar"></a>
                <a class="delete" href="<?php echo "./View/Deletar.php?id={$Fetch['id']}" ?>"><img src="./Assets/img/trash.png" width="30px" alt="Deletar"></a>
            </td>
        </tr>
        
    <?php } ?>
</table>

<?php include './View/Footer.php'; ?>