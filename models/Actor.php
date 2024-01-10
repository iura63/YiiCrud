<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Persons".
 *
 * @property int $PersonID
 * @property string|null $LastName
 * @property string|null $FirstName
 * @property int|null $Age
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Persons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Age'], 'integer'],
            [['LastName', 'FirstName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PersonID' => 'Person ID',
            'LastName' => 'Last Name',
            'FirstName' => 'First Name',
            'Age' => 'Age',
        ];
    }
}
