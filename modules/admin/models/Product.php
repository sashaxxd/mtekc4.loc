<?php

namespace app\modules\admin\models;

use app\models\Category;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $category_id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property string $article
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property integer $views
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public  function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'views'], 'required'],
            [['category_id', 'views'], 'integer'],
            [['content', 'hit', 'new', 'sale'], 'string'],
            [['price'], 'number'],
            [['name', 'article', 'keywords', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ Товара',
            'category_id' => 'Категория',
            'name' => 'Товар',
            'content' => 'Контент',
            'price' => 'Цена',
            'article' => 'Артикул',
            'keywords' => 'Ключевые слова',
            'description' => 'Описание',
            'img' => 'Изображение',
            'hit' => 'Популярный товар',
            'new' => 'Новинка',
            'sale' => 'Акция',
            'views' => 'Views',
        ];
    }
}
