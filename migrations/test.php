<?php

use yii\db\Migration;

/**
 * Class m250214_181152_create_table_categories
 */
class m250214_181152_create_table_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'img' => $this->string(),
            'parent_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250214_181152_create_table_categories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250214_181152_create_table_categories cannot be reverted.\n";

        return false;
    }
    */
}
