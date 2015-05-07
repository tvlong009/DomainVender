<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="container">

    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="panel panel-danger">
        <div class="panel-heading">Error</div>
        <div class="panel-body">
            <?= nl2br(Html::encode($message)) ?>
        </div>
    </div>

</div>
