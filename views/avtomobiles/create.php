<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Avtomobiles */

$this->title = Yii::t('app', 'Добавить автомобиль');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Автомобили'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtomobiles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
