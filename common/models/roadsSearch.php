<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\roads;

/**
 * roadsSearch represents the model behind the search form of `common\models\roads`.
 */
class roadsSearch extends roads
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CheDaoShu'], 'integer'],
            [['ShouFeiXiangMuBianHao', 'LuXianBianMa', 'LuXianMingChen', 'QiDianMingChen', 'ZhiDianMingChen', 'JiShuDengJi', 'BeiZhu'], 'safe'],
            [['QiDianZhuangHao', 'ZhiDianZhuangHao', 'LuDuanZongLiCheng', 'QiaoLiangLiCheng', 'SuiDaoLiCheng'], 'number'],
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
        $query = roads::find();

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
            'QiDianZhuangHao' => $this->QiDianZhuangHao,
            'ZhiDianZhuangHao' => $this->ZhiDianZhuangHao,
            'CheDaoShu' => $this->CheDaoShu,
            'LuDuanZongLiCheng' => $this->LuDuanZongLiCheng,
            'QiaoLiangLiCheng' => $this->QiaoLiangLiCheng,
            'SuiDaoLiCheng' => $this->SuiDaoLiCheng,
        ]);

        $query->andFilterWhere(['like', 'ShouFeiXiangMuBianHao', $this->ShouFeiXiangMuBianHao])
           ->andFilterWhere(['like', 'LuXianBianMa', $this->LuXianBianMa])
           ->andFilterWhere(['like', 'LuXianMingChen', $this->LuXianMingChen])
           ->andFilterWhere(['like', 'QiDianMingChen', $this->QiDianMingChen])
           ->andFilterWhere(['like', 'ZhiDianMingChen', $this->ZhiDianMingChen])
           ->andFilterWhere(['like', 'JiShuDengJi', $this->JiShuDengJi])
           ->andFilterWhere(['like', 'BeiZhu', $this->BeiZhu]);

        return $dataProvider;
    }
}
