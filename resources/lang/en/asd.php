<?php
$arr = [];
foreach (\App\Models\Words::orderBy('id')->get() as $data) {
    $arr[$data->key] = $data->en;
}

return $arr;
