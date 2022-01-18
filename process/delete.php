<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
include_once ("../process.php");
include_once ("../select.php");
?>


<div id="delete" class="container">
<h1 class="txt"> Deseja excluir o contato de "<?=$contact['nome_cliente']?>"?</h1>

<a href="../index.php" class="btn btn-warning">Voltar</a> 

    <form action="../process.php" id="form_cad"  method="POST">
    <input type="hidden" name="delete" value="">
    <input type="hidden" name="id" value="<?=$contact['id']?>">
    <button type="submit" class="btn btn-danger">Excluir</button>


</form>
</div>