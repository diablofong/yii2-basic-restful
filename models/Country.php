<?php
namespace app\models;

class Country extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'country';
	}	
}