<?php 

require_once '../chamado/src/models/User.php';

class LoginController{

    private $usuarios;

    public function __construct(){
        $this -> usuarios = [
            new User(1, 'adm@teste.com', '1234', 1),
        ];
    } 
}

?>