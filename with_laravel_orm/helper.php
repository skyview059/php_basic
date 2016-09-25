<?php

use Illuminate\Database\Capsule\Manager as DB;

function save($table = 'student', $array = array(), $primary_id = 0) {


    if (empty($array)) {
        return 'Invalide Array';
    } else {

        if ($primary_id) {
            return update($table, $array, $primary_id);
        } else {
            return insert($table, $array);
        }
    }
}

function insert($table, $data = array()) {

    if (count($data) == count($data, COUNT_RECURSIVE)) {
        $db = DB::table($table)->insertGetId($data);    
    } else {
        DB::table($table)->insert($data);          
        $db = true;
    }
    return $db;
}

function update($table, $data = array(), $primary_id = 0) {
    DB::table($table)
            ->where('id', $primary_id)
            ->update($data);
    return true;
}


function saveMailLog( $data = ''){        
    $file = __DIR__ . '/mail_log/'. date('Y-m-d-H-i-s_') . rand( 0, 1000 ) .'.txt';    
    file_put_contents($file, $data);        
}
