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
    $report = $_GET['report'];
    $type = $_GET['type'];
    $sql_query = "SELECT * FROM $report ORDER BY $type";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    $num = mysqli_num_rows($resultset);
    $developer_records = array();
    while( $rows = mysqli_fetch_assoc($resultset) ) 
    {
        $developer_records[] = $rows;
    }
    $_SESSION['records'] = $developer_records;
?>
<html>
    <head>
        <title>Export Data</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <a href="../Home.php"><img src="../assets/back.png"></a>
        <center>
        <div class="container">
            <br>	
	        <h2>Export Data to Excel</h2>
	        <div class="well-sm col-sm-12">
		        <div class="btn-group pull-right">	
			        <form action="http://localhost/MainProject/PHP/index2.php" method="post">					
				        <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">EXPORT TO EXCEL</button>
			        </form>
		        </div>
	        </div>				  
	        <table id="" class="table table-striped table-bordered">
		        <tr class="heading">
			        <th>Sl No</th>
			        <th>Name</th>
                    <th>Account Number</th>
                    <th>IFSC</th>
                    <th>Bank</th>
		        </tr>
		    <tbody>
			<?php foreach($developer_records as $developer) 
            { 
            ?>
			    <tr class="data">
			        <td><?php echo $developer ['Sl No']; ?></td>
			        <td><?php echo $developer ['Name']; ?></td>  
                    <td><?php echo $developer ['Account Number']; ?></td> 
                    <td><?php echo $developer ['IFSC']; ?></td> 
                    <td><?php echo $developer ['Bank']; ?></td> 
			    </tr>
			<?php 
            } 
            ?>
		    </tbody>
            </table>
        </div>
        </center>
    </body>
</html>