<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%t_demo}}`.
 */
class m230524_080003_create_t_demo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%t_demo}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(50)->notNull()->defaultValue("")->comment("用户名"),
            'age' => $this->integer(11)->notNull()->defaultValue(0)->comment("年龄"),
            'created_at' => $this->integer(11)->notNull()->defaultValue(0)->comment("创建日期"),
            'updated_at' => $this->integer(11)->notNull()->defaultValue(0)->comment("更新日期"),
        ]);
        $this->insert('t_demo', [
            'id' => 1,
            'username' => 'criss_1',
            'age' => 10,
            'created_at' => 1684919130,
            'updated_at' => 1684919130
        ]);
        $this->insert('t_demo', [
            'id' => 2,
            'username' => 'criss_2',
            'age' => 10,
            'created_at' => 1684919130,
            'updated_at' => 1684919130
        ]);
        $this->insert('t_demo', [
            'id' => 3,
            'username' => 'criss_3',
            'age' => 10,
            'created_at' => 1684919130,
            'updated_at' => 1684919130
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%t_demo}}');
    }
}
