<?php

namespace common\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "{{%link}}".
 *
 * @property integer $link_id
 * @property integer $subgroup_id
 * @property string $name
 * @property string $title
 * @property string $link
 * @property integer $https
 * @property integer $hide
 *
 * @property \common\models\Subgroup $subgroup
 */
class Link extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subgroup_id', 'title', 'link'], 'required'],
            [['subgroup_id'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['title'], 'string', 'max' => 64],
            [['link'], 'string', 'max' => 255],
            [['https', 'hide'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%link}}';
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
            'link_id' => 'Link ID',
            'subgroup_id' => 'Subgroup ID',
            'name' => 'Name',
            'title' => 'Title',
            'link' => 'Link',
            'https' => 'Https',
            'hide' => 'Hide',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubgroup()
    {
        return $this->hasOne(\common\models\Subgroup::className(), ['subgroup_id' => 'subgroup_id']);
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
     * @return \common\models\LinkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\LinkQuery(get_called_class());
    }
}
