<?php

use yii\db\Migration;

/**
 * Class m211014_062730_api
 */
class m211014_062730_api extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('api', [
            'id' => $this->primaryKey(),
            'url' => $this->string(100)->notNull(),
            'title' => $this->string(100)->notNull(),
            'description' => $this->string(100)->notNull(),
            'method' => $this->string(100)->notNull(),
            'request' => $this->string(100)->notNull(),
            'response' => $this->string(100)->notNull(),
            'project_id' => $this->integer(),
            'module_id' => $this->integer()
        ]);

        $this->addForeignKey('FK_project_api','api','project_id','project','id');
        $this->addForeignKey('FK_module_api','api','module_id','module','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_project_api','api');
        $this->dropForeignKey('FK_module_api','api');
        $this->dropTable('api');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211014_062730_api cannot be reverted.\n";

        return false;
    }
    */
}
