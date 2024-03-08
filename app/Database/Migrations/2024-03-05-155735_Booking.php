<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booking extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'bid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'from_date' => [
                'type' => 'DATE',
            ],
            'to_date' => [
                'type' => 'DATE',
            ],
            'message' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
            ],
        ]);
        $this->forge->addKey('bid', true);
        $this->forge->createTable('booking');
    }

    public function down()
    {
        $this->forge->dropTable('booking');
}
}