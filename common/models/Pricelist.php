<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pricelist".
 *
 * @property string $ID
 * @property string $XiangMuBianHao 项目编号
 * @property int $ShouFeiBiaoZhunXuHao 收费标准序号
 * @property string $CheXingHuaFenFenLei 车型划分分类
 * @property string $CheXingHuaFenBiaoZhunShuoMing 车型划分标准说明
 * @property string $JiFeiDanWei 计费单位
 * @property string $ShouFeiBiaoZhun 收费标准
 * @property string $BeiZhu 备注
 *
 * @property Projects $xiangMuBianHao0
 */
class Pricelist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pricelist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ShouFeiBiaoZhunXuHao'], 'integer'],
            [['ShouFeiBiaoZhun'], 'number'],
            [['XiangMuBianHao'], 'string', 'max' => 11],
            [['CheXingHuaFenFenLei'], 'string', 'max' => 3],
            [['CheXingHuaFenBiaoZhunShuoMing'], 'string', 'max' => 42],
            [['JiFeiDanWei'], 'string', 'max' => 5],
            [['BeiZhu'], 'string', 'max' => 38],
            [['XiangMuBianHao'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['XiangMuBianHao' => 'ShouFeiXiangMuBianHao']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'XiangMuBianHao' => '项目编号',
            'ShouFeiBiaoZhunXuHao' => '收费标准序号',
            'CheXingHuaFenFenLei' => '车型划分分类',
            'CheXingHuaFenBiaoZhunShuoMing' => '车型划分标准说明',
            'JiFeiDanWei' => '计费单位',
            'ShouFeiBiaoZhun' => '收费标准',
            'BeiZhu' => '备注',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getxiangMuBianHao0()
    {
        return $this->hasOne(Projects::className(), ['ShouFeiXiangMuBianHao' => 'XiangMuBianHao']);
    }
}
