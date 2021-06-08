<?php

function error($e)
{
    $path = dirname(__DIR__);
    ob_start();
    require $path . '/view/error/error' . $e->getMessage() . '.php';
    $content = ob_get_clean();

    require $path . '/view/base.php';
}
