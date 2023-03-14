<?php

class Insert
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
//..................................................................................................
    //Agent
    Public function add_agent_info($data)
    {
        $name=$data['name'];
        $address=$data['address'];
        $nid=$data['nid'];
        $contact=$data['contact'];
        $emergency_contact=$data['emergency_contact'];

        $query = "INSERT INTO agent_info (name,address,nid,contact,emergency_contact) VALUE('$name','$address','$nid','$contact','$emergency_contact')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = "Agent Information Updated .....!";
                return $msg;
            }
            else
            {
                $msg = "Agent Information Not Insert.....!";
                return $msg;
            }
    }

    function add_agent_passport($data)
    {
        $name=$data['name'];
        $passport_number=$data['passport_number'];
        $date=$data['date'];
      

        $query = "INSERT INTO agent_passport (name,passport_number,date) VALUE('$name','$passport_number','$date')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = "Number of Passport Updated .....!";
                return $msg;
            }
            else
            {
                $msg = "Number of Passport Not Insert.....!";
                return $msg;
            }
    }

    function add_agent_transation($data)
    {
        $name=$data['name'];
        $date=$data['date'];
        $amount=$data['amount'];
        $remark=$data['remark'];
        $way_amount=$data['way_amount'];
        $invoice=$data['invoice'];

        $query = "INSERT INTO agent_transation (name,date,amount,remark,way_amount,invoice) VALUE('$name','$date','$amount','$remark','$way_amount','$invoice')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = " Agent Transation Updated .....!";
                return $msg;
            }
            else
            {
                $msg = "Agent Transation Not Insert.....!";
                return $msg;
            }
    }


    //Client
    function add_client_info($data)
    {
        $agent_name=$data['agent_name'];
        $client_name=$data['client_name'];
        $address=$data['address'];
        $contact=$data['contact'];
        $emergency_contact=$data['emergency_contact'];
        $nid=$data['nid'];
        $passport_number=$data['passport_number'];
        $dob=$data['dob'];
        $passport_experied_date=$data['passport_experied_date'];

        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if($ext == 'jpg' or $ext== 'png' or $ext== 'jpeg')
        {
            if($image_size <= 3145728)
            {
                $query = "INSERT INTO client_info (agent_name,client_name,address,contact,emergency_contact,nid,passport_number,dob,passport_experied_date,image) VALUE('$agent_name','$client_name','$address','$contact','$emergency_contact','$nid','$passport_number','$dob','$passport_experied_date','$image')";

                if(mysqli_query($this->conn, $query))
                {
                    move_uploaded_file($tmp_name,'storage/client_image/'.$image);
                    $msg = "Client Info Updated .....!";
                    return $msg;      
                }
            }
                else
                {
                    $msg = "Your File Size Should Be Less or Equal 3 MB!";
                }
        }
        else
        {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

   
    function add_client_working_info($data)
    {
        $client_name=$data['client_name'];
        $country_name=$data['country_name'];
        $company_name=$data['company_name'];
        $profession=$data['profession'];
        $oversis_name=$data['oversis_name'];
        $flight_date=$data['flight_date'];
        $medical_report_date=$data['medical_report_date'];

        $query = "INSERT INTO client_working_info(client_name,country_name,company_name,profession,oversis_name,flight_date,medical_report_date) VALUES('$client_name','$country_name','$company_name','$profession','$oversis_name','$flight_date','$medical_report_date')";

        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Working Info Updated .....!";
            return $msg;
        }
        else
        {
            $msg = "Client Working Info  Not Insert.....!";
            return $msg;
        }
    }

    function add_client_doc_step_1($data)
    {
        $client_name=$data['client_name'];
        $date=$data['date'];

        $passport = $_FILES['passport']['name'];
        $passport_type = $_FILES['passport']['type'];
        $passport_size = $_FILES['passport']['size'];
        $passport_tem = $_FILES['passport']['tmp_name'];
        $passport_store ="storage/step_1/passport_photocopy/".$passport;
        move_uploaded_file($passport_tem,$passport_store);

        $bmet = $_FILES['bmet']['name'];
        $bmet_type = $_FILES['bmet']['type'];
        $bmet_size = $_FILES['bmet']['size'];
        $bmet_tem = $_FILES['bmet']['tmp_name'];
        $bmet_store ="storage/step_1/bmet/".$bmet;
        move_uploaded_file($bmet_tem,$bmet_store);

        $police = $_FILES['police']['name'];
        $police_type = $_FILES['police']['type'];
        $police_size = $_FILES['police']['size'];
        $police_tem = $_FILES['police']['tmp_name'];
        $police_store ="storage/step_1/police_clearness/".$police;
        move_uploaded_file($police_tem,$police_store);

        $covid = $_FILES['covid']['name'];
        $covid_type = $_FILES['covid']['type'];
        $covid_size = $_FILES['covid']['size'];
        $covid_tem = $_FILES['covid']['tmp_name'];
        $covid_store ="storage/step_1/covid_report/".$covid;
        move_uploaded_file($covid_tem,$covid_store);

        $query = "INSERT INTO client_doc_step_1(client_name,date,passport,bmet,police,covid) VALUES('$client_name','$date','$passport','$bmet','$police','$covid')";

        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Document Step-1 Updated .....!";
            return $msg;
        }
        else
        {
            $msg = "Client Document Step-1  Not Insert.....!";
            return $msg;
        }
    }
    function add_client_doc_step_2($data)
    {
        $client_name=$data['client_name'];
        $date=$data['date'];

        $medical_report = $_FILES['medical_report']['name'];
        $medical_report_type = $_FILES['medical_report']['type'];
        $medical_report_size = $_FILES['medical_report']['size'];
        $medical_report_tem = $_FILES['medical_report']['tmp_name'];
        $medical_report_store ="storage/step_2/medical/".$medical_report;
        move_uploaded_file($medical_report_tem,$medical_report_store);

        $experience = $_FILES['experience']['name'];
        $experience_type = $_FILES['experience']['type'];
        $experience_size = $_FILES['experience']['size'];
        $experience_tem = $_FILES['experience']['tmp_name'];
        $experience_store ="storage/step_2/certificate/".$experience;
        move_uploaded_file($experience_tem,$experience_store);

        $visa_copy = $_FILES['visa_copy']['name'];
        $visa_copy_type = $_FILES['visa_copy']['type'];
        $visa_copy_size = $_FILES['visa_copy']['size'];
        $visa_copy_tem = $_FILES['visa_copy']['tmp_name'];
        $visa_copy_store ="storage/step_2/visa/".$visa_copy;
        move_uploaded_file($visa_copy_tem,$visa_copy_store);

        $query = "INSERT INTO client_doc_step_2(client_name,date,medical_report,experience,visa_copy) VALUES('$client_name','$date','$medical_report','$experience','$visa_copy')";

        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Document Step-2 Updated .....!";
            return $msg;
        }
        else
        {
            $msg = "Client Document Step-2 Not Insert.....!";
            return $msg;
        }
    }
    function add_client_doc_step_3($data)
    {
        $client_name=$data['client_name'];
        $date=$data['date'];

        $men_power = $_FILES['men_power']['name'];
        $men_power_type = $_FILES['men_power']['type'];
        $men_power_size = $_FILES['men_power']['size'];
        $men_power_tem = $_FILES['men_power']['tmp_name'];
        $men_power_store ="storage/step_3/men_power/".$men_power;
        move_uploaded_file($men_power_tem,$men_power_store);

        $mofa = $_FILES['mofa']['name'];
        $mofa_type = $_FILES['mofa']['type'];
        $mofa_size = $_FILES['mofa']['size'];
        $mofa_tem = $_FILES['mofa']['tmp_name'];
        $mofa_store ="storage/step_3/mofa/".$mofa;
        move_uploaded_file($mofa_tem,$mofa_store);

        $ticket = $_FILES['ticket']['name'];
        $ticket_type = $_FILES['ticket']['type'];
        $ticket_size = $_FILES['ticket']['size'];
        $ticket_tem = $_FILES['ticket']['tmp_name'];
        $ticket_store ="storage/step_3/ticket/".$ticket;
        move_uploaded_file($ticket_tem,$ticket_store);
        
        $mukim = $_FILES['mukim']['name'];
        $mukim_type = $_FILES['mukim']['type'];
        $mukim_size = $_FILES['mukim']['size'];
        $mukim_tem = $_FILES['mukim']['tmp_name'];
        $mukim_store ="storage/step_3/mukim/".$mukim;
        move_uploaded_file($mukim_tem,$mukim_store);

        $query = "INSERT INTO client_doc_step_3(client_name,date,men_power,mofa,ticket,mukim) VALUES('$client_name','$date','$men_power','$mofa','$ticket','$mukim')";

        if(mysqli_query($this->conn, $query))
        {
            $msg = "Client Document Step-3 Updated .....!";
            return $msg;
        }
        else
        {
            $msg = "Client Document Step-3 Not Insert.....!";
            return $msg;
        }
    }


    function add_client_transation($data)
    {
        $client_name=$data['client_name'];
        $date=$data['date'];
        $amount=$data['amount'];
        $remark=$data['remark'];
        $way_amount=$data['way_amount'];
        $invoice=$data['invoice'];
      

        $query = "INSERT INTO client_transation(client_name,date,amount,remark,way_amount,invoice) VALUE('$client_name','$date','$amount','$remark','$way_amount','$invoice')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = " Client Transation Updated .....!";
                return $msg;
            }
            else
            {
                $msg = "Client Transation Not Insert.....!";
                return $msg;
            }
    }
    function add_agent_transation_graph($data)
    {
        
        $month=$data['month'];
        $amount=$data['amount'];

        $query = "INSERT INTO agent_transation_graph (month,amount) VALUE ('$month','$amount')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = " Transation Graph Inserted.....!";
                return $msg;
            }
            else
            {
                $msg = "Transation Graph Not Added.....!";
                return $msg;
            }
    }
    
    function add_client_transa_br($data)
    {
        
        $month=$data['month'];
        $amount=$data['amount'];

        $query = "INSERT INTO client_transa_br (month,amount) VALUE ('$month','$amount')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = " Transation Graph Inserted.....!";
                return $msg;
            }
            else
            {
                $msg = "Transation Graph Not Added......!";
                return $msg;
            }
    }

    function add_bill($data)
    {
        
        $client_name=$data['client_name'];
        $date=$data['date'];
        $selection=$data['selection'];
        $amount=$data['amount'];
        $passport_number=$data['passport_number'];
         $contact_number=$data['contact_number'];


        $query = "INSERT INTO bill (client_name,date,selection,amount,passport_number,contact_number) VALUE ('$client_name','$date','$selection','$amount','$passport_number','$contact_number')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = " Client Bill Updated....!";
                return $msg;
            }
            else
            {
                $msg = " Client Bill Not Updated ....!";
                return $msg;
            }
    }
    function add_flight($data)
    {
    
        $date=$data['date'];
        $flight_number=$data['flight_number'];

        $query = "INSERT INTO flight (date,flight_number) VALUE ('$date','$flight_number')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = "  Flight Updated....!";
                return $msg;
            }
            else
            {
                $msg = " Flight Not Updated ....!";
                return $msg;
            }
    }
    function add_invoice($data)
    {
    
        $invoice_date=$data['invoice_date'];
        $issue_date=$data['issue_date'];
        $passport_number=$data['passport_number'];
        $client_name=$data['client_name'];
        $payment=$data['payment'];
        $amount=$data['amount'];
        
        $type=$data['type'];

        $query = "INSERT INTO invoice (type,invoice_date,issue_date,passport_number,client_name,payment,amount) VALUE ('$type','$invoice_date','$issue_date','$passport_number','$client_name','$payment','$amount')";

        if(mysqli_query($this->conn, $query))
            {
                $msg = "  Bill Updated....!";
                return $msg;
            }
            else
            {
                $msg = " Bill Not Updated ....!";
                return $msg;
            }
    }
  
}
?>