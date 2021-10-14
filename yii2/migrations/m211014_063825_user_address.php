<?php

use yii\db\Migration;

/**
 * Class m211014_063825_user_address
 */
class m211014_063825_user_address extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_address', [
            'id' => $this->primaryKey(),
            'addressline' => $this->string(100)->notNull(),
            'city' => $this->string(100)->notNull(),
            'state' => $this->string(100)->notNull(),
            'country' => $this->string(100)->notNull(),
            'user_id' => $this->integer()
        ]);

        $this->addForeignKey('FK_user_useraddress','user_address','user_id','users','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_user_useraddress','user_address');
        $this->dropTable('user_address');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211014_063825_user_address cannot be reverted.\n";

        return false;
    }
    */
}
