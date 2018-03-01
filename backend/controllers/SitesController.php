<?php

namespace backend\controllers;

use Yii;
//use yii\helpers\Security;
use common\models\sites;
use yii\web\UploadedFile;
use common\models\sitesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SitesController implements the CRUD actions for sites model.
 */
class SitesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all sites models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new sitesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single sites model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new sites model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new sites();

        if ($model->load(Yii::$app->request->post())) {
            $images=UploadedFile::getInstances($model,'imageFile');
            foreach($images as $image){
                $name=Yii::$app->getSecurity()->generateRandomString().$image->name;
                $model->ZhaoPian=$model->ZhaoPian.','.$name;
                $path=Yii::getAlias('@frontend').'/web/uploadimages/'.$name;
                $image->saveAs($path);
            }
            if($model->save()){ 
                return $this->redirect(['view', 'id' => $model->ID]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
        /*作用新的图片增加
        $model = new sites();

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
         */
    }

    /**
     * Updates an existing sites model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imagesname=explode(',',$model->ZhaoPian);
        if ($model->load(Yii::$app->request->post())) {
             $images=UploadedFile::getInstances($model,'imageFile');
             $model->ZhaoPian='';
            foreach($images as $image){
                $name=Yii::$app->getSecurity()->generateRandomString().$image->name;
                $model->ZhaoPian=$model->ZhaoPian.','.$name;
                $path=Yii::getAlias('@frontend').'/web/uploadimages/'.$name;
                $image->saveAs($path);
            }
             
            if($model->save()){ 
                foreach($imagesname as $image){
                    if ($image!==''){
                    $file_name = Yii::getAlias('@frontend').'/web/uploadimages/'.$image;
                    if (file_exists($file_name)){
                        $myfile=fopen($file_name,'a');
                        fclose($myfile);
                        unlink($file_name);
                    }
                    }
                }
                return $this->redirect(['view', 'id' => $model->ID]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing sites model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $imagesname=explode(',',$model->ZhaoPian);

                foreach($imagesname as $image){
                    if ($image!==''){
                    $file_name = Yii::getAlias('@frontend').'/web/uploadimages/'.$image;
                    if (file_exists($file_name)){
                        $myfile=fopen($file_name,'a');
                        fclose($myfile);
                        unlink($file_name);
                    }
                    }
                }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the sites model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return sites the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = sites::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
