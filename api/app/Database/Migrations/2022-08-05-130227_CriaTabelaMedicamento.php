<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaMedicamento extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'SUBSTANCIA' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'GGREM' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'REGISTRO' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'EAN1' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'EAN2' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'EAN3' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'PRODUTO' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true,
            ],
            'DOSAGEM' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'CATEGORIA' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'TIPO' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'TARJA' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('medicamento');
    }

    public function down()
    {
        $this->forge->dropTable('medicamento');
    }
}
