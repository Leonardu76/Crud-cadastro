<?php
include_once ("conn.php");
include_once ("select.php");


        // ------------criar contato-----------
if(isset($_POST['cadastrar'])){
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $phone = addslashes($_POST['phone']);
        $password = addslashes(md5($_POST['password']));
        $birthday = addslashes($_POST['birthday']);


    $query = "INSERT INTO users (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc_cliente) VALUES (:name, :email, :phone, :password, :birthday)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":birthday", $birthday);

    try{
        $stmt->execute();
        ?>
<div class="container">
    <h4 class='cadSucess'>Cadastro realizado com sucesso! Para ver <a href="index.php">Clique aqui.</a></h4>
</div>
<?php
    
        } catch(PDOException $e){
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro:  $error";   
    }


} 
        // ------------alterar contato-----------

 if(isset($_POST['alterar'])){
    $id = $_POST["id"];
    $nameEd = addslashes($_POST['nameEd']);
    $emailEd = addslashes($_POST['emailEd']);
    $phoneEd = addslashes($_POST['phoneEd']);
    $passwordEd = addslashes(md5($_POST['passwordEd']));
    $birthdayEd = addslashes($_POST['birthdayEd']);
    $id = $_POST['id'];


    $query = "UPDATE  users
    SET nome_cliente = :nameEd, email_cliente = :emailEd, 
    telefone_cliente = :phoneEd, senha_cliente = :passwordEd,
    data_nasc_cliente = :birthdayEd WHERE id = :id";

    $stmt = $db->prepare($query);
    $stmt->bindParam(":nameEd", $nameEd);
    $stmt->bindParam(":emailEd", $emailEd);
    $stmt->bindParam(":phoneEd", $phoneEd);
    $stmt->bindParam(":passwordEd", $passwordEd);
    $stmt->bindParam(":birthdayEd", $birthdayEd);
    $stmt->bindParam(":id", $id);


    try{
    $stmt->execute();
     ?>
<div class="container">
    <h4 class='cadSucess'>Atualizado com sucesso! Para ver <a href="../index.php">Clique aqui.</a></h4>
</div>
<?php
    
        } catch(PDOException $e){
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro:  $error";   
    }


} 
        // ------------deletar contato-----------

 if(isset($_POST['delete'])){
    $id = $_POST["id"];

    $query = "DELETE  FROM users  WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);
    try{
        $stmt->execute();


            header("Location: index.php");

        
            } catch(PDOException $e){
                //erro de conexão
                $error = $e->getMessage();
                echo "Erro:  $error";
      
}
}


$db = null;
