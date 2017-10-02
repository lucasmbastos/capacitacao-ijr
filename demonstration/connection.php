<?php

class ConnectionSQLite extends SQLite3
{

    function __construct() 
    {
        $this->open('demonstration.db');
    }

    function executeSelect($sql)
    {
        $result = $this->query($sql);
        $results = [];

        while($tuple = $result->fetchArray(SQLITE3_ASSOC)) {
            $results[] = $tuple;
        } 

        return $results;
    }

    function executeNonSelect($sql)
    {
        $this->query($sql);
    }
}