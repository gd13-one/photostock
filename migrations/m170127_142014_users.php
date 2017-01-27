<?php

use yii\db\Schema;
use yii\db\Migration;


class m170127_142014_users extends Migration
{
    public function up()
    {
        return $this->createTable('users', array(
                'id' => $this->primaryKey(),
                'username' => $this->string(32)->notNull(),
                'password' => $this->text()->notNull(),
                'firstname' => $this->string(64)->notNull(),
                'lastname' => $this->string(128)->notNull(),
                'role' => $this->smallInteger(),
                'create_dt' => $this->timestamp()->notNull(),
                'update_dt' => $this->timestamp()
            ));
    }

    public function down()
    {
        return $this->dropTable('users');
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
