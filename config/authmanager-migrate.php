<?php

/*
 * Note: This is only used in the console config. We need to use the migration database connection instead of the normal
 * one, as we call $authManager in the migration scripts themselves. By default, it will use db.php, unless we
 * overrule that here.
 */

return [
    'class' => 'yii\rbac\DbManager',
    'defaultRoles' => ['guest'],
    'db' => 'dbMigrate'
];
