<?php
include 'Header.php';
include '../DAO/Conecta.php';
if (isset($_GET['id'])) {
    $acao = "editar";

    $crud = new Conecta();
    $BFetch = $crud->selectDB("*", "PessoaFisica", "where id = ?", array($_GET['id']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $nome = $Fetch['nome'];
    $sobrenome = $Fetch['sobrenome'];
    $cpf = $Fetch['cpf'];
    $cep = $Fetch['cep'];
    $logradouro = $Fetch['logradouro'];
    $numero = $Fetch['numero'];
    $complemento = $Fetch['complemento'];
    $bairro = $Fetch['bairro'];
    $cidade = $Fetch['cidade'];
    $uf = $Fetch['uf'];
    $cnpj = $Fetch['cnpj'];
    $razaosocial = $Fetch['razaosocial'];
    $nomefantasia = $Fetch['nomefantasia'];
} else {
    $acao = "cadastrar";
    $nome = "";
    $sobrenome = "";
    $cpf = "";
    $datanasc = "";
    $cep = "";
    $logradouro = "";
    $numero = "";
    $complemento = "";
    $bairro = "";
    $cidade = "";
    $uf = "";
    $cnpj = "";
    $razaosocial = "";
    $nomefantasia = "";
}
?>

<body>
    <script src="../Assets/js/zepto.min.js" type="text/javascript"></script>
    <script src="/Assets/js/js.js" type="text/javascript"></script>

    <div class="container">
        <form class="form-horizontal" id="form_cadastro" name="form_cadastro" method="post" action="../Control/Controller.php">
            <input type="hidden" id="Acao" name="acao" value="<?php echo $acao; ?>">

            <legend><center><h2><b>Cadastrar</b></h2></center></legend><br>

            <div class="resultado"></div>

            <input class="input3" name="pessoa" type="radio" value="fisica" onClick="aparece('fisica');" />
            Pessoa Física
            <input class="input3" name="pessoa" type="radio" value="juridica" onClick="aparece('juridica');" />
            Pessoa Jurídica</td>

            <!-------- PESSOA FISICA -------->

            <div id="fisica" style="display: block;">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nome</label>
                    <div class="col-sm-4">
                        <input type="text" name="nome" id="nome" placeholder="Primeiro Nome" value="<?php echo $nome; ?>" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sobrenome</label>
                    <div class="col-sm-4">
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value ="<?php echo $sobrenome; ?>" class="form-control" maxlength="15" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Data de Nascimento</label>
                    <div class="col-sm-4">
                        <input type="text" name="datanasc" id="datanasc" placeholder="Data de Nascimento" class="form-control" value = "<?php echo $datanasc; ?>" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">CPF</label>
                    <div class="col-sm-4">
                        <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control" value="<?php echo $cpf; ?>" autofocus>

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">CEP</label>
                    <div class="col-sm-4">
                        <input type="text" name="cep" id="cep" placeholder="CEP" class="form-control" value="<?php echo $cep; ?>" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Logradouro</label>
                    <div class="col-sm-4">
                        <input type="logradouro" name="logradouro" id="logradouro" placeholder="Numero" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Numero</label>
                    <div class="col-sm-4">
                        <input type="number" name="numero" id="numero" placeholder="Numero" class="form-control" autofocus maxlength="6">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Complemento</label>
                    <div class="col-sm-4">
                        <input type="text" name="complemento" id="complemento" placeholder="Complemento" class="form-control" maxlength="150" autofocus >

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">UF</label>
                    <div class="col-sm-4">
                        <select id="estado" class="form-control"></select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Cidade</label>
                    <div class="col-sm-4">
                        <select name="cidade" id="cidade" class="form-control <?php echo $cidade; ?>" ></select>
                    </div>
                </div>


                <div class="resultado"></div>
            </div>

            <!--------- PESSOA FISICA -------->

            <!-------- PESSOA JURIDICA -------->

            <div id="juridica" style="display: none; ">
                <fieldset>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">CNPJ</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="cnpj" name="cnpj" placeholder="CNPJ" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label" >Razão Social</label> 
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="razaosocial" placeholder="Razão Social" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nome Fantasia</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="nomefantasia" placeholder="Nome Fantasia" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->


                </fieldset>
                <div class="form-group">
                    <div class="col-md-2 col-sm-offset-3">
                        <input type="submit" class="btn btn-info" value="<?php echo $acao ?>" >
                    </div>
                </div>
            </div>
        </form>

    </div>

    <!-- PESSOA JURIDICA -->

</form> 
<?php include '../View/Footer.php'; ?>
</div>