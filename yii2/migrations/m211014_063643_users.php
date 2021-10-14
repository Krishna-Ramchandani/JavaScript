<?php

use yii\db\Migration;

/**
 * Class m211014_063643_users
 */
class m211014_063643_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'gender' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211014_063643_users cannot be reverted.\n";

        return false;
    }
    */
}
