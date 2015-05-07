<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\forms\site\\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <p>Please provide your username and password to continue:</p>

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <?= $form->field($model, 'username',[
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('username'),
                            'class' => 'form-control large',
                        ],
                    ])->label(false);?>

                    <?= $form->field($model, 'password', [
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('password'),
                            'class' => 'form-control large',
                        ],
                    ])->passwordInput()->label(false); ?>

                    <div class="row">
                        <div class="col-xs-4 col-sm-6">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </div>
                        <div class="col-xs-8 col-sm-6" style="margin-top: 10px">
                            <?= Html::a('Forgot password?', ['site/request-password-reset'], ['class' => 'pull-right']) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <?= Html::submitButton('Login', ['class' => 'col-xs-12 btn btn-success btn-lg', 'name' => 'login-button', 'id' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>

</div>
