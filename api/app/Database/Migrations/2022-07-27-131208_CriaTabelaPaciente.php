<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaCadastramento extends Migration
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
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => '14',
                'null' => false,
            ],
            'rg' => [
                'type' => 'VARCHAR',
                'constraint' => '27',
                'null' => false,
            ],
            'dataNascimento' => [
                'type' => 'date',
                'null' => false,
            ],
            'sexo' => [
                'type' => 'VARCHAR',
                'constraint' => '1',
                'null' => false, 
            ],
            'nomeMae' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'telefone1' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'telefone2' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'cep' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'logradouro' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'numeroCasa' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => false,
            ],
            'complementoCasa' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'bairro' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],

        ]);


        $this->forge->addKey('id', true);
        $this->forge->createTable('paciente');
    }

    public function down()
    {
        $this->forge->dropTable('paciente');
    }
}
