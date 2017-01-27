<?php

use yii\db\Migration;

class m170127_174354_initial_users extends Migration
{
    public function safeUp()
    {
        $hash = \Yii::$app->getSecurity()->generatePasswordHash('admin');
        $dt = \Yii::$app->formatter->asDatetime(date('Y-d-m h:i:s'));
        $auth_key = \Yii::$app->security->generateRandomString();

        $this->insert('users',
            array(
                'username' => 'admin',
                'password' => $hash,
                'auth_key' => $auth_key,
                'create_dt' => $dt
            )
        );
    }

    public function safeDown()
    {
        $this->delete('users', ['username' => 'admin']);
    }
}
