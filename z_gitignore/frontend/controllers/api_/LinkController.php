<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "LinkController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class LinkController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Link';
}
