<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wdetectors".
 *
 * @property string $ID
 * @property string $XiangMuBianHao 项目编号
 * @property string $LuXianBianHao 路线编号
 * @property string $WeiZhiZhuangHao 位置桩号
 * @property string $QiXiangJianCeQiBianMa 气象检测器编码
 * @property string $SuoZaiWeiZhiMiaoShu 所在位置描述
 * @property string $TianQiXianXiang 天气现象
 * @property string $WenDu 温度
 * @property string $ShiDu 湿度
 * @property string $Feng 风
 * @property string $QiYa 气压
 * @property string $JiangShui 降水
 * @property string $NenJianDu 能见度
 * @property string $LuMianZhuangTai 路面状态
 * @property string $DiWen 地温
 * @property string $FuShe 辐射
 * @property string $GongDianFangShi 供电方式
 * @property string $ShuJuChuanShuFangShi 数据传输方式
 * @property int $ShuJuCaiJiJianGe 数据采集间隔
 * @property string $SheZhiWeiZhi 设置位置
 * @property string $BeiZhu 备注
 *
 * @property Projects $xiangMuBianHao
 * @property Routes $luXianBianHao
 */
class Wdetectors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wdetectors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WeiZhiZhuangHao'], 'number'],
            [['ShuJuCaiJiJianGe'], 'integer'],
            [['XiangMuBianHao'], 'string', 'max' => 11],
            [['LuXianBianHao'], 'string', 'max' => 5],
            [['QiXiangJianCeQiBianMa', 'BeiZhu'], 'string', 'max' => 16],
            [['SuoZaiWeiZhiMiaoShu'], 'string', 'max' => 13],
            [['TianQiXianXiang', 'WenDu', 'ShiDu', 'Feng', 'QiYa', 'JiangShui', 'NenJianDu', 'LuMianZhuangTai', 'DiWen', 'FuShe'], 'string', 'max' => 1],
            [['GongDianFangShi'], 'string', 'max' => 4],
            [['ShuJuChuanShuFangShi', 'SheZhiWeiZhi'], 'string', 'max' => 2],
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
            'QiXiangJianCeQiBianMa' => '气象检测器编码',
            'SuoZaiWeiZhiMiaoShu' => '所在位置描述',
            'TianQiXianXiang' => '天气现象',
            'WenDu' => '温度',
            'ShiDu' => '湿度',
            'Feng' => '风',
            'QiYa' => '气压',
            'JiangShui' => '降水',
            'NenJianDu' => '能见度',
            'LuMianZhuangTai' => '路面状态',
            'DiWen' => '地温',
            'FuShe' => '辐射',
            'GongDianFangShi' => '供电方式',
            'ShuJuChuanShuFangShi' => '数据传输方式',
            'ShuJuCaiJiJianGe' => '数据采集间隔',
            'SheZhiWeiZhi' => '设置位置',
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
