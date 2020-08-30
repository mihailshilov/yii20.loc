<?php

$this->title = 'Статистика магазина';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $orders ?></h3>
                <p>Заказов</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['admin/order/index']) ?>" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $products ?></h3>

                <p>Товаров</p>
            </div>
            <div class="icon">
                <i class="glyphicon glyphicon-cutlery"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['admin/product/index']) ?>" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $categories ?></h3>

                <p>Категории</p>
            </div>
            <div class="icon">
                <i class="fa fa-list"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['admin/order/index']) ?>" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>