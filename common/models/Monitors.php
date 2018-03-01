<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "monitors".
 *
 * @property string $ID
 * @property string $XiangMuBianHao 项目编号
 * @property string $LuXianBianHao 路线编号
 * @property string $WeiZhiZhuangHao 位置桩号
 * @property string $JianKongSheShiBianMa 监控设施编码
 * @property int $SheBeiLeiXingDaiMa 设备类型代码
 * @property string $SheBeiWeiZhi 设备位置
 * @property string $GuanLiDanWei 管理单位
 * @property string $SheBeiZhuangTai 设备状态
 * @property string $BeiZhu 备注
 *
 * @property Projects $xiangMuBianHao
 * @property Routes $luXianBianHao
 */
class Monitors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monitors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WeiZhiZhuangHao'], 'number'],
            [['SheBeiLeiXingDaiMa'], 'integer'],
            [['XiangMuBianHao'], 'string', 'max' => 11],
            [['LuXianBianHao', 'SheBeiZhuangTai'], 'string', 'max' => 5],
            [['JianKongSheShiBianMa'], 'string', 'max' => 16],
            [['SheBeiWeiZhi'], 'string', 'max' => 2],
            [['GuanLiDanWei'], 'string', 'max' => 14],
            [['BeiZhu'], 'string', 'max' => 20],
            [['XiangMuBianHao'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['XiangMuBianHao' => 'ShouFeiXiangMuBianHao']],
            [['LuXianBianHao'], 'exist', 'skipOnError' => true, 'targetClass' => Routes::className(), 'targetAttribute' => ['LuXianBianHao' => 'LuXianBianHao']],
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
            'LuXianBianHao' => '路线编号',
            'WeiZhiZhuangHao' => '位置桩号',
            'JianKongSheShiBianMa' => '监控设施编码',
            'SheBeiLeiXingDaiMa' => '设备类型代码',
            'SheBeiWeiZhi' => '设备位置',
            'GuanLiDanWei' => '管理单位',
            'SheBeiZhuangTai' => '设备状态',
            'BeiZhu' => '备注',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getXiangMuBianHao0()
    {
        return $this->hasOne(Projects::className(), ['ShouFeiXiangMuBianHao' => 'XiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLuXianBianHao0()
    {
        return $this->hasOne(Routes::className(), ['LuXianBianHao' => 'LuXianBianHao']);
    }
}
