<?php  
  
namespace backend\controllers;  
  
use Yii;  
use yii\helpers\FileHelper;  
use yii\helpers\Html;  
use common\models\sites;
use yii\helpers\Url;  
use yii\imagine\Image;  
use yii\helpers\Security;
use yii\web\Controller;  
use yii\web\UploadedFile;  
  
class UploadController extends Controller  
{  
  
  
    /** 
     * 上传图片到临时目录 
     * @return string 
     * @throws \yii\base\Exception 
     */  
    public function actionImages()  
    {  
       $model = new sites();
            $images=UploadedFile::getInstances($model,'imageFile');
            $names=array();
            foreach($images as $image){
                $name=Yii::$app->getSecurity()->generateRandomString().$image->name;
                $names[]=$name;
                $path=Yii::getAlias('@frontend').'/web/uploadimages/'.$name;
                $image->saveAs($path);
                unset($image);
            }
            $model->ZhaoPian=implode(',',$names);
       return json_encode(['error'=>$model->ZhaoPian]);
    }  
  
    /** 
     * 删除上传到临时目录的图片 
     * @return string 
     */  
   
} 
