<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vehicle extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'vid'      => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'model'    => [
                'type'       => 'VARCHAR',
                'constraint' => 255, // Adjust the length as needed
                'null'       => true,
            ],
            'price'      => [
                'type'       => 'VARCHAR',
                'constraint' => 255, // Adjust the length as needed
                'null'       => true,
            ],
            
        ]);

        $this->forge->addPrimaryKey('vid');

        $this->forge->createTable('vehicle');
    }

    public function down()
    {
        $this->forge->dropTable('vehicle');
    }
}
