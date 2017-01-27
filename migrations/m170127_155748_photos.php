<?php

use yii\db\Migration;

class m170127_155748_photos extends Migration
{
    public function up()
    {
        $this->createTable('photos', array(
            'id' => $this->primaryKey(),
            'filename' => $this->text()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
            'create_dt' => $this->timestamp()->notNull(),
            'update_dt' => $this->timestamp()
        ));

        $this->createIndex('idx-photos-author_id', 'photos', 'author_id');
        $this->addForeignKey(
            'fk-photos-author_id',
            'photos',
            'author_id',
            'users',
            'id',
            'CASCADE'
        );

        $this->createIndex('idx-photos-status_id', 'photos', 'status_id' );
        $this->addForeignKey(
            'fk-photos-status_id',
            'photos',
            'status_id',
            'photo_statuses',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        return $this->dropTable('photos');
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
