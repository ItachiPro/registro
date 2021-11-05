<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mat_materia".
 *
 * @property int $mat_id
 * @property string|null $mat_nombre
 *
 * @property MxgMateriasxgrado[] $mxgMateriasxgrados
 */
class Materia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mat_materia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mat_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mat_id' => 'Mat ID',
            'mat_nombre' => 'Mat Nombre',
        ];
    }

    /**
     * Gets query for [[MxgMateriasxgrados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMxgMateriasxgrados()
    {
        return $this->hasMany(MxgMateriasxgrado::className(), ['mxg_id_mat' => 'mat_id']);
    }
}
