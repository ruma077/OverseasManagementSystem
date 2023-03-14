<?php
class Show
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

    function show_agent()
    {
        $query = "SELECT * FROM agent_info ";
            if(mysqli_query($this->conn, $query))
            {
                $agent_info = mysqli_query($this->conn, $query);
                return $agent_info;
            }
    }

    function show_passport()
    {
        $query = "SELECT * FROM agent_passport ";
            if(mysqli_query($this->conn, $query))
            {
                $agent_passport = mysqli_query($this->conn, $query);
                return $agent_passport;
            }
    }
    function show_transation()
    {
        $query = "SELECT * FROM agent_transation";
            if(mysqli_query($this->conn, $query))
            {
                $agent_transation = mysqli_query($this->conn, $query);
                return $agent_transation;
            }
    }

    function show_client()
    {
        $query = "SELECT * FROM client_info";
            if(mysqli_query($this->conn, $query))
            {
                $client_info = mysqli_query($this->conn, $query);
                return $client_info;
            }
    }

    function show_client_working_info()
    {
        $query = "SELECT * FROM client_working_info";
            if(mysqli_query($this->conn, $query))
            {
                $client_working_info = mysqli_query($this->conn, $query);
                return $client_working_info;
            }
    }

    function show_client_doc_step1()
    {
        $query = "SELECT * FROM client_doc_step_1";
            if(mysqli_query($this->conn, $query))
            {
                $step1 = mysqli_query($this->conn, $query);
                return $step1;
            }
    }

    function show_client_doc_step2()
    {
        $query = "SELECT * FROM client_doc_step_2";
            if(mysqli_query($this->conn, $query))
            {
                $step2 = mysqli_query($this->conn, $query);
                return $step2;
            }
    }

    function show_client_doc_step3()
    {
        $query = "SELECT * FROM client_doc_step_3";
            if(mysqli_query($this->conn, $query))
            {
                $step3= mysqli_query($this->conn, $query);
                return $step3;
            }
    }

    function show_doc_step1()
    {
        $query = "SELECT client_info.id, client_info.client_name, client_info.contact, client_info.emergency_contact, client_info.passport_number, client_doc_step_1.date FROM client_info INNER JOIN client_doc_step_1 on  client_info.client_name= client_doc_step_1.client_name";
            if(mysqli_query($this->conn, $query))
            {
                $step1= mysqli_query($this->conn, $query);
                return $step1;
            }
    }

    function doc_step1($id)
    {
        $query = "SELECT client_info.id, client_info.image, client_info.client_name, client_info.passport_number, client_doc_step_1.passport, client_doc_step_1.bmet, client_doc_step_1.police, client_doc_step_1.covid FROM client_info INNER JOIN client_doc_step_1 on  client_info.client_name = client_doc_step_1.client_name WHERE client_info.id=$id";
            if(mysqli_query($this->conn, $query))
            {
                $step1= mysqli_query($this->conn, $query);
                return $step1;
            }
    }

    function show_doc_step2()
    {
        $query = "SELECT client_info.id, client_info.client_name, client_info.image, client_info.contact, client_info.emergency_contact, client_info.passport_number, client_doc_step_2.date, client_doc_step_2.medical_report, client_doc_step_2.experience, client_doc_step_2.visa_copy FROM client_info INNER JOIN client_doc_step_2 on  client_info.client_name= client_doc_step_2.client_name";
            if(mysqli_query($this->conn, $query))
            {
                $step2= mysqli_query($this->conn, $query);
                return $step2;
            }
    }

    function doc_step2($id)
    {
        $query = "SELECT client_info.id, client_info.client_name, client_info.image, client_info.passport_number, client_doc_step_2.medical_report, client_doc_step_2.experience, client_doc_step_2.visa_copy FROM client_info INNER JOIN client_doc_step_2 on  client_info.client_name= client_doc_step_2.client_name WHERE client_info.id=$id";
            if(mysqli_query($this->conn, $query))
            {
                $step2= mysqli_query($this->conn, $query);
                return $step2;
            }
    }
    function show_doc_step3()
    {
        $query = "SELECT client_info.id, client_info.client_name, client_info.image,  client_info.contact, client_info.emergency_contact, client_info.passport_number, client_doc_step_3.date, client_doc_step_3.men_power, client_doc_step_3.ticket, client_doc_step_3.mukim FROM client_info INNER JOIN client_doc_step_3 on  client_info.client_name= client_doc_step_3.client_name";
            if(mysqli_query($this->conn, $query))
            {
                $step3= mysqli_query($this->conn, $query);
                return $step3;
            }
    }

    function doc_step3($id)
    {
        $query = "SELECT client_info.id, client_info.client_name, client_info.image, client_info.passport_number, client_doc_step_3.men_power, client_doc_step_3.mofa, client_doc_step_3.ticket, client_doc_step_3.mukim FROM client_info INNER JOIN client_doc_step_3 on  client_info.client_name= client_doc_step_3.client_name WHERE client_info.id=$id";
            if(mysqli_query($this->conn, $query))
            {
                $step3= mysqli_query($this->conn, $query);
                return $step3;
            }
    }
    function show_client_transation()
    {
        $query = "SELECT * FROM client_transation";
            if(mysqli_query($this->conn, $query))
            {
                $client_transation = mysqli_query($this->conn, $query);
                return $client_transation;
            }
    }

    function show_graph_agent()
    {
        $query = "SELECT * FROM agent_transation_graph";
        if(mysqli_query($this->conn, $query))
        {
            $graph = mysqli_query($this->conn, $query);
            return $graph;
        }

    }

    function show_graph_client()
    {
        $query = "SELECT * FROM client_transa_br";
        if(mysqli_query($this->conn, $query))
        {
            $graph = mysqli_query($this->conn, $query);
            return $graph;
        }

    }

      function show_agent_graph()
    {
        $query = "SELECT * FROM agent_transation_graph";
            if(mysqli_query($this->conn, $query))
            {
                $agent_info = mysqli_query($this->conn, $query);
                return $agent_info;
            }
    }

     function show_client_graph()
    {
        $query = "SELECT * FROM client_transa_br ";
            if(mysqli_query($this->conn, $query))
            {
                $agent_info = mysqli_query($this->conn, $query);
                return $agent_info;
            }
    }

    function show_flight_graph()
    {
        $query = "SELECT * FROM  flight";
            if(mysqli_query($this->conn, $query))
            {
                $agent_info = mysqli_query($this->conn, $query);
                return $agent_info;
            }
    }

    function agent_bill($id)
    {
        $query = "SELECT * FROM agent_transation WHERE id=$id";
            if(mysqli_query($this->conn, $query))
            {
                $agent_transation_bill = mysqli_query($this->conn, $query);
                return $agent_transation_bill;
            }
    }

    function client_bill($id)
    {
        $query = "SELECT * FROM client_transation WHERE id=$id";
            if(mysqli_query($this->conn, $query))
            {
                $client_transation_bill = mysqli_query($this->conn, $query);
                return $client_transation_bill;
            }
    }
    
    

  
    
    
    
   
  
   
}
?>