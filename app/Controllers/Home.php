<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function saludo(){
        echo 'Hola mundo';
    }

    //public function saludopersona($num){
       // echo 'Hola'.$num;
    public function saludopersona($nombre,$edad){
           // echo 'El nombre es'.$nombre.', y su edad es: '.$edad;
           echo 'Este es un mensaje desde el controlador';
           return view('saludo', [
            'nombre' => $nombre,
            'edad' => $edad
           ]);
    }
}

