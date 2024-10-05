<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_materi' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_materi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'des_materi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sumber' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id_materi', true);
        $this->forge->createTable('tb_materi');
    }

    public function down()
    {
        $this->forge->dropTable('tb_materi');
    }
}
