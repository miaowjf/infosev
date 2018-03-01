<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\projectChanges;

/**
 * ProjectChangesSearch represents the model behind the search form of `common\models\projectChanges`.
 */
class ProjectChangesSearch extends projectChanges
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'FaShengShiJian'], 'integer'],
            [['XiangMuBianHao', 'BianGengLeiXing', 'BianGengQian', 'BianGengHou', 'BianGengYuanYin', 'BeiZhu'], 'safe'],
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
        $query = projectChanges::find();

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
            'ID' => $this->ID,
            'FaShengShiJian' => $this->FaShengShiJian,
        ]);

        $query->andFilterWhere(['like', 'XiangMuBianHao', $this->XiangMuBianHao])
            ->andFilterWhere(['like', 'BianGengLeiXing', $this->BianGengLeiXing])
            ->andFilterWhere(['like', 'BianGengQian', $this->BianGengQian])
            ->andFilterWhere(['like', 'BianGengHou', $this->BianGengHou])
            ->andFilterWhere(['like', 'BianGengYuanYin', $this->BianGengYuanYin])
            ->andFilterWhere(['like', 'BeiZhu', $this->BeiZhu]);

        return $dataProvider;
    }
}
