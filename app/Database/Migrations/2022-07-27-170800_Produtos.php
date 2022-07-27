<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'auto_increment'=>true
            ],
            'descricao'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'valor'=>[
                'type'=>'double'
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
