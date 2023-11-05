<?php
    session_start();
  
    $servername = "localhost";
    $username = "root";
    $pword = "";
    $dbname="kkvib";

    $conn = new mysqli($servername, $username, $pword, $dbname);

    if ($conn->connect_error) 
    {
        echo "<script>alert('Connection failed');</script>";
    }
    $developer_records = $_SESSION['records'];
    if(isset($_POST["export_data"])) 
    {
        $filename = "data_export".date('Ymd') . ".xls";			
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");	
        $show_coloumn = false;
        if(!empty($developer_records)) 
        {
            foreach($developer_records as $record) 
            {
                if(!$show_coloumn) 
                {
                    echo implode("\t", array_keys($record)) . "\n";
                    $show_coloumn = true;
                }
                echo implode("\t", array_values($record)) . "\n";
            }
        }
        exit;  
    }
?>