<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'.realpath(__DIR__.'/../data') . '/database.db',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
