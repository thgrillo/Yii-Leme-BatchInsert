<?php

use yii\db\Migration;

/**
 * Class m220520_124253_create_clientes
 */
class m220520_124253_create_clientes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220520_124253_create_clientes cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%clientes}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull()
        ]);
    }

    public function down()
    {
        //echo "m220520_124253_create_clientes cannot be reverted.\n";
        //return false;
        $this->dropTable('{{%clientes}}');
    }
}
