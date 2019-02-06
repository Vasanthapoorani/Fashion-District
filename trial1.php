<html>
	<head>
		<title>MEMBERS LOGIN</title>
        <style>
            .floatleft{
                width:100%;float:left;
            }
            .container{
                overflow:hidden;
            }
            table,th,tr,td{
                border:2px solid cyan;
                border-collapse:collapse;
                text-align:center;
                color:white;
            
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
	<body id="bd" background="https://images.unsplash.com/photo-1497997092403-f091fcf5b6c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80";>
		<div class="container">
            <div class="floatleft">
                    <table>
                        <tr>
                            <th>NAME</th>
                            <th>CELL_NO</th>
                            <th>CUS_ID</th>
                            <th>MATERIAL</th>
                            <th>ORDER_DATE</th>
                            <th>DELIVERY_DATE</th>
                            <th>TOTAL_COST</th>
                            <th>ADVANCE</th>
                            <th>STYLE</th>
                            <th>DESIGN</th>
                            <th>EDIT</th>
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
                    
                        $sql="SELECT name,mobile_no,cus_id,material_type,order_date,delivery_date,total_cost,advance_amount,style,neck_design from user_details";
                        $result=$conn->query($sql);
                        if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            {
                                echo "<tr><td>".$row["name"]."</td><td>".$row["mobile_no"]."</td><td>".$row["cus_id"]."</td><td>".$row["material_type"]."</td><td>".$row["order_date"]."</td><td>".$row["delivery_date"]."</td><td>".$row["total_cost"]."</td><td>".$row["advance_amount"]."</td><td>".$row["style"]."</td><td>".$row["neck_design"]."</td><td><a href='delete1.php?did=".$row['cus_id']."' style='color:#f9c539' class='spn_med_yellow_rbc'>Delete</a></td></tr>";
                            }
                            echo "</table>";       
                        }
                        else{
                           
                        }
                        $conn->close();
                        ?>
            </div>
        </div>	
    </body>
</html>