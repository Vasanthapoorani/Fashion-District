<html>
	<head>
		<title>MEMBERS LOGIN</title>
        <style>
            .container{
                overflow:hidden;
            }
            table,th,tr,td{
                border:2px solid black;
                border-collapse:collapse;
                text-align:center;
            }
            table,tr,td
            {
                color:black;
            }
            th{
                color:black;
            }
            table{
                width:100%;
                margin-right:0px;
            }
            #bd{
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                background-position: center; 
                opacity: 1;
            filter: alpha(opacity=100);
            }
        </style>
	</head>
	<body id="bd" background="https://images.unsplash.com/photo-1493552832879-f61d5dce6c9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80";>
		<div class="container">
                <div>    
                    <table>
                        <tr>
                            <th>Cus_ID</th>
                            <th>Full_Length</th>
                            <th>Slit</th>
                            <th>Shoulder</th>
                            <th>Chest</th>
                            <th>Low_Chest</th>
                            <th>Hip</th>
                            <th>Stomach</th>
                            <th>Sheet</th>
                            <th>Hand_Full_Length</th>
                            <th>Hand_Arms</th>
                            <th>Sleeve</th>
                            <th>Bottom_Full_Length</th>
                            <th>Bottom</th>
                            <th>Edit</th>
                        </tr>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "fashion district";
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                    
                        $sql1="SELECT cus_id,full_length,slit,shoulder,chest,low_chest,hip,stomach,sheet,hand_full_length,hand_arms,sleeve,bottom_full_length,bottom from measurement_detail";
                        $result=$conn->query($sql1);
                        if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            {
                                echo "<tr><td>".$row["cus_id"]."</td><td>".$row["full_length"]."</td><td>".$row["slit"]."</td><td>".$row["shoulder"]."</td><td>".$row["chest"]."</td><td>".$row["low_chest"]."</td><td>".$row["hip"]."</td><td>".$row["stomach"]."</td><td>".$row["sheet"]."</td><td>".$row["hand_full_length"]."</td><td>".$row["hand_arms"]."</td><td>".$row["sleeve"]."</td><td>".$row["bottom_full_length"]."</td><td>".$row["bottom"]."</td><td><a href='delete1.php?did=".$row['cus_id']."' style='color:blue' class='spn_med_yellow_rbc'>Delete</a></td></tr>";
                            }
                            echo "</table>";       
                        }
                        else{
                           
                        }
                        $conn->close();
                        ?>
                    </table>
            </div>
        </div>	
    </body>
</html>