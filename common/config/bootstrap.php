<?php
Yii::setAlias('@common',    dirname(__DIR__));
Yii::setAlias('@api',       dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('@assets',    dirname(dirname(__DIR__)) . '/assets');
Yii::setAlias('@backend',   dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@frontend',  dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@members',   dirname(dirname(__DIR__)) . '/members');
Yii::setAlias('@midend',    dirname(dirname(__DIR__)) . '/midend');
Yii::setAlias('@console',   dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('assetsUrl', 'http://static.a6e-dev.dev'); // customise for your host configuration
