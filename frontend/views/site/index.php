<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->registerCssFile('css/home.css', ['depends' => ['yii\bootstrap\BootstrapPluginAsset']]);

$this->title = Yii::$app->name;
?>

</div>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="plate">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <p>
                        <?= Yii::t('home', 'Information System of Archaeological Documentation of Primitive Art of Eurasia') ?>
                    </p>
                    <br>
                    <p class="text-right">
                        <?= Html::a(Yii::t('app', 'Read more'), ['site/project'], ['class' => 'btn btn-primary']) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <p>
                <?= Yii::t('home', 'The Artemiris project aims at the development of the effective technology of documentation of archaeological objects (artefacts, archaeological sites, site complexes), integration of materials based on information system and data exchange.') ?>
            </p>
            <p>
                <?= Yii::t('home', 'The project is focused on research of Southern Siberia Stone Age rock and mobile art.') ?>
            </p>
            <p>
                <?= Html::a(Yii::t('app', 'Read more'), ['site/project'], ['class' => 'btn btn-primary']) ?>
            </p>
        </div>

        <div class="clearfix"></div>
        <br>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><a href="http://petrogis.mmc.nsu.ru" target="_blank"><?= Yii::t('home', 'GIS') ?>
                            «<?= Yii::t('home', 'Petroglyphs') ?>»</a></h3>
                </div>
                <div class="panel-body">
                    <p>
                        <?= Yii::t('home', 'Geographic information system of Altai petroglyphs. Chagan, Kosh-Agach district - {n1 objects, Shalobolino, Khakassia - {n2} objects', [
                            'n1' => 586,
                            'n2' => 40,
                        ]) ?>
                    </p>
                    <p>
                        <?= Yii::t('home', 'Access by e-mail') ?>
                        <a href="mailto:mirrorlab.artemir@gmail.com">mirrorlab.artemir@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>

        <!--    <div class="col-xs-12 col-sm-6 col-md-4">-->
        <!--        <div class="panel panel-default">-->
        <!--            <div class="panel-heading text-center">-->
        <!--                <h3>--><? //= Yii::t('home', '3D Gallery') ?><!-- ARTEMIRIS</h3>-->
        <!--            </div>-->
        <!--            <div class="panel-body">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="col-xs-12 col-sm-6 col-md-4">-->
        <!--        <div class="panel panel-default">-->
        <!--            <div class="panel-heading text-center">-->
        <!--                <h3>--><? //= Yii::t('home', 'Malta') ?><!--</h3>-->
        <!--            </div>-->
        <!--            <div class="panel-body">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="clearfix"></div>-->

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>
                        <a href="http://www.amsp.ugent.be" target="_blank"><?= Yii::t('home', 'GIS') ?> «AMSP»</a></h3>
                </div>
                <div class="panel-body">
                    <p>
                        <?= Yii::t('home', 'Geoinformation system of petroglyphs of Turu-Alty Kosh-Agach district of Altai republic') ?>.
                        <?= Yii::t('home', 'Ghent University Database - {n} object', [
                            'n' => 321,
                        ]) ?>
                    </p>
                    <p>
                        <?= Yii::t('home', 'Access by e-mail') ?>
                        <a href="mailto:Jean.Bourgeois@UGent.be">Jean.Bourgeois@UGent.be</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><a href="https://3d.nsu.ru"
                           target="_blank"><?= Yii::t('home', '3D Gallery') ?> <?= Yii::t('home', 'NSU') ?></a></h3>
                </div>
                <div class="panel-body">
                    <p>
                        <?= Yii::t('home', 'Gallery of three-dimensional models developed in Novosibirsk State University. It contains about 100 models of archaeological items, including the artefacts of Mal’ta’s collection, Altai petroglyphs, etc.') ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><a href="https://sketchfab.com/artemir" target="_blank">Sketchfab Artemir</a></h3>
                </div>
                <div class="panel-body">
                    <p>
                        <?= Yii::t('home', 'Sketchfab account of the Laboratory of Multidisciplinary Studies of Primitive Art of Eurasia, NSU') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

