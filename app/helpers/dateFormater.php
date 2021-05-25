<?php

function dateFormater($date)
{
    $time = strtotime($date);
    return date('d', $time) . '/' . date('m', $time) . '/' . date('Y', $time);
}
