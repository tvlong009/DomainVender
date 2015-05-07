<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150507_093500_create_db_user extends Migration
{

    private $users = [
        'all' => ['skeleton', '%'],
    ];

    public function up()
    {
        foreach ($this->users as $userHost) {
            // Create the project's database user(s)
            $this->execute('
                CREATE USER "' . $userHost[0] . '"@"' . $userHost[1] . '"
                IDENTIFIED BY "*4CF81CFE7A246E47A377837434E4B3FAB38D8223"
            ');
            // Give the user normal usage rights on all tables in skeleton database
            $this->execute('
                GRANT SELECT, INSERT, UPDATE, DELETE
                ON skeleton.*
                TO "' . $userHost[0] . '"@"' . $userHost[1] . '"
            ');
        }
    }

    public function down()
    {
        // Don't need to revoke here as we can just delete the user.
        foreach ($this->users as $userHost) {
            $this->execute('DROP USER "' . $userHost[0] . '"@"' . $userHost[1] . '"');
        }

    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
