<?php
include_once ("Templates/header.php");
include_once ("process.php");

?>


<div id="register" class="container">
 


    <h1 class="txt"> Cadastrar Cliente</h1>
    <form action="" name="register" method="POST">
    <input type="hidden" name="type" value="create">
      <div class="form-group">
            <label class="name" for="name">Nome</label> <br>
            <input id="name" class="col-sm-6" type="text" name="name" placeholder="Digite o nome" required>
        </div>

        <div class="form-group">
            <label class="email" for="email">Email</label> <br>
            <input id="email" class="col-sm-6" type="text" name="email" placeholder="Digite o email" required>
        </div>

        <div class="form-group">
            <label class="phone" for="phone">Telefone</label> <br>
            <input id="phone" class="col-sm-6" type="text" name="phone" placeholder="Digite o telefone" required>
        </div>

        <div class="form-group">
            <label class="password" for="senha">Senha</label> <br>
            <input id="password" class="col-sm-6" type="password" name="password"
                placeholder="Digite uma senha" required>
        </div>

        <div class="form-group">
            <label class="birthday" for="birthday">Data de nascimento</label> <br>
            <input id="birthday" class="col-sm-6"  name="birthday" placeholder="Digite a data de nascimento" required>

            
            <div class="form-group"> <br>
                <input class="col-sm-6" type="submit" name="cadastrar" value="CADASTRAR" id="btn_cad">
            </div>
    </form>
</div>
<script type="text/javascript"src="js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="js/jquery.mask.js" ></script>

<script type="text/javascript">

    $(document).ready(function(){
        $("#phone").mask("(00)00000-0000");
        $("#birthday").mask("00/00/0000");
    });
</script>




