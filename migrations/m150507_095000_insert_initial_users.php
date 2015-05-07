<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Expression;

class m150507_095000_insert_initial_users extends Migration
{
    public function up()
    {
        // Quynh Hoang
        $this->insert('{{%user}}', [
            'username' => 'gwen',
            'name' => 'Quynh (Gwen) Hoang',
            'password' => '1358456cc4779f998c30078abea90654fee08b93',
            'email' => 'gwen@vietnamcubator.com',
            'created_at' => new Expression('UNIX_TIMESTAMP()'),
        ]);
        // Almira Wolbers-Krol
        $this->insert('{{%user}}', [
            'username' => 'almira',
            'name' => 'Almira Wolbers Krol',
            'password' => '7ea5fa4d7fefd92348ee18ca179b50c706b06aa3',
            'email' => 'almira@targetmedia.nl',
            'created_at' => new Expression('UNIX_TIMESTAMP()'),
        ]);
    }

    public function down()
    {
        $this->truncateTable('{{%employees}}');
    }
}
