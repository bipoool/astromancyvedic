<?php 

    class queries{

        protected $query;

        function __construct(){
            $this->query = "hellfffo";
        }
        function getQuery(){
            return $this->query;
        }

    }

    $myQ = new queries();
    echo $myQ->getQuery();

?>