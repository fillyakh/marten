<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name
 * @property string|null $img
 * @property int $parent_id
 */
class Category extends \yii\db\ActiveRecord
{
    public const MAIN_PARENT = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
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
            'img' => 'Img',
            'parent_id' => 'Parent ID',
        ];
    }

    public function getChildren()
    {
        // return self::find()->where(['parent_id' => $this->id])->all();
        return $this->hasMany(Category::class, ['parent_id' => 'id']);
    }
}
