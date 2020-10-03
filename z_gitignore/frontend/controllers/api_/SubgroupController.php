<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "SubgroupController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SubgroupController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Subgroup';
}
