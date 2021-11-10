<?php
function dd($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function expect($val, $result) {
    return $val == $result ? 'Success' : 'Error';
}
