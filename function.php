<?php
//可根據指定資料類型來過濾變數
function my_filter($var, $type = "int")
{
    switch ($type) {
        case 'string':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES) : '';
            break;
        case 'url':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_URL) : '';
            break;
        case 'email':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_EMAIL) : '';
            break;
        case 'int':
        default:
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_NUMBER_INT) : '';
            break;
    }

    return $var;
}
