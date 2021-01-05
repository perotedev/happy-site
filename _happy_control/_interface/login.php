<?php
    require_once "conect.php";

    $user = $_POST['user'];
    $password = $_POST['password'];

    $listarLogin = conectarAoBanco()->prepare("SELECT * FROM tb_permitions WHERE userHappy = '$user'");
    $listarLogin->execute();
    $contarLogin = $listarLogin->rowCount();

    if ($contarLogin < 1) {
        echo "<script> alert('Usuário não cadastrado!'); window.history.back(); </script>";
    }

    else{
        foreach ($listarLogin as $dado){
            if ($dado['userHappy'] == "$user"){
                if($dado['userPassword'] == "$password"){
                    session_start();
                    $_SESSION['logado'] = TRUE;
                    $_SESSION['typeUser'] = $dado['typeUser'];
                    header("Location: ../_pages_control.php");
                    break;
                }
                else{
                    echo "<script> alert('Senha incorreta!'); window.history.back()'; </script>";
                }
                break;
            }
        }
       echo "<script> alert('Erro desconhecido ao fazer login!'); window.history.back(); </script>";
    }
?>