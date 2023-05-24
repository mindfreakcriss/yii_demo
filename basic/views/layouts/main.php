<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

//AppAsset::register($this);
\app\assets\MonoAsset::register($this);

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
<body id="body" class="navbar-fixed sidebar-fixed right-sidebar-toggoler-out sidebar-minified-out">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
<?php $this->beginBody() ?>

<div class="wrapper">
    <aside class="left-sidebar sidebar-dark">

    </aside>
    <div class="page-wrapper">
        <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>

                <span class="page-title">pagination</span>

                <div class="navbar-right ">
                </div>
        </header>

        <div class="content-wrapper">
            <div class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
