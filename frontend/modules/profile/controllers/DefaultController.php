<?php

namespace frontend\modules\profile\controllers;

use Yii;
use common\controllers\FrontendController;
use common\helpers\AppDebug;

class DefaultController extends FrontendController
{
	public function actionIndex()
	{
		// TODO

		// debug info ----------------------------------------------------------
		AppDebug::dump([
			'method'		=> __METHOD__,
			'line'			=> __LINE__,
			'moduleId'		=> $this->module->id,
			'controllerId'	=> $this->id,
			'actionId'		=> $this->action->id,
		]);
		// ---------------------------------------------------------------------

		return $this->render('index');
	}
}
