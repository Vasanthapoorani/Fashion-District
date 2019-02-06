
<html lang="en">
	<head>
        <meta charset="utf-8">
		<title>MEMBERS LOGIN</title>
    <style type="text/css">
            
        #scrolly{
            width: 1500px;
            height: 728px;
            overflow: auto;
            overflow-y: hidden;
            margin: 0 auto;
            white-space: nowrap
        }

        img{
            width: 1500px;
            height: 800px;
            margin: 20px 10px;
            display: inline;
        }
            .floatleft{
                width:50%;float:left;
            }
            .floatright{
                width:50%;float:right;
            }
            .container{
                overflow:hidden;
            }
            table,th,tr,td{
                border:1px solid black;
                border-collapse:collapse;
            
            }
            body{
                overflow-x:scroll;
            }
            table{
               width:100%;
                margin-right:0px;  
            }
            
    </style>
	</head>
	<body>
		<div class="container"  id='scrolly'>
            <div class="floatleft">
                    <table>
                        <tr>
                            <th>name</th>
                            <th>cell_no</th>
                            <th>cus_id</th>
                            <th>material</th>
                            <th>order_date</th>
                            <th>delivery_date</th>
                            <th>total_cost</th>
                            <th>advance</th>
                            <th>style</th>
                            <th>design</th>
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
                                echo "<tr><td>".$row["name"]."</td><td>".$row["mobile_no"]."</td><td>".$row["cus_id"]."</td><td>".$row["material_type"]."</td><td>".$row["order_date"]."</td><td>".$row["delivery_date"]."</td><td>".$row["total_cost"]."</td><td>".$row["advance_amount"]."</td><td>".$row["style"]."</td><td>".$row["neck_design"]."</td></tr>";
                            }
                            echo "</table>";       
                        }
                        else{
                            
                        }
                        $conn->close();
            ?>
                    </table>
            </div>
            <div class="floatright">    
                    <table >
                        <tr>
                            <th>full_length</th>
                            <th>slit</th>
                            <th>shoulder</th>
                            <th>chest</th>
                            <th>low_chest</th>
                            <th>hip</th>
                            <th>stomach</th>
                            <th>sheet</th>
                            <th>hand.FL</th>
                            <th>hand_arms</th>
                            <th>sleeve</th>
                            <th>btm.FL</th>
                            <th>bottom</th>
                            <th>edit</th>
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
                                echo "<tr><td>".$row["full_length"]."</td><td>".$row["slit"]."</td><td>".$row["shoulder"]."</td><td>".$row["chest"]."</td><td>".$row["low_chest"]."</td><td>".$row["hip"]."</td><td>".$row["stomach"]."</td><td>".$row["sheet"]."</td><td>".$row["hand_full_length"]."</td><td>".$row["hand_arms"]."</td><td>".$row["sleeve"]."</td><td>".$row["bottom_full_length"]."</td><td>".$row["bottom"]."</td><td><a href='delete1.php?did=".$row['cus_id']."'>Delete</a></td></tr>";
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