<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Materiasxgrado;

/**
 * MateriasxgradoSearch represents the model behind the search form of `app\models\Materiasxgrado`.
 */
class MateriasxgradoSearch extends Materiasxgrado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mxg_id', 'mxg_id_grd', 'mxg_id_mat'], 'integer'],
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
        $query = Materiasxgrado::find();

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
            'mxg_id' => $this->mxg_id,
            'mxg_id_grd' => $this->mxg_id_grd,
            'mxg_id_mat' => $this->mxg_id_mat,
        ]);

        return $dataProvider;
    }
}
