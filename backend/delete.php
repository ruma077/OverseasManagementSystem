<?php

class Delete
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

    function delete_agent_info($id)
    {
        $query = "DELETE FROM agent_info WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Agent Deleted Successfully.....!";
            return $msg;
        }
    }

    function delete_agent_passport($id)
    {
        $query = "DELETE FROM agent_passport WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Agent Passport Deleted Successfully.....!";
            return $msg;
        }
    }

    function delete_agent_transation($id)
    {
        $query = "DELETE FROM agent_transation WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Agent Transation Deleted Successfully.....!";
            return $msg;
        }
    }

    function delete_client_info($id)
    {
        $query = "DELETE FROM client_info WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Deleted Successfully.....!";
            return $msg;
        }
    }

    function delete_client_working_info($id)
    {
        $query = "DELETE FROM client_working_info WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Working  Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_client_doc_step_1($id)
    {
        $query = "DELETE FROM client_doc_step_1 WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Document  Deleted Successfully.....!";
            return $msg;
        }
    }
   
    
    function delete_client_doc_step_2($id)
    {
        $query = "DELETE FROM client_doc_step_2 WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Document Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_client_doc_step_3($id)
    {
        $query = "DELETE FROM client_doc_step_3 WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Document  Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_client_transation($id)
    {
        $query = "DELETE FROM client_transation WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Transation Deleted Successfully.....!";
            return $msg;
        }
    }

    function delete_agent_graph($id)
    {
        $query = "DELETE FROM agent_transation_graph WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Agent Graph Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_client_graph($id)
    {
        $query = "DELETE FROM client_transa_br WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Graph Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_flight($id)
    {
        $query = "DELETE FROM flight WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Flight Number Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_prinnt($id)
    {
        $query = "DELETE FROM prinnt WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_bill($id)
    {
        $query = "DELETE FROM bill WHERE id=$id";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_invoice($invoice_no)
    {
        $query = "DELETE FROM invoice WHERE invoice_no=$invoice_no";
        if(mysqli_query($this->conn, $query))
        {
            $msg = "Deleted Successfully.....!";
            return $msg;
        }
    }
    
   
    
    

}

?>