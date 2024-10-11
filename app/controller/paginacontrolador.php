<?php 

class PaginaControlador{
      
   //metodo para la pagina de inicio
     public function inicio(){
        include '../public/vistas/inicio.php';
     }
    //metodos para mostrar las vistas del login
    public function login(){

      include '../public/vistas/usuarioRE/login_registro.php';
    }
    public function register(){

      include '../public/vistas/usuarioRE/login_registro.php';
    }
    public function  loginEmpresa(){

      include '../public/vistasEmpresa/usuEmpresa/login_empresa.php';
    }
    public function subirNegocio(){

      include '../public/vistasEmpresa/usuEmpresa/subidanegocio.php';
    }
}