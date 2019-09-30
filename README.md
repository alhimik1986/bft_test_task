После скачивания проекта запустить команду:
```
composer install
```

Базу данных устанавливать не нужно - используется sqlite.
Если же нужна база mysql, то нужно сделать соответствующи правки в файле db.php
и произвести миграцию командой ```yii migrate```.

В файле config.php нужно указать класс модуля cadastral
```
$config['modules']['cadastral'] = ['class' => 'alhimik1986\bftcadastral\Module'];
```
В файле console.php нужно указать контроллер:
```
$config['controllerMap']['cadastral'] = ['class' => 'alhimik1986\bftcadastral\commands\CadastralController'];
```
Узнать кадастровые данные через консоль можно следующей командой:
```
yii cadastral 69:27:0000022:1306,69:27:0000022:1307
```

 