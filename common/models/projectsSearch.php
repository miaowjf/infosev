<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\projects;

/**
 * projectsSearch represents the model behind the search form of `common\models\projects`.
 */
class projectsSearch extends projects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['ShouFeiXiangMuBianHao', 'ShouFeiXiangMuMingChen', 'ShouFeiXiangMuXingZhi', 'ShouFeiXiangMuQiDianMingChen', 'ShouFeiXiangMuZhiDianMingChen', 'ShouFeiXiangMuJiShuDengJi', 'ShouFeiXiangMuXingZhengDengJi', 'GuanLiJingYingDanWeiMingChen', 'ZuZhiJiGouDaiMa', 'PiZhunShouFeiWenHao', 'ShouFeiPiFuWenJianMingChen', 'PiZhunShouFeiQiShiShiJian', 'PiZhunShouFeiZhongZhiShiJian', 'JianChengTongCheShiJian', 'ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu', 'XianXingShouFeiBiaoZhunPiZhunShiJian', 'ShiFuTongDaiTongHuaiXiangMu', 'ShouFeiLiChengHeJi'], 'safe'],
           [['GuanLiJingYingDanWeiXingZhiBianMa'], 'integer'],
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
        $query = projects::find();

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
            'GuanLiJingYingDanWeiXingZhiBianMa' => $this->GuanLiJingYingDanWeiXingZhiBianMa,
        ]);

        $query->andFilterWhere(['like', 'ShouFeiXiangMuBianHao', $this->ShouFeiXiangMuBianHao])
            ->andFilterWhere(['like', 'ShouFeiXiangMuMingChen', $this->ShouFeiXiangMuMingChen])
            ->andFilterWhere(['like', 'ShouFeiXiangMuXingZhi', $this->ShouFeiXiangMuXingZhi])
            ->andFilterWhere(['like', 'ShouFeiXiangMuQiDianMingChen', $this->ShouFeiXiangMuQiDianMingChen])
            ->andFilterWhere(['like', 'ShouFeiXiangMuZhiDianMingChen', $this->ShouFeiXiangMuZhiDianMingChen])
            ->andFilterWhere(['like', 'ShouFeiXiangMuJiShuDengJi', $this->ShouFeiXiangMuJiShuDengJi])
            ->andFilterWhere(['like', 'ShouFeiXiangMuXingZhengDengJi', $this->ShouFeiXiangMuXingZhengDengJi])
            ->andFilterWhere(['like', 'GuanLiJingYingDanWeiMingChen', $this->GuanLiJingYingDanWeiMingChen])
            ->andFilterWhere(['like', 'ZuZhiJiGouDaiMa', $this->ZuZhiJiGouDaiMa])
            ->andFilterWhere(['like', 'PiZhunShouFeiWenHao', $this->PiZhunShouFeiWenHao])
            ->andFilterWhere(['like', 'ShouFeiPiFuWenJianMingChen', $this->ShouFeiPiFuWenJianMingChen])
            ->andFilterWhere(['like', 'PiZhunShouFeiQiShiShiJian', $this->PiZhunShouFeiQiShiShiJian]) 
            ->andFilterWhere(['like', 'PiZhunShouFeiZhongZhiShiJian', $this->PiZhunShouFeiZhongZhiShiJian]) 
            ->andFilterWhere(['like', 'JianChengTongCheShiJian', $this->JianChengTongCheShiJian]) 
            ->andFilterWhere(['like', 'ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu', $this->ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu])
            ->andFilterWhere(['like', 'XianXingShouFeiBiaoZhunPiZhunShiJian', $this->XianXingShouFeiBiaoZhunPiZhunShiJian])
            ->andFilterWhere(['like', 'ShiFuTongDaiTongHuaiXiangMu', $this->ShiFuTongDaiTongHuaiXiangMu])
            ->andFilterWhere(['like', 'ShouFeiLiChengHeJi', $this->ShouFeiLiChengHeJi]);

        return $dataProvider;
    }
}
