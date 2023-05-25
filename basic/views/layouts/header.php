<?php
use yii\bootstrap5\Breadcrumbs;
?>
<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget([
                    'links' => $this->params['breadcrumbs'],
                    'options' =>
                        [
                            'class' => 'breadcrumb breadcrumb-default'
                        ]
                ]) ?>
            <?php endif ?>
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <div class="d-inline-block">
                                Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                            </div>
                        </li>

                        <li>
                            <a href="index">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a href="index"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                        </li>
                        <li class="right-sidebar-in">
                            <a href="index"> <i class="mdi mdi-settings"></i> Setting </a>
                        </li>
                        <li class="dropdown-footer">
                            <a href="index"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


</header>