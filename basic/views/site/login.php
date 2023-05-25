<?php

/** @var yii\web\View $this */
/** @var Html $form */

/** @var app\models\LoginForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="" id="body">
<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="app-brand">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                             viewBox="0 0 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>
                        <span class="brand-name">Sleek Dashboard</span>
                    </div>
                </div>
                <div class="card-body p-5">

                    <h4 class="text-dark mb-5">登陆</h4>

                    <?php

                        $form = ActiveForm::begin([
                                'id' => "login-form",
                            'fieldConfig' => [
                                    'template' => "
                                        <div class='form-group col-md-12 mb-4'>{input}</div>
                                        <div class='col-md-12'>{error}</div>",
                                'inputOptions' => [
                                        'class' => "form-control input-lg"
                                ],
                            ]
                        ]);
                    ?>

                    <?= $form->field($model,'username')->hint("Username") ?>

                    <?= $form->field($model,'password')->hint("Password") ?>

                    <div class="col-md-12">
                        <div class="d-flex my-2 justify-content-between">
                            <div class="d-inline-block mr-3">
                                <label class="control control-checkbox">Remember me
                                    <input type="checkbox" />
                                    <div class="control-indicator"></div>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">登陆</button>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
