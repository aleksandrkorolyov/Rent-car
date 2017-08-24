<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Avtomobiles */

$this->title = $model->marka_model;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Автомобили'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtomobiles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Обновить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Удалить этот автомобиль?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'marka_model',
            'color',
            'year',
            'fuel',
            'rashod',
            'moschnost',
            'reg_nomer',
            'price',
            'place',
        ],
    ]) ?>

</div>
