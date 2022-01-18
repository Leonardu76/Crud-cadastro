<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
    integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="../css/style.css">

<?php
include_once ("../process.php");

?>


<div id="alterar" class="container">

    <a href="../index.php" class="btn">Voltar</a>


    <h1 class="txt"> Alterar dados do Cliente</h1>

    <form action="" id="form_cad" name="edit" method="POST">
        <input type="hidden" name="id" value="<?=$contact['id']?>">

        <div class="form-group">
            <label class="nameEd" for="nameEd">Nome</label> <br>
            <input id="nameEd" class="col-sm-6" type="text" name="nameEd" value="<?= $contact['nome_cliente'] ?>"
                required>
        </div>

        <div class="form-group">
            <label class="emailEd" for="emailEd">Email</label> <br>
            <input id="emailEd" class="col-sm-6" type="text" name="emailEd" value="<?= $contact['email_cliente'] ?>"
                required>
        </div>

        <div class="form-group">
            <label class="phoneEd" for="phoneEd">Telefone</label> <br>
            <input id="phoneEd" class="col-sm-6" type="text" name="phoneEd" value="<?= $contact['telefone_cliente'] ?>"
                required>
        </div>

        <div class="form-group">
            <label class="passwordEd" for="passwordEd">Senha</label> <br>
            <input id="passwordEd" class="col-sm-6" type="password" name="passwordEd"
                value="<?= $contact['senha_cliente'] ?>" required>
        </div>

        <div class="form-group">
            <label class="birthdayEd" for="birthdayEd">Data de nascimento</label> <br>
            <input id="birthdayEd" class="col-sm-6" name="birthdayEd" value="<?= $contact['data_nasc_cliente'] ?>">

            <div class="form-group"> <br>
                <input class="col-sm-6" type="submit" name="alterar" value="ALTERAR" id="btn_edit">
            </div>
    </form>
</div>

<script type="text/javascript" src="../js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="../js/jquery.mask.js"></script>

<script type="text/javascript">

    $().ready(function () {
        $("#phoneEd").mask("(00)00000-0000");
        $("#birthdayEd").mask("00/00/0000");
    });
</script>