<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $title
 * @property string $authors
 * @property string $published
 * @property string $created
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'authors'], 'required'],
            [['published', 'created'], 'safe'],
            [['published'], 'default', 'value' => null],
            [['title', 'authors'], 'string', 'max' => 63],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'authors' => 'Authors',
            'published' => 'Published',
            'created' => 'Created',
        ];
    }
}
