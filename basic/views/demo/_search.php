<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\search\SearchDemoModel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="demo-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['class' => 'form-inline'],
        "fieldConfig" => [
            'errorOptions' => ['tag' => false],
        ]
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'age') ?>

    <div class="form-footer">
        <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
