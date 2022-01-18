
<?php
    $id;

if(!empty($_GET)){
        $id = $_GET['id'];
    }
    
    // ------------Retorna um contato-----------
    
    if(!empty($id)){
    
        $query = "SELECT * FROM users WHERE id = :id";
        
        $stmt  = $db->prepare($query);
    
        $stmt->bindParam(":id", $id);
    
        $stmt->execute();
    
        $contact = $stmt->fetch();
    
    // ------------Retorna todos contatos-----------
    }else{
        $contacts = [];
    
        $query = "SELECT * FROM users";
        
        $stmt = $db->prepare($query);
        
        $stmt->execute();
        
        $contacts = $stmt->fetchAll();
    }
    
    



$conn = null;