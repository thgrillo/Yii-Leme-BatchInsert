<?php

namespace app\controllers;

use app\models\Cliente;
use yii\web\Controller;

class InsertController extends Controller{
    public function actionIndex(){
        $clientes = [
            ['nome' => 'Thiago Grillo'],
            ['nome' => 'Carol Moura'],
            ['nome' => 'Clara Grillo'],
            ['nome' => 'Lili Grillo'],
            ['nome' => 'Kiara Grillo'],
        ];

        \Yii::$app->db
            ->createCommand()
            ->batchInsert(Cliente::tableName(), ['nome'], $clientes)
            ->execute();

        // foreach ($clientes as $cliente) {
        //     $row = new Cliente;
        //     $row->nome = $cliente['nome'];
        //     $row->save();
        // }

        echo "ok";
    }
}