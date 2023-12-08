<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Peliculas extends Migration
{
    public function up()
    {
        //crear una estructura de la tabla pelicula
        $this->forge->addField([
            'id' =>[
               'type' => 'INT',
               'constraint' => 5,
               'unsigned' => true,
               'auto_increment' => true
            ],
            'categoria_id' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'titulo' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'descripcion' =>[
                'type' => 'TEXT',
                'null' => true,
            ]       
                
            ]);

            $this->forge->addKey('id',true);
            $this->forge->createTable('peliculas');

            
    }

    public function down()
    {
        $this->forge->dropTable('peliculas'); 
    }
}
