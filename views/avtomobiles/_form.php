<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Avtomobiles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avtomobiles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marka_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'fuel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rashod')->textInput() ?>

    <?= $form->field($model, 'moschnost')->textInput() ?>

    <?= $form->field($model, 'reg_nomer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Сохранить') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
