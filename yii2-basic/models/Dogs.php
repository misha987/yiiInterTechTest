<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Dogs extends ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public function rules()
    {
        return [
            [['id', 'age'], 'integer'],
            ['name', 'string', 'max' => 255],
            ['owner_name', 'string', 'max' => 255],
        ];
    }
 
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dogs}}';
    }

    public static function getDogs() {
        file_put_contents(__DIR__ . "/dogs.log", print_r(Dogs::find()->all(), true));
        return Dogs::find()->all();
    }
}