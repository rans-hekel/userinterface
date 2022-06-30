<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MobileLegends;

/**
 * MobileLegendsSearch represents the model behind the search form of `frontend\models\MobileLegends`.
 */
class MobileLegendsSearch extends MobileLegends
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_account', 'server_account'], 'integer'],
            [['nickname_account', 'purchase', 'method_payment', 'transaction_invoice'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MobileLegends::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_account' => $this->id_account,
            'server_account' => $this->server_account,
        ]);

        $query->andFilterWhere(['like', 'nickname_account', $this->nickname_account])
            ->andFilterWhere(['like', 'purchase', $this->purchase])
            ->andFilterWhere(['like', 'method_payment', $this->method_payment])
            ->andFilterWhere(['like', 'transaction_invoice', $this->transaction_invoice]);

        return $dataProvider;
    }
}
