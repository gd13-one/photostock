<?php

use yii\db\Migration;

class m170127_155358_photo_statuses extends Migration
{
    public function up()
    {
        return $this->createTable('photo_statuses', array(
                'id' => $this->primaryKey(),
                'title' => $this->string(32)->notNull(),
                'seqn' => $this->integer()
            ));
    }

    public function down()
    {
        return $this->dropTable('photo_statuses');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
