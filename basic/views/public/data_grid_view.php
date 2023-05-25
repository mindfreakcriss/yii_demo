<?php

use kartik\grid\GridView;

use kartik\export\ExportMenu;

$flag = isset($canExport) ? $canExport : 0;

if ($flag) {
    $export = ExportMenu::widget([
        'showColumnSelector' => false,
        'dataProvider' => $dataProvider,
        'columns' => isset($export) ? $export : $columns,
        'clearBuffers' => true, //optional
        'filename' => $title . date('Y-m-d-H-i-s', time()),
        'dropdownOptions' => [
            'label' => "全部数据导出"
        ],
        'messages' => [
            'allowPopups' => "请确保浏览器没有任何禁止弹窗的插件",
            'confirmDownload' => "确认导出？",
            'downloadProgress' => "正在导出",
        ],
    ]);
} else {
    $export = null;
}

echo GridView::widget([
    'id' => 'data_table',
    'bootstrap' => true,
    'dataProvider' => $dataProvider,
    'tableOptions' => ['class' => 'table table-hover nowrap dataTable no-footer'],
    'floatHeader' => false,
    'pager' => [
//                'firstPageLabel' => "第一页",
//                //Last option value
//                'lastPageLabel' => "最后一页",
        'nextPageLabel' => "下一页",
        'prevPageLabel' => "上一页",
        'options' => ['class' => "pagination pagination-sm"],
        'linkOptions' => ['class' => 'page-link'],
        'activePageCssClass' => "page-item active",
        'disabledPageCssClass' => "page-link disabled",
        'firstPageCssClass' => "page-item",
        'lastPageCssClass' => "page-item",
//                'prevPageCssClass' => 'page-item',
//                'nextPageCssClass' => 'page-item'
    ],
    'columns' => $columns,
    'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="fas fa-globe"></i>'.$title.'</h3>',
        'type'=>'info',
    ],
    'headerRowOptions' => [
        'style' =>  'white-space:nowrap'
    ],
    'rowOptions' => [
        'style' =>  'white-space:nowrap'
    ],
    'toolbar' => [
        $export,
    ],
    'layout'=>"{items}\n{pager}",
    'hover'=>true,
]);