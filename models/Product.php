<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string|null $old_price
 * @property string|null $short_description
 * @property int $popular
 */
class Product extends \yii\db\ActiveRecord
{
    public const POPULAR_ID = 1;
    public const UNPOPULAR_ID = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['short_description'], 'string'],
            [['popular'], 'integer'],
            [['name', 'price', 'old_price'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'short_description' => 'Short Description',
            'popular' => 'Popular',
        ];
    }

    public function getImages()
    {
        // return ProductImages::find()->where(['product_id' => $this->id])->all();
        return $this->hasMany(ProductImages::class, ['product_id' => 'id']);
    }
}
