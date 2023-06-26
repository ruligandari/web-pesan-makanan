<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'primary_key'=> true
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_makanan' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'total' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'primary_key'=> true
            ],
            'bayar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'primary_key'=> true
            ],
            
        ]);
    }

    public function down()
    {
        //
    }
}
