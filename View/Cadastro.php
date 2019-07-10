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

            <input class="input3" name="pessoa" type="radio" value="sim" onClick="aparece('fisica');" />
            Pessoa Física
            <input class="input3" name="pessoa" type="radio" value="não" onClick="aparece('juridica');" />
            Pessoa Jurídica</td>

            <!-------- PESSOA FISICA -------->

            <div id="fisica" style="display: block;">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nome</label>
                    <div class="col-sm-4">
                        <input type="text" name="nome" id="nome" placeholder="Primeiro Nome" value="<?php echo $nome; ?>" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Sobrenome</label>
                    <div class="col-sm-4">
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value ="<?php echo $sobrenome; ?>" class="form-control" maxlength="15" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="ID Number" class="col-sm-3 control-label">Data de Nascimento</label>
                    <div class="col-sm-4">
                        <input type="text" name="datanasc" id="datanasc" data-mask="00/00/0000" placeholder="Data de Nascimento" class="form-control" value = "<?php echo $datanasc; ?>" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="ID Number" class="col-sm-3 control-label">CPF</label>
                    <div class="col-sm-4">
                        <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control" value="<?php echo $cpf; ?>" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input type="password" name="senha" id="password" placeholder="Password" class="form-control" maxlength="20">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Confirm Password" class="col-sm-3 control-label">Confirme sua senha</label>
                    <div class="col-sm-4">
                        <input type="password" id="confirmPassword" placeholder="Password" class="form-control" maxlength="20">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Address" class="col-sm-3 control-label">Logradouro</label>
                    <div class="col-sm-4">
                        <input type="logradouro" name="logradouro" id="logradouro" placeholder="Numero" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ID Number" class="col-sm-3 control-label">Numero</label>
                    <div class="col-sm-4">
                        <input type="number" name="numero" id="numero" placeholder="Numero" class="form-control" autofocus maxlength="6">

                    </div>
                </div>

                <div class="form-group">
                    <label for="ID Number" class="col-sm-3 control-label">Complemento</label>
                    <div class="col-sm-4">
                        <input type="text" name="complemento" id="complemento" placeholder="Complemento" class="form-control" maxlength="150" autofocus >

                    </div>
                </div>

                <select id="pais" class="form-control"></select>
                <select id="estado" class="form-control"></select>

                <div class="form-group">
                    <label for="ID Number" class="col-sm-3 control-label">UF</label>
                    <div class="col-sm-4">
                        <select id="estado" class="form-control"></select>
                    </div>
                </div>



                <div class="form-group">
                    <label for="ID Number" class="col-sm-3 control-label">Cidade</label>
                    <div class="col-sm-4">
                        <select name="cidade" id="cidade" class="form-control <?php echo $cidade; ?>" ></select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-sm-offset-3">
                        <input type="submit" class="btn btn-info" value="<?php echo $acao ?>" >
                    </div>
                </div>

                <div class="resultado"></div>
            </div>

            <!--------- PESSOA FISICA -------->

            <!-------- PESSOA JURIDICA -------->

            <div id="juridica" style="display: none; ">
                <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                    <fieldset>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Last Name</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="col-md-4 control-label">Department / Office</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="department" class="form-control selectpicker">
                                        <option value="">Select your Department/Office</option>
                                        <option>Department of Engineering</option>
                                        <option>Department of Agriculture</option>
                                        <option >Accounting Office</option>
                                        <option >Tresurer's Office</option>
                                        <option >MPDC</option>
                                        <option >MCTC</option>
                                        <option >MCR</option>
                                        <option >Mayor's Office</option>
                                        <option >Tourism Office</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Password</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="user_password" placeholder="Password" class="form-control"  type="password">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Confirm Password</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>


                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contact No.</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="contact_no" placeholder="(639)" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->

                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
    </div>

    <!-- PESSOA JURIDICA -->

</form> 
<?php include '../View/Footer.php'; ?>
</div>