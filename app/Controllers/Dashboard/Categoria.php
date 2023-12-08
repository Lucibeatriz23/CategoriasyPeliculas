<?php

namespace App\Controllers\Dashboard;

use App\Models\CategoriaModel;
use App\Controllers\BaseController;

class Categoria extends BaseController
{
    public function index()
    {
        //echo 'Este es un mensaje desde el controlador categoria';
        $categoriaModel = new CategoriaModel();

        $data =[
            'tituloPagina' => ' Categorias de las peliculas',
            'categorias' => $categoriaModel->findAll()
        ];
        echo view('dashboard/categoria/index', $data);
    }
public function show($id){
   
    $categoriaModel = new CategoriaModel();

        $data =[
            'tituloPagina' => 'Detalles categorias',
            'categoria' => $categoriaModel->find($id)
        ];
    echo view('dashboard/categoria/show', $data);
}
public function edit($id){
    $categoriaModel = new CategoriaModel();

    $data =[
        'tituloPagina' => 'Editar categorias',
        'categoria' => $categoriaModel->find($id)
    ];
echo view('dashboard/categoria/edit', $data);  

}
public function update ($id){
    $categoriaModel = new CategoriaModel();

    $categoriaModel->update($id,[
         'titulo'=> $this->request->getPost('nombreCategoria'),
    ]);
     echo 'LOS CAMBIOS SE GUARDARON';
}
public function delete($id){
    $categoriaModel = new CategoriaModel();
    $categoriaModel->delete($id);
    
    echo 'El registro se elimino';

}
public function new(){
     $data = [
       'tituloPagina' => 'Nueva categoria',
      
     ];
    echo view('dashboard/categoria/new', $data);
}
   public function create(){
    $categoriaModel = new CategoriaModel();

        $categoriaModel->insert([
        'titulo'=> $this->request->getPost('nombreCategoria'),

    ]);
    echo 'Registro exitoso';
   }
}
