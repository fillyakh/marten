<?php

use yii\db\Migration;

/**
 * Class m250214_182028_create_table_categories
 */
class m250214_182028_create_table_categories extends Migration
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
        $this->batchInsert('categories', ['name', 'img', 'parent_id'], [
            ['Dogs Food', 'cat_1.jpg', 0],
            ['Cats food', 'cat_2.jpg', 0],
            ['Fishs food', 'cat_3.jpg', 0], // Пример подкатегории
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m250214_182028_create_table_categories cannot be reverted.\n";
        $this->dropTable('categories');
        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250214_182028_create_table_categories cannot be reverted.\n";

        return false;
    }
    */
}
