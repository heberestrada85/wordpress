<?php

namespace ContentEgg\application\modules\Feed\models;

defined('\ABSPATH') || exit;


/**
 * MyFeed24ProductModel class file
 *
 * @author keywordrush.com <support@keywordrush.com>
 * @link https://www.keywordrush.com
 * @copyright Copyright &copy; 2023 keywordrush.com
 */
class MyFeed24ProductModel extends MyFeedProductModel
{

	public function tableName()
	{
		return $this->getDb()->prefix . 'cegg_feed24_product';
	}

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
