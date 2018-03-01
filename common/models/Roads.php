<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "roads".
 *
 * @property string $ID
 * @property string $ShouFeiXiangMuBianHao 收费项目编号
 * @property string $LuXianBianMa 路线编码
 * @property string $LuXianMingChen 路线名称
 * @property string $QiDianMingChen 起点名称
 * @property string $QiDianZhuangHao 起点桩号
 * @property string $ZhiDianMingChen 止点名称
 * @property string $ZhiDianZhuangHao 止点桩号
 * @property string $JiShuDengJi 技术等级
 * @property int $CheDaoShu 车道数
 * @property string $LuDuanZongLiCheng 路段总里程
 * @property string $QiaoLiangLiCheng 桥梁里程
 * @property string $SuiDaoLiCheng 隧道里程
 * @property string $BeiZhu 备注
 *
 * @property Projects $shouFeiXiangMuBianHao
 * @property Routes $luXianBianMa
 */
class Roads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['QiDianZhuangHao', 'ZhiDianZhuangHao', 'LuDuanZongLiCheng', 'QiaoLiangLiCheng', 'SuiDaoLiCheng'], 'number'],
            [['CheDaoShu'], 'integer'],
            [['ShouFeiXiangMuBianHao'], 'string', 'max' => 11],
            [['LuXianBianMa'], 'string', 'max' => 5],
            [['LuXianMingChen'], 'string', 'max' => 10],
            [['QiDianMingChen', 'ZhiDianMingChen'], 'string', 'max' => 19],
            [['JiShuDengJi'], 'string', 'max' => 2],
            [['BeiZhu'], 'string', 'max' => 99],
            [['ShouFeiXiangMuBianHao'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['ShouFeiXiangMuBianHao' => 'ShouFeiXiangMuBianHao']],
            [['LuXianBianMa'], 'exist', 'skipOnError' => true, 'targetClass' => Routes::className(), 'targetAttribute' => ['LuXianBianMa' => 'LuXianBianHao']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ShouFeiXiangMuBianHao' => '收费项目编号',
            'LuXianBianMa' => '路线编码',
            'LuXianMingChen' => '路线名称',
            'QiDianMingChen' => '起点名称',
            'QiDianZhuangHao' => '起点桩号',
            'ZhiDianMingChen' => '止点名称',
            'ZhiDianZhuangHao' => '止点桩号',
            'JiShuDengJi' => '技术等级',
            'CheDaoShu' => '车道数',
            'LuDuanZongLiCheng' => '路段总里程',
            'QiaoLiangLiCheng' => '桥梁里程',
            'SuiDaoLiCheng' => '隧道里程',
            'BeiZhu' => '备注',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShouFeiXiangMuBianHao0()
    {
        return $this->hasOne(Projects::className(), ['ShouFeiXiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLuXianBianMa0()
    {
        return $this->hasOne(Routes::className(), ['LuXianBianHao' => 'LuXianBianMa']);
    }
}
