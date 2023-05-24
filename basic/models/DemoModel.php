<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_demo".
 *
 * @property int $id
 * @property string $username 用户名
 * @property int $age 年龄
 * @property int $created_at 创建日期
 * @property int $updated_at 更新日期
 */
class DemoModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_demo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'age' => '年龄',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
