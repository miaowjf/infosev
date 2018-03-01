<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\monitors;

/**
 * MonitorsSearch represents the model behind the search form of `common\models\monitors`.
 */
class MonitorsSearch extends monitors
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['ID', 'SheBeiLeiXingDaiMa'], 'integer'],
           [['XiangMuBianHao', 'LuXianBianHao', 'JianKongSheShiBianMa', 'SheBeiWeiZhi', 'GuanLiDanWei', 'SheBeiZhuangTai', 'BeiZhu'], 'safe'],
           [['WeiZhiZhuangHao'], 'number'],
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
        $query = monitors::find();

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
            'WeiZhiZhuangHao' => $this->WeiZhiZhuangHao,
            'SheBeiLeiXingDaiMa' => $this->SheBeiLeiXingDaiMa,
        ]);

 	    $query->andFilterWhere(['like', 'XiangMuBianHao', $this->XiangMuBianHao])
           ->andFilterWhere(['like', 'LuXianBianHao', $this->LuXianBianHao])
           ->andFilterWhere(['like', 'JianKongSheShiBianMa', $this->JianKongSheShiBianMa])
           ->andFilterWhere(['like', 'SheBeiWeiZhi', $this->SheBeiWeiZhi])
           ->andFilterWhere(['like', 'GuanLiDanWei', $this->GuanLiDanWei])
           ->andFilterWhere(['like', 'SheBeiZhuangTai', $this->SheBeiZhuangTai])
           ->andFilterWhere(['like', 'BeiZhu', $this->BeiZhu]);
        return $dataProvider;
    }
}
