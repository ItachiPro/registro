<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alm_alumno".
 *
 * @property int $alm_id
 * @property string $alm_codigo
 * @property string $alm_nombre
 * @property int $alm_edad
 * @property string $alm_sexo
 * @property string|null $alm_observacion
 * @property int $alm_id_grd
 *
 * @property Grado $almIdGrd
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alm_alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alm_codigo', 'alm_nombre', 'alm_edad', 'alm_sexo', 'alm_id_grd'], 'required'],
            [['alm_edad', 'alm_id_grd'], 'integer'],
            [['alm_codigo', 'alm_sexo'], 'string', 'max' => 100],
            [['alm_nombre', 'alm_observacion'], 'string', 'max' => 300],
            [['alm_id_grd'], 'exist', 'skipOnError' => true, 'targetClass' => Grado::className(), 'targetAttribute' => ['alm_id_grd' => 'grd_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'alm_id' => 'ID',
            'alm_codigo' => 'Codigo',
            'alm_nombre' => 'Nombre',
            'alm_edad' => 'Edad',
            'alm_sexo' => 'Sexo',
            'alm_observacion' => 'Observacion',
            'alm_id_grd' => 'Grado',
        ];
    }

    /**
     * Gets query for [[AlmIdGrd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlmIdGrd()
    {
        return $this->hasOne(Grado::className(), ['grd_id' => 'alm_id_grd']);
    }
}
