<?php

namespace app\models;

use yii;
use yii\base\Model;

class Add_car extends Model
{
    public $marka_model;
    public $color;
    public $year;
    public $fuel;
    public $rashod;
    public $moschnost;
    public $reg_nomer;
    public $price;

    public function rules()
    {
        return [
            [['marka_model', 'year','color','fuel','rashod','moschnost','reg_nomer','price'], 'required']

        ];
}

}









//?>
<!--<div class="product-form">-->
<!---->
<!--    --><?php //$form = ActiveForm::begin(); ?>
<!---->
<!--    --><?//= $productForm->errorSummary($form); ?>
<!---->
<!--    <fieldset>-->
<!--        <legend>Product</legend>-->
<!--        --><?//= $form->field($productForm->product, 'name')->textInput() ?>
<!--    </fieldset>-->
<!---->
<!--    <fieldset>-->
<!--        <legend>Parcel</legend>-->
<!--        --><?//= $form->field($productForm->parcel, 'code')->textInput() ?>
<!--        --><?//= $form->field($productForm->parcel, 'width')->textInput() ?>
<!--        --><?//= $form->field($productForm->parcel, 'height')->textInput() ?>
<!--        --><?//= $form->field($productForm->parcel, 'depth')->textInput() ?>
<!--    </fieldset>-->
<!---->
<!--    --><?//= Html::submitButton('Save'); ?>
<!--    --><?php //ActiveForm::end(); ?>
<!---->
<!--</div>-->