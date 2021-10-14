<?php

use yii\db\Migration;

/**
 * Class m211014_061410_module
 */
class m211014_061410_module extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('module', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'description' => $this->string(100)->notNull(),
            'project_id' => $this->integer()
        ]);

        $this->addForeignKey('FK_project_module','module','project_id','project','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_project_module','module');
        $this->dropTable('module');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211014_061410_module cannot be reverted.\n";

        return false;
    }
    */
}
