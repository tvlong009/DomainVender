<?php

use yii\db\Schema;
use yii\db\Migration;

class m150507_095500_rbac_first_permissions extends Migration
{

    private function getIdFromUsername ($username) {

        $command = $this->db->createCommand('
            SELECT `id`
            FROM `user`
            WHERE `username` = "' . $username . '"
        ');
        $reader = $command->query();

        $row = $reader->read();

        return intval($row['id']);

    }

    public function up()
    {
        $auth = Yii::$app->authManager;

        // Create the different types of roles that are used within this project:
        $editor = $auth->createRole('Editor');
        $publisher = $auth->createRole('Publisher');
        $roleArr = [
            $editor,
            $publisher,
        ];
        foreach ($roleArr as $role) {
            $auth->add($role);
        }

        /*
         * Add the roles to the auth system, this works based on the primary key of the tmInternal.employees table.
         * Use the following format:
         * $auth->assign($role, <int>); // <username>
         */

        $auth->assign($editor, $this->getIdFromUsername('gwen'));
        $auth->assign($publisher, $this->getIdFromUsername('almira'));

        /*
         * Create permissions, add them to auth system and also add them to their respective roles.
         * Use the following format:
         * $eatDonut = $auth->createPermission('eatDonut');
         * $eatDonut->description = 'Being able to eat a delicious glazed donut';
         * $auth->add($eatDonut);
         * $auth->addChild($developer, $eatDonut);
         * $auth->addChild($shareholder, $eatDonut); // etc...
         */

        $permission = $auth->createPermission('editNewsletter');
        $permission->description = 'Being able to create and edit newsletters';
        $auth->add($permission);
        $auth->addChild($editor, $permission);
        $auth->addChild($publisher, $permission);

        $permission = $auth->createPermission('publishNewsletter');
        $permission->description = 'Being able to publish newsletters';
        $auth->add($permission);
        $auth->addChild($editor, $permission);
    }

    public function down()
    {
        Yii::$app->authManager->removeAll();
    }
}
