<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grd_grado".
 *
 * @property int $grd_id
 * @property string $grd_nombre
 *
 * @property AlmAlumno[] $almAlumnos
 * @property MxgMateriasxgrado[] $mxgMateriasxgrados
 */
class Grado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grd_grado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grd_nombre'], 'required'],
            [['grd_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'grd_id' => 'Grd ID',
            'grd_nombre' => 'Grd Nombre',
        ];
    }

    /**
     * Gets query for [[AlmAlumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlmAlumnos()
    {
        return $this->hasMany(AlmAlumno::className(), ['alm_id_grd' => 'grd_id']);
    }

    /**
     * Gets query for [[MxgMateriasxgrados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMxgMateriasxgrados()
    {
        return $this->hasMany(MxgMateriasxgrado::className(), ['mxg_id_grd' => 'grd_id']);
    }
}
