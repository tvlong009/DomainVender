<?php

use yii\db\Schema;
use yii\db\Migration;

class m150507_094000_create_user extends Migration
{
    public function up()
    {
        $tableOptions = "";
        /* MYSQL */
        $this->createTable('{{%user}}', [
            'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
            0 => 'PRIMARY KEY (`id`)',
            'username' => 'VARCHAR(255) NOT NULL',
            'name' => 'VARCHAR(255) NOT NULL',
            'auth_key' => 'VARCHAR(32) NOT NULL',
            'password' => 'VARCHAR(255) NOT NULL',
            'password_reset_token' => 'VARCHAR(255) NULL',
            'email' => 'VARCHAR(255) NOT NULL',
            'role' => 'SMALLINT(6) NOT NULL DEFAULT \'10\'',
            'status' => 'SMALLINT(6) NOT NULL DEFAULT \'10\'',
            'created_at' => 'INT(11) NOT NULL',
            'updated_at' => 'INT(11) NOT NULL',
        ], $tableOptions);

        // Unique for employees table
        $this->createIndex('username', '{{%user}}', 'username', true);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
