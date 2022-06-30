<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "sausageman".
 *
 * @property int $id
 * @property int $id_account
 * @property string $purchase
 * @property string $method_payment
 * @property string $transaction_invoice
 */
class SausageMan extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sausageman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'purchase', 'method_payment', 'transaction_invoice'], 'required'],
            [['id_account'], 'integer'],
            [['purchase'], 'string', 'max' => 30],
            [['method_payment'], 'string', 'max' => 20],
            [['transaction_invoice'], 'string', 'max' => 255],
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
            'purchase' => 'Purchase',
            'method_payment' => 'Method Payment',
            'transaction_invoice' => 'Transaction Invoice',
        ];
    }
}
