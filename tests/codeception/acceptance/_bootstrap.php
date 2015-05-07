<?php
new yii\web\Application(require(dirname(__DIR__) . '/config/acceptance.php'));

\Codeception\Util\Autoload::registerSuffix('Page', __DIR__.DIRECTORY_SEPARATOR.'_pages');