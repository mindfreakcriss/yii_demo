<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DemoModel $model */

$this->title = 'Update Demo Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Demo Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="demo-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
