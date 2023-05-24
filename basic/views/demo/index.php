<?php

use app\models\DemoModel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Breadcrumbs;

/** @var yii\web\View $this */
/** @var app\models\search\SearchDemoModel $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Demo Models';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card card-default">
    <div class="card card-header">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'],
                'options' =>
                    [
                        'class' => 'breadcrumb breadcrumb-primary'
                    ]
            ]) ?>
        <?php endif ?>
    </div>
    <div class="card-body">
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'username',
                'age',
                'created_at',
                'updated_at',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, DemoModel $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>
</div>