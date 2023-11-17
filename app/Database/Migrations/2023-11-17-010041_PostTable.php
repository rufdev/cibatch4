<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostTable extends Migration
{
    public function up()
    {
        $fileds = [
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'author_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ];

        $this->forge->addField($fileds);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('author_id', 'authors', 'id');
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
