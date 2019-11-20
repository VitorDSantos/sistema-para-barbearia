<?php
session_start();

class Login extends Db {
    static function checkAuth(){        
        if(!isset($_SESSION['login'])){
            header("Location:login.php");
        }
    }    
    
    function verificaLogin($usuario){        
           
        $stmt = $this->conexao->prepare("SELECT * FROM usuario "
                . "WHERE senha = :senha AND email = :email");
 
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->execute();
    
        $linha = $stmt->fetch();
        
        if($linha){
            $usuario = new Usuario();
            $usuario->setNome($linha['nome']);
            $usuario->setSenha($linha['senha']);
            $usuario->setEmail($linha['email']);
            $usuario->setId($linha['id']);
            
            $_SESSION['login'] = $usuario;
            
            return $usuario;
        }else {
            return false;
        }

    }
}

