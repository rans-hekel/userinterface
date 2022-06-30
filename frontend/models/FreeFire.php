<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "freefire".
 *
 * @property int $id
 * @property int $id_account
 * @property string $region_account
 * @property string $purchase
 * @property string $method_payment
 * @property string $transaction_invoice
 */
class FreeFire extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'freefire';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'region_account', 'purchase', 'method_payment', 'transaction_invoice'], 'required'],
            [['id_account'], 'integer'],
            [['region_account'], 'string', 'max' => 99],
            [['purchase'], 'string', 'max' => 30],
            [['method_payment', 'transaction_invoice'], 'string', 'max' => 255],
            ['image', 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_account' => 'Id Account',
            'region_account' => 'Region Account',
            'purchase' => 'Purchase',
            'method_payment' => 'Method Payment',
            'transaction_invoice' => 'Transaction Invoice',
        ];
    }
}
