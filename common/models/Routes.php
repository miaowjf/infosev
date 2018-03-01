<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "routes".
 *
 * @property string $LuXianBianHao 路线编号
 * @property string $LuXianMingChen 路线名称
 *
 * @property Monitors[] $monitors
 * @property Roads[] $roads
 * @property Sites[] $sites
 * @property Wdetectors[] $wdetectors
 */
class Routes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'routes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['LuXianBianHao'], 'required'],
            [['LuXianBianHao'], 'string', 'max' => 5],
            [['LuXianMingChen'], 'string', 'max' => 7],
            [['LuXianBianHao'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'LuXianBianHao' => '路线编号',
            'LuXianMingChen' => '路线名称',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitors()
    {
        return $this->hasMany(Monitors::className(), ['LuXianBianHao' => 'LuXianBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoads()
    {
        return $this->hasMany(Roads::className(), ['LuXianBianMa' => 'LuXianBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSites()
    {
        return $this->hasMany(Sites::className(), ['SuoZaiLuXianBianHao' => 'LuXianBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWdetectors()
    {
        return $this->hasMany(Wdetectors::className(), ['LuXianBianHao' => 'LuXianBianHao']);
    }
}
