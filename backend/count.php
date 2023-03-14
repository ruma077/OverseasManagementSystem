<?php

class Count
{
    private $conn;
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database ="oms";

       $this->conn =  mysqli_connect($servername, $username, $password,$database);

    
        if (!$this->conn) 
        {
         die("Connection failed");
        }
    }

    //Total Agent
        function agent_count()
        {
            $query="SELECT COUNT(*) AS count FROM agent_info";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['count'];
            return $number;
        }

        //Total Client
        function client_count()
        {
            $query="SELECT COUNT(*) AS count FROM client_info";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['count'];
            return $number;
        }

        //Total Client_step1
        function step1_count()
        {
            $query="SELECT COUNT(*) AS count FROM client_doc_step_1";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['count'];
            return $number;
        }

        //Total Client_step2
        function step2_count()
        {
            $query="SELECT COUNT(*) AS count FROM client_doc_step_2";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['count'];
            return $number;
        }
        //Total Client_step3
        function step3_count()
        {
            $query="SELECT COUNT(*) AS count FROM client_doc_step_3";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['count'];
            return $number;
        }

        //agent total amount
        function agent_amount_sum()
        {
            $query="SELECT SUM(amount) FROM agent_transation";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['SUM(amount)'];
            return $number;
        }

        //client total amount
        function client_amount_sum()
        {
            $query="SELECT SUM(amount) FROM client_transation ";
            $value= mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($value);
            $number=$row['SUM(amount)'];
            return $number;
        }
}
?>