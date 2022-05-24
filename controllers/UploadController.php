<?php

namespace app\controllers;

use app\models\Cliente;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller {

    public function actionIndex(){

        $post = Yii::$app->getRequest()->post();
        $model = new Cliente;

        if ($model->load($post) && $model->validate()) {

            $model->fotoCliente = UploadedFile::getInstance($model, 'fotoCliente');

            // echo "<pre>"; print_r($model->fotoCliente); die;
            $model->foto = $model->fotoCliente->name;

            $model->save();

            $uploadPath = Yii::getAlias('@webroot/files');

            echo $uploadPath; die;
            $model->fotoCliente->saveAs($uploadPath . '/' . $model->fotoCliente->name);

            echo "<h1>deu certo</h1>";
        }

        return $this->render('index',[
            'model' => $model
        ]);
    }
}