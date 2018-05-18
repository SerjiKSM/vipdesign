<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string $full_description
 * @property string $date
 * @property string $alias
 * @property int $author_id
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'date', 'short_description', 'full_description'], 'required'],
            [['short_description', 'full_description'], 'string'],
            [['date'], 'safe'],
            [['author_id'], 'integer'],
            [['title', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'full_description' => 'Full Description',
            'date' => 'Date',
            'alias' => 'Alias',
            'author_id' => 'Author ID',
        ];
    }
}
