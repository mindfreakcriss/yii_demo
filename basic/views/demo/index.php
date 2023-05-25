<?php

use app\models\DemoModel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;



/** @var yii\web\View $this */
/** @var app\models\search\SearchDemoModel $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Demo的报表';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php
            $columns = [
                'id',
                'username',
                'age',
                [
                        'attribute' => 'created_at',
                    'format' => [
                            'date','php:Y-m-d H:i:s'
                    ]
                ],
                [
                    'attribute' => 'updated_at',
                    'format' => [
                        'date','php:Y-m-d H:i:s'
                    ]
                ],
                [
                    'header' => "操作",
                    'template' => '{delete}',
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'delete' => function($url, $model) {
                            $url = ['/demo/delete', 'id' => $model->id];
                            return Html::a('<button class="btn btn-danger btn-sm">删除</button>', $url,
                                [
                                    'data' => ['confirm' => "确认删除该商品?", 'method' => 'post',]
                                ]);
                        },
                    ],
//                    "visibleButtons" => [
//                        "delete" => Yii::$app->user->can("/demo/delete"),
//                    ],
                ],
            ];
        echo $this->render('/public/data_grid_view', ['dataProvider' => $dataProvider, 'columns' => $columns, 'title' => $this->title, 'canExport' => 1])
        ?>
    </div>
</div>