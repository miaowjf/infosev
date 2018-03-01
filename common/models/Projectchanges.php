<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projectchanges".
 *
 * @property string $ID
 * @property string $XiangMuBianHao 项目编号
 * @property int $FaShengShiJian 发生时间
 * @property string $BianGengLeiXing 变更类型
 * @property string $BianGengQian 变更前
 * @property string $BianGengHou 变更后
 * @property string $BianGengYuanYin 变更原因
 * @property string $BeiZhu 备注
 *
 * @property Projects $xiangMuBianHao0
 */
class Projectchanges extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projectchanges';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FaShengShiJian'], 'integer'],
            [['XiangMuBianHao'], 'string', 'max' => 11],
            [['BianGengLeiXing'], 'string', 'max' => 8],
            [['BianGengQian'], 'string', 'max' => 16],
            [['BianGengHou'], 'string', 'max' => 12],
            [['BianGengYuanYin'], 'string', 'max' => 2],
            [['BeiZhu'], 'string', 'max' => 13],
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
            'FaShengShiJian' => '发生时间',
            'BianGengLeiXing' => '变更类型',
            'BianGengQian' => '变更前',
            'BianGengHou' => '变更后',
            'BianGengYuanYin' => '变更原因',
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
