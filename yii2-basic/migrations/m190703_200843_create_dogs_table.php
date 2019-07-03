<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dogs}}`.
 */
class m190703_200843_create_dogs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dogs}}', [
            'id' => $this->primaryKey(),
            'owner_name' => $this->string(),
            'name' => $this->string()->notNull(),
            'age' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dogs}}');
    }
}
