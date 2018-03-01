<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\sites;

/**
 * sitesSearch represents the model behind the search form of `common\models\sites`.
 */
class sitesSearch extends sites
{
    /**
     * @inheritdoc
     */
    public function attributes(){
        return array_merge(parent::attributes(),['LuXianMingChen']);
    }
    public function rules()
    {
        return [
            [['ID', 'RuKouCheDaoShu', 'ETCRuKouCheDaoShu', 'ChuKouCheDaoShu', 'ETCChuKouCheDaoShu'], 'integer'],
            [['ShouFeiXiangMuBianHao', 'SuoZaiLuXianBianHao', 'ShouFeiZhanBianMa', 'LuXianMingChen','ShouFeiZhanMingChen', 'ShouFeiZhanJianChen', 'SuoZaiLuXianJiShuDengJi', 'ShouFeiZhanShouFeiXingZhi', 'ShouFeiZhanLeiXing', 'ShouFeiZhanWeiZhiLeiXing', 'ShouFeiFangXiang', 'BeiZhu'], 'safe'],
            [['ShouFeiZhanZhuangHao', 'JingDu', 'WeiDu'], 'number'],
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
        $query = sites::find();

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
            'ShouFeiZhanZhuangHao' => $this->ShouFeiZhanZhuangHao,
            'RuKouCheDaoShu' => $this->RuKouCheDaoShu,
            'ETCRuKouCheDaoShu' => $this->ETCRuKouCheDaoShu,
            'ChuKouCheDaoShu' => $this->ChuKouCheDaoShu,
            'ETCChuKouCheDaoShu' => $this->ETCChuKouCheDaoShu,
            'JingDu' => $this->JingDu,
            'WeiDu' => $this->WeiDu,
        ]);

        $query->andFilterWhere(['like', 'ShouFeiXiangMuBianHao', $this->ShouFeiXiangMuBianHao])
            ->andFilterWhere(['=', 'SuoZaiLuXianBianHao', $this->SuoZaiLuXianBianHao])
            ->andFilterWhere(['like', 'ShouFeiZhanBianMa', $this->ShouFeiZhanBianMa])
            ->andFilterWhere(['like', 'ShouFeiZhanMingChen', $this->ShouFeiZhanMingChen])
            ->andFilterWhere(['like', 'ShouFeiZhanJianChen', $this->ShouFeiZhanJianChen])
            ->andFilterWhere(['like', 'SuoZaiLuXianJiShuDengJi', $this->SuoZaiLuXianJiShuDengJi])
            ->andFilterWhere(['like', 'ShouFeiZhanShouFeiXingZhi', $this->ShouFeiZhanShouFeiXingZhi])
            ->andFilterWhere(['like', 'ShouFeiZhanLeiXing', $this->ShouFeiZhanLeiXing])
            ->andFilterWhere(['like', 'ShouFeiZhanWeiZhiLeiXing', $this->ShouFeiZhanWeiZhiLeiXing])
            ->andFilterWhere(['like', 'ShouFeiFangXiang', $this->ShouFeiFangXiang])
            ->andFilterWhere(['like', 'BeiZhu', $this->BeiZhu]);
        $query->join('inner join','routes','routes.LuXianBianHao=sites.SuoZaiLuXianBianHao');
        $query->andFilterWhere(['like','routes.LuXianMingChen',$this->LuXianMingChen]);

        $dataProvider->sort->attributes['LuXianMingChen']=[
            'asc'=>['routes.LuXianMingChen'=>'SORT_ASC'],
            'desc'=>['routes.LuXianMingChen'=>'SORT_DESC'],
        
        ];
        return $dataProvider;
    }
}
