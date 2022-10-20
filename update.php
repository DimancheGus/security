<?php

include "config.php";

    if(isset($_POST['update'])){
        $primeironome = $_POST['primeironome'];
        $ultimonome = $_POST['ultimonome'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];

        $sql = "UPDATE `cliente`.`usuarios` SET
        `primeironome` = '$primeironome', 
        `ultimonome` = '$ultimonome',
        `email` = '$email',
        `password` = '$password',
        `genero` = '$genero'
        WHERE `id`= '$id' ";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Atualizado com sucesso!";
        }else{
            echo "erro:" .$sql."<br>" . $conn->error;
        };
    }

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `cliente`.`usuarios` WHERE `id`='$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $primeironome = $row['']
        }
    }
}

