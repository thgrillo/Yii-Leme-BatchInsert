<?php

use app\models\Cliente;
use yii\db\Migration;

/**
 * Class m220520_141013_add_foto_coluna
 */
class m220520_141013_add_foto_coluna extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m220520_141013_add_foto_coluna cannot be reverted.\n";

    //     return false;
    // }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn(Cliente::tableName(), 'foto', $this->string(60));
    }

    public function down()
    {
        //echo "m220520_141013_add_foto_coluna cannot be reverted.\n";

        $this->dropColumn(Cliente::tableName(), 'foto');

    }
}
