<?php

function query($pdo, $sql, $parameters = []) {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function totals($pdo, $table) {
    $query = query($pdo, 'SELECT COUNT(*) FROM `' . $table . '`');
    $row = $query->fetch();
    return $row[0];
    }

function getall($pdo, $table){
    $sql = 'SELECT * FROM `'.$table.'`';
    $resutl = query($pdo, $sql);
    return $resutl->fetchAll();
}

function getViaId($pdo, $table, $prikey, $value){
    $sql = 'SELECT * FROM `' . $table . '` WHERE`' . $prikey . '` = :value';
    $params = [
        'value' => $value
    ];

    $query = query($pdo, $sql, $params);

    return $query->fetch();
}

function deleteViaId($pdo, $table, $prikey, $id){
    $sql = 'DELETE FROM `' . $table . '` WHERE `' . $prikey . '` = :id';
    $params = [':id' => $id];

    query($pdo, $sql, $params);
}


function imgUploads($fileray){
    $fname = $fileray['name'];
    $ftmpname = $fileray['tmp_name'];
    $fsize = $fileray['size'];
    $ferror = $fileray['error'];

    $fExten = explode('.', $fname);
    $fActualext = strtolower(end($fExten));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fActualext, $allowed)){
        if($ferror === 0){
            if($fsize < 1000000){
                $fnewname = uniqid('', true).".".$fActualext;
                $filedes = __DIR__.'/../controls/images/'.$fnewname;
                move_uploaded_file($ftmpname, $filedes);
                return $fnewname;

            }else{
                $message = 'Your file is too big';
                return null; 
            }

        }else{
            $message = 'We had problems uploading your files';
            return null;
        }

    }else{
        $message = 'Please upload just jpg, jpeg or png';
        return null;
    }

}

function insert($pdo, $table, $fields) {
    $query = 'INSERT INTO `' . $table . '` (';
    
    foreach ($fields as $key => $value) {
        $query .= '`' . $key . '`,';
    }
    $query = rtrim($query, ',');
    
    $query .= ') VALUES (';
        
    foreach ($fields as $key => $value) {
        $query .= ':' . $key . ',';
    }
        
    $query = rtrim($query, ',');      
    $query .= ')';
        
    query($pdo, $query, $fields);
    
}

function update($pdo, $table, $primaryKey, $fields) {
    
    $query = ' UPDATE `' . $table .'` SET ';
    
    foreach ($fields as $key => $value) {
    
        $query .= '`' . $key . '` = :' . $key . ',';
    
    }
    
    $query = rtrim($query, ',');
    
    $query .= ' WHERE `' . $primaryKey . '` = :primaryKey';
   
    // Set the :primaryKey variable
    
    $fields['primaryKey'] = $fields['id'];
    
    query($pdo, $query, $fields);
    
}

function processDates($fields){
    foreach ($fields as $key => $value) {
        if ($value instanceof DateTime) {

            $fields[$key] = $value->format('Y-m-d');

        }

    }

    return $fields;
}