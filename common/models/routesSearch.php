<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\routes;

/**
 * routesSearch represents the model behind the search form of `common\models\routes`.
 */
class routesSearch extends routes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['LuXianBianHao', 'LuXianMingChen'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = routes::find();

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
	    $query->andFilterWhere(['like', 'LuXianBianHao', $this->LuXianBianHao])
           ->andFilterWhere(['like', 'LuXianMingChen', $this->LuXianMingChen]);
        return $dataProvider;
    }
}
