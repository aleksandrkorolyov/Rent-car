<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avtomobiles */

$this->title = Yii::t('app', 'Изменить данные об авто ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Автомобили'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marka_model, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновить');
?>
<div class="avtomobiles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
