<?php
Yii::setAlias('@common',    dirname(__DIR__));
Yii::setAlias('@assets',    dirname(dirname(__DIR__)) . '/assets');
Yii::setAlias('@backend',   dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@frontend',  dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@console',   dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('assetsUrl', 'http://static.portal.localhost'); // customise for your host configuration
