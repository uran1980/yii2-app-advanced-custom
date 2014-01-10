<?php

namespace common\controllers;

use Yii;
use yii\web\Controller;
use common\helpers\ClientIp;

class MainController extends Controller
{
	/**
	 * Returns the request component.
	 * @return Request the request component
	 */
	public function getRequest()
	{
		return Yii::$app->getRequest();
	}

	/**
	 * @return string
	 */
	public function getClientIp()
	{
		return ClientIp::get();
	}
}
