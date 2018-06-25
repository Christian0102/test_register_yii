<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180625_145905_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
			'email'=>$this->string(100),
			'password'=>$this->string(25),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
