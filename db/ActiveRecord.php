<?php

namespace csa12\db;

use DateTime;
use DateTimeZone;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;

class ActiveRecord extends \yii\db\ActiveRecord
{
	//disable before/on backend/import
	/**
	 * http://www.yiiframework.com/doc-2.0/yii-behaviors-timestampbehavior.html
	 */
	//default
	/*public function behaviors()
	{
		return [
			TimestampBehavior::className(),
			BlameableBehavior::className(),
		];
	}
	*/
	//custom
	public function behaviors()
	{
		return [
			[
				'class' => TimestampBehavior::className(),
				//'createdAtAttribute' => 'created_at',
				//'updatedAtAttribute' => 'updated_at',
				//'value' => time()),
			],

			[
				'class' => BlameableBehavior::className(),
				//'createdByAttribute' => 'created_by',
				//'updatedByAttribute' => 'updated_by',
			],

		];
	}


	/*
    public function beforeValidate()
    {
        $event = new ModelEvent;
        $this->trigger(self::EVENT_BEFORE_VALIDATE, $event);

        return $event->isValid;
    }
	*/
	/**
	 * vendor/yiisoft/yii2/base/Model.php
	 */
	public function beforeValidate()
		{
		if (parent::beforeValidate()) {
			
			//convert to (MYSQL) storage format
			/**
			 * http://www.yiiframework.com/wiki/684/save-and-display-date-time-fields-in-different-formats-in-yii2/ 
			 * = verder uitwerken uitzoeken of mogelijk om automatisch alle number, date, timestamps te convertren...???
			 * o.a fout in bower/jquery-ui/ui/i18n/datepicker-nl.js
			 * //monthNamesShort: ['jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'],
			 * monthNamesShort: ['jan.', 'feb.', 'mrt.', 'apr.', 'mei', 'jun.', 'jul.', 'aug.', 'sep.', 'okt.', 'nov.', 'dec.'],
			 * Denk na aanpassing eraan om assets op te schonen...
			 
			 https://github.com/yiisoft/yii2/pull/3906
			 what happened to unformat/prser... ???
			 
			 */
			//$saveFormat = 'Y-m-d';
			//$dispDate = $this->date1;
			
			//$this->date1 = DateTime::createFromFormat($dispFormat, $dispDate);
			
			//$this->date1 = date($saveFormat, Yii::$app->formatter->asTimestamp($dispDate));
			
			
			 //DateTime::createFromFormat('Y-m-d', $value);
			
			//Let op! een fout hier geeft 'no results found' bij ALLE index pagina's 2014-12-13
			//$this->date1 = \Yii::$app->formatter->asDate($this->date1, 'php:Y-m-d');//2014-12-11 werkt wel voor Engelse jan, feb, maar niet voor Nederlandse 
			
			//$this->info1 = '123';//new \yii\db\Expression('NOW()');
			return true;
		}
		return false;
	}




	public function afterValidate()
		{
		if (parent::afterValidate()) {
			
			
			
			
			
			
			
			
			return true;
		}
		return false;
	}



}
