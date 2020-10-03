<?php

namespace common\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "{{%subgroup}}".
 *
 * @property integer $subgroup_id
 * @property integer $group_id
 * @property string $name
 * @property string $title
 * @property integer $hide
 *
 * @property \common\models\Link[] $links
 * @property \common\models\Group $group
 */
class Subgroup extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'name', 'title'], 'required'],
            [['group_id'], 'integer'],
            [['name', 'title'], 'string', 'max' => 32],
            [['hide'], 'string', 'max' => 1],
            [['name'], 'unique'],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subgroup}}';
    }

    /**
     * 
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock 
     * 
     */
    public function optimisticLock() {
        return 'lock';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subgroup_id' => 'Subgroup ID',
            'group_id' => 'Group ID',
            'name' => 'Name',
            'title' => 'Title',
            'hide' => 'Hide',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinks()
    {
        return $this->hasMany(\common\models\Link::className(), ['subgroup_id' => 'subgroup_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(\common\models\Group::className(), ['group_id' => 'group_id']);
    }

/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\SubgroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\SubgroupQuery(get_called_class());
    }
}
