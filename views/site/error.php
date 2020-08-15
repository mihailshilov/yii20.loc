<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>


<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div>
                <h1><?= Html::encode($this->title) ?></h1>
                <p><?= nl2br(Html::encode($message)) ?></p>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
