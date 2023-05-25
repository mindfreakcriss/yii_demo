<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

//AppAsset::register($this);
\app\assets\SleekAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
<?php $this->beginBody() ?>

<div class="wrapper">
    <div id="toaster"></div>
    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    <?= $this->render('left') ?>

    <div class="page-wrapper">
        <!-- Header -->
        <?= $this->render('header') ?>

        <div class="content-wrapper">
            <div class="content">
                <?= $content ?>
            </div>
        </div>

        <?php // $this->render('footer') ?>

    </div>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
