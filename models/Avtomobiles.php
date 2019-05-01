<?php

namespace app\models;

use Yii;
use yii\widgets\LinkPager;

/**
 * This is the model class for table "avtos".
 *
 * @property integer $id
 * @property string $marka_model
 * @property string $color
 * @property integer $year
 * @property string $fuel
 * @property integer $rashod
 * @property integer $moschnost
 * @property string $reg_nomer
 * @property integer $price
 * @property string $place
 */
class Avtomobiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avtos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marka_model', 'color', 'year', 'fuel', 'rashod', 'moschnost', 'reg_nomer', 'price', 'place'], 'required'],
            [['year', 'rashod', 'moschnost', 'price'], 'integer'],
            [['marka_model', 'color', 'fuel', 'place'], 'string', 'max' => 255],
            [['reg_nomer'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marka_model' => 'Марка Модель',
            'color' => 'Цвет',
            'year' => 'Год выпуска',
            'fuel' => 'Тип топлива',
            'rashod' => 'Расход л/100км.',
            'moschnost' => 'Мощность Л.С.',
            'reg_nomer' => 'Рег. номер',
            'price' => 'Цена $/сут.',
            'place' => 'Место нахождения',
        ];
    }
}
