<?php

namespace frontend\controllers\api;

/**
* This is the class for REST controller "GroupController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class GroupController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Group';
}
