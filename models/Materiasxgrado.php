<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mxg_materiasxgrado".
 *
 * @property int $mxg_id
 * @property int $mxg_id_grd
 * @property int $mxg_id_mat
 *
 * @property GrdGrado $mxgIdGrd
 * @property MatMateria $mxgIdMat
 */
class Materiasxgrado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mxg_materiasxgrado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mxg_id_grd', 'mxg_id_mat'], 'required'],
            [['mxg_id_grd', 'mxg_id_mat'], 'integer'],
            [['mxg_id_grd'], 'exist', 'skipOnError' => true, 'targetClass' => Grado::className(), 'targetAttribute' => ['mxg_id_grd' => 'grd_id']],
            [['mxg_id_mat'], 'exist', 'skipOnError' => true, 'targetClass' => Materia::className(), 'targetAttribute' => ['mxg_id_mat' => 'mat_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mxg_id' => 'Mxg ID',
            'mxg_id_grd' => 'Mxg Id Grd',
            'mxg_id_mat' => 'Mxg Id Mat',
        ];
    }

    /**
     * Gets query for [[MxgIdGrd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMxgIdGrd()
    {
        return $this->hasOne(GrdGrado::className(), ['grd_id' => 'mxg_id_grd']);
    }

    /**
     * Gets query for [[MxgIdMat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMxgIdMat()
    {
        return $this->hasOne(MatMateria::className(), ['mat_id' => 'mxg_id_mat']);
    }
}
