<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumno;

/**
 * AlumnoSearch represents the model behind the search form of `app\models\Alumno`.
 */
class AlumnoSearch extends Alumno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alm_id', 'alm_edad', 'alm_id_grd'], 'integer'],
            [['alm_codigo', 'alm_nombre', 'alm_sexo', 'alm_observacion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alumno::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'alm_id' => $this->alm_id,
            'alm_edad' => $this->alm_edad,
            'alm_id_grd' => $this->alm_id_grd,
        ]);

        $query->andFilterWhere(['like', 'alm_codigo', $this->alm_codigo])
            ->andFilterWhere(['like', 'alm_nombre', $this->alm_nombre])
            ->andFilterWhere(['like', 'alm_sexo', $this->alm_sexo])
            ->andFilterWhere(['like', 'alm_observacion', $this->alm_observacion]);

        return $dataProvider;
    }
}
