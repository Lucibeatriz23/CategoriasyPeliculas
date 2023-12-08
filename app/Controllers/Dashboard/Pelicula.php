<?php

namespace App\Controllers\Dashboard;

use App\Models\PeliculaModel;
use App\Controllers\BaseController;

class Pelicula extends BaseController
{
    public function index()
    {
        //echo 'Este es un mensaje desde el controlador pelicula';
        $peliculaModel = new PeliculaModel();

        $data =[
            'tituloPagina' => 'Las mejores peliculas',
            'peliculas' => $peliculaModel->findAll()
        ];
        echo view('dashboard/pelicula/index', $data);
    }
public function show($id){
   
    $peliculaModel = new PeliculaModel();

        $data =[
            'tituloPagina' => 'Detalles Peliculas',
            'peliculas' => $peliculaModel->find($id)
        ];
    echo view('dashboard/pelicula/show', $data);
}
public function edit($id){
   
    $peliculaModel = new PeliculaModel();

    $data =[
        'tituloPagina' => 'Editar Peliculas',
        'pelicula' => $peliculaModel->find($id)
    ];
echo view('dashboard/pelicula/edit', $data);  

}
public function update ($id){
    $peliculaModel = new PeliculaModel();

    $peliculaModel->update($id,[
         'titulo'=> $this->request->getPost('nombrePelicula'),
         'descripcion'=> $this->request->getPost('descripcionPelicula'),
    ]);
     echo 'LOS CAMBIOS SE GUARDARON';
}
public function delete($id){
    $peliculaModel = new PeliculaModel();
    $peliculaModel->delete($id);
    
    echo 'El registro se elimino';

}

public function new(){
     $data = [
       'tituloPagina' => 'Nueva pelicula',
      
     ];
    echo view('dashboard/pelicula/new', $data);
}

   public function create(){
    $peliculaModel = new PeliculaModel();

    if($this->validate('peliculas')){

        $peliculaModel->insert([
        'titulo'=> $this->request->getPost('nombrePelicula'),
        'descripcion'=> $this->request->getPost('descripcionPelicula'),
        'categoria_id'=> 1 
    ]);
//redireciona
    return redirect()->to('/dashboard/product');

}
else{
    session()->setFlashdata([
        'validation'=> $this->validator
    ]);

        return redirect()->back();
    }
    //echo 'Registro exitoso';
}
}
