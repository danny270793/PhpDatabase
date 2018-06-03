<?php
    class Sqlite
    {
        private $database;
        function __construct($path)
        {
            $this->database=new Sqlite3($path);
        }
        function exec($sql)
        {
            $this->database->query($sql);
        }
        function query($sql)
        {
            $result=$this->database->query($sql);
            $resx=$result->fetchArray(SQLITE3_ASSOC);
            return $resx;
        }
    }