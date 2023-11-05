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
    $year = $_GET['year'];
    $month = $_GET['month'];
    $sql_query = "SELECT * FROM bills WHERE Month = '$month' AND Year = '$year'";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
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
			        <th>Particulars</th>
			        <th>Total Wages</th>	
			        <th>W/F</th>
			        <th>W/F Adv</th>
                    <th>Adv. Rec</th>
                    <th>Onam Advance</th>
                    <th>Total Rec</th>
                    <th>Net Wages</th>
		        </tr>
		    <tbody>
			<?php foreach($developer_records as $developer) 
            { 
            ?>
			    <tr class="data">
			        <td><?php echo $developer ['Sl No']; ?></td>
			        <td><?php echo $developer ['Particulars']; ?></td>
			        <td><?php echo $developer ['Total Wages']; ?></td>   
			        <td><?php echo $developer ['W/F']; ?></td>
			        <td><?php echo $developer ['W/F adv']; ?></td>
                    <td><?php echo $developer ['Adv Rec']; ?></td>
                    <td><?php echo $developer ['Onam Adv']; ?></td>
                    <td><?php echo $developer ['Total Rec']; ?></td>
                    <td><?php echo $developer ['Net Wages']; ?></td>   
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