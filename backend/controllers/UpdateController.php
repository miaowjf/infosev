<?php  
  
namespace backend\controllers;  
  
use Yii;  
use yii\helpers\FileHelper;  
use yii\helpers\Html;  
use yii\helpers\Url;  
use yii\imagine\Image;  
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
    
        if ($model->load(Yii::$app->request->post())) {
            $image=UploadedFile::getInstance($model,'imageFile');
            $name=Yii::$app->getSecurity()->generateRandomString().$image->name;
            $model->ZhaoPian=$name;
            $path=Yii::getAlias('@frontend').'/web/uploadimages/'.$name;
            if ($model->save()){
                $image->saveAs($path);
                return $this->redirect(['view', 'id' => $model->ID]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);    
    } 
  
    /** 
     * 删除上传到临时目录的图片 
     * @return string 
     */  
    public function actionDeletePic()  
    {  
        $error = '';  
        if (Yii::$app->request->isPost) {  
            $dir = '/uploads/temp/';  
            $filename = yii::$app->request->post("filename");  
            $filename = $dir . $filename;  
            if (file_exists(Yii::getAlias('@frontend') . '/web' . $filename)) {  
                unlink(Yii::getAlias('@frontend') . '/web' . $filename);  
            }  
  
            if (file_exists(Yii::getAlias('@frontend') . '/web' . $filename . '_100x100.jpg')) {  
                unlink(Yii::getAlias('@frontend') . '/web' . $filename . '_100x100.jpg');  
            }  
        }  
        return json_encode($error);  
    }  
} 
