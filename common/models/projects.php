<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property string $ShouFeiXiangMuBianHao 收费项目编号
 * @property string $ShouFeiXiangMuMingChen 收费项目名称
 * @property string $ShouFeiXiangMuXingZhi 收费项目性质
 * @property string $ShouFeiXiangMuQiDianMingChen 收费项目起点名称
 * @property string $ShouFeiXiangMuZhiDianMingChen 收费项目止点名称
 * @property string $ShouFeiXiangMuJiShuDengJi 收费项目技术等级
 * @property string $ShouFeiXiangMuXingZhengDengJi 收费项目行政等级
 * @property string $GuanLiJingYingDanWeiMingChen 管理经营单位名称
 * @property string $ZuZhiJiGouDaiMa 组织机构代码
 * @property int $GuanLiJingYingDanWeiXingZhiBianMa 管理经营单位性质编码
 * @property string $PiZhunShouFeiWenHao 批准收费文号
 * @property string $ShouFeiPiFuWenJianMingChen 收费批复文件名称
 * @property string $PiZhunShouFeiQiShiShiJian 批准收费起始时间
 * @property string $PiZhunShouFeiZhongZhiShiJian 批准收费终止时间
 * @property string $JianChengTongCheShiJian 建成通车时间
 * @property string $ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu 是否属于政府还贷公路转为的经营性公路
 * @property string $XianXingShouFeiBiaoZhunPiZhunShiJian 现行收费标准批准时间
 * @property string $ShiFuTongDaiTongHuaiXiangMu 是否统贷统还项目
 * @property string $ShouFeiLiChengHeJi 收费里程合计
 *
 * @property Monitors[] $monitors
 * @property Pricelist[] $pricelists
 * @property Projectchanges[] $projectchanges
 * @property Roads[] $roads
 * @property Sites[] $sites
 * @property Wdetectors[] $wdetectors
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ShouFeiXiangMuBianHao'], 'required'],
            [['GuanLiJingYingDanWeiXingZhiBianMa'], 'integer'],
            [['ShouFeiXiangMuBianHao'], 'string', 'max' => 11],
            [['ShouFeiXiangMuMingChen'], 'string', 'max' => 13],
            [['ShouFeiXiangMuXingZhi', 'ShouFeiXiangMuJiShuDengJi', 'ShouFeiXiangMuXingZhengDengJi'], 'string', 'max' => 2],
            [['ShouFeiXiangMuQiDianMingChen'], 'string', 'max' => 19],
            [['ShouFeiXiangMuZhiDianMingChen'], 'string', 'max' => 18],
            [['GuanLiJingYingDanWeiMingChen'], 'string', 'max' => 14],
            [['ZuZhiJiGouDaiMa'], 'string', 'max' => 10],
            [['PiZhunShouFeiWenHao'], 'string', 'max' => 20],
            [['ShouFeiPiFuWenJianMingChen'], 'string', 'max' => 89],
            [['PiZhunShouFeiQiShiShiJian', 'PiZhunShouFeiZhongZhiShiJian', 'JianChengTongCheShiJian', 'XianXingShouFeiBiaoZhunPiZhunShiJian'], 'string', 'max' => 8],
            [['ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu', 'ShiFuTongDaiTongHuaiXiangMu'], 'string', 'max' => 1],
            [['ShouFeiLiChengHeJi'], 'string', 'max' => 6],
            [['ShouFeiXiangMuBianHao'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ShouFeiXiangMuBianHao' => '收费项目编号',
            'ShouFeiXiangMuMingChen' => '收费项目名称',
            'ShouFeiXiangMuXingZhi' => '收费项目性质',
            'ShouFeiXiangMuQiDianMingChen' => '收费项目起点名称',
            'ShouFeiXiangMuZhiDianMingChen' => '收费项目止点名称',
            'ShouFeiXiangMuJiShuDengJi' => '收费项目技术等级',
            'ShouFeiXiangMuXingZhengDengJi' => '收费项目行政等级',
            'GuanLiJingYingDanWeiMingChen' => '管理经营单位名称',
            'ZuZhiJiGouDaiMa' => '组织机构代码',
            'GuanLiJingYingDanWeiXingZhiBianMa' => '管理经营单位性质编码',
            'PiZhunShouFeiWenHao' => '批准收费文号',
            'ShouFeiPiFuWenJianMingChen' => '收费批复文件名称',
            'PiZhunShouFeiQiShiShiJian' => '批准收费起始时间',
            'PiZhunShouFeiZhongZhiShiJian' => '批准收费终止时间',
            'JianChengTongCheShiJian' => '建成通车时间',
            'ShiFuShuYuZhengFuHuaiDaiGongLuZhuanWeiDeJingYingXingGongLu' => '是否属于政府还贷公路转为的经营性公路',
            'XianXingShouFeiBiaoZhunPiZhunShiJian' => '现行收费标准批准时间',
            'ShiFuTongDaiTongHuaiXiangMu' => '是否统贷统还项目',
            'ShouFeiLiChengHeJi' => '收费里程合计',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitors()
    {
        return $this->hasMany(Monitors::className(), ['XiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPricelists()
    {
        return $this->hasMany(Pricelist::className(), ['XiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectchanges()
    {
        return $this->hasMany(Projectchanges::className(), ['XiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoads()
    {
        return $this->hasMany(Roads::className(), ['ShouFeiXiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSites()
    {
        return $this->hasMany(Sites::className(), ['ShouFeiXiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWdetectors()
    {
        return $this->hasMany(Wdetectors::className(), ['XiangMuBianHao' => 'ShouFeiXiangMuBianHao']);
    }
}
