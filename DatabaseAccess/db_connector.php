<?php
    class db_connector
    {
        protected $connection;

        function setconnection()
        {
            $this->connection =
                new PDO
                (
                    "mysql:host=localhost;dbname=mylibrary_db"
                    , "root"
                    , ""
                );
            
            if ($this->connection === false)
            {
                echo "Error";
            }
        }
    }
?>