<?php

use app\models\DemoModel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


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
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'pager' => [
//                'firstPageLabel' => "第一页",
//                //Last option value
//                'lastPageLabel' => "最后一页",
                'nextPageLabel' => "下一页",
                'prevPageLabel' => "上一页",
                'options' => ['class' => "pagination pagination-sm"],
                'linkOptions' => ['class' => 'page-link'],
                'activePageCssClass' => "page-item active",
                'disabledPageCssClass'  => "page-link disabled",
                'firstPageCssClass' => "page-item",
                'lastPageCssClass' => "page-item",
//                'prevPageCssClass' => 'page-item',
//                'nextPageCssClass' => 'page-item'
            ],
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