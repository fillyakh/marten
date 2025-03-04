<?php

use yii\db\Migration;

/**
 * Class m250228_174442_create_table_product_images
 */
class m250228_174442_create_table_product_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_images', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'product_id' => $this->integer()->notNull(),
            ]);
            $this->batchInsert('product_images', ['name','product_id'], [
                ['product-4.jpg', '1'],
                ['product-5.jpg', '1'],
                ['product-6.jpg', '1'],
                ['product-7.jpg', '2'],
                ['product-8.jpg', '2'],
                ['product-9.jpg', '3'],
                ['product-10.jpg', '3'],
                ['product-11.jpg', '3'],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_images');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250228_174442_create_table_product_images cannot be reverted.\n";

        return false;
    }
    */
}
