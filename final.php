<html>
<head>
<style>
    #heading{
        padding-left:100px;
    }
    html,body {
    padding-bottom: 20px;
}
</style>    
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
function savedetails() {
  location.replace("Fashion District.html")
}
</script>
</head>
<body>
    <br><h1 id="heading">CUSTOMER DETAILS</h1>
    <div id="rr">
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
                  
            $sql="SELECT name,mobile_no,cus_id,material_type,order_date,delivery_date,total_cost,advance_amount,style,neck_design FROM `user_details` WHERE cus_id=(SELECT MAX(cus_id) FROM `user_details`)";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            { 
                while($row=$result->fetch_assoc())
                {
                    echo "<pre><font color='#cc0052'><font size='5px'>          NAME           : ".$row["name"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          MOBILE NO      : ".$row["mobile_no"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          CUSTOMER ID    : ".$row["cus_id"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          MATERIAL TYPE  : ".$row["material_type"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          ORDER DATE     : ".$row["order_date"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          DELIVERY DATE  : ".$row["delivery_date"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          TOTAL COST     : ".$row["total_cost"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          ADVANCE AMOUNT : ".$row["advance_amount"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          STYLE          : ".$row["style"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          NECK DESIGN    : ".$row["neck_design"]."</pre>"; 
                   
                }
               
            }
            else{
                
            }
            $conn->close();
    ?>
        
</div>
<h3 id="heading" style="color:black;">MEASUREMENT DETAILS</h3>
    <div  style="line-height:10px;">
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
                  
            $sql="SELECT cus_id,full_length,slit,shoulder,chest,low_chest,hip,stomach,sheet,hand_full_length,hand_arms,sleeve,bottom_full_length,bottom FROM `measurement_detail` WHERE cus_id=(SELECT MAX(cus_id) FROM `user_details`)";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            { 
                while($row=$result->fetch_assoc())
                {
                    echo "<pre><font color='#cc0052'><font size='5px'>          CUSTOMER ID        : ".$row["cus_id"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Full Length        : ".$row["full_length"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Slit               : ".$row["slit"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Shoulder           : ".$row["shoulder"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Chest              : ".$row["chest"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Low Chest          : ".$row["low_chest"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Hip                : ".$row["hip"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Stomach            : ".$row["stomach"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Sheet              : ".$row["sheet"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Hand Full Length   : ".$row["hand_full_length"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Hand Arms          : ".$row["hand_arms"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Sleeve             : ".$row["sleeve"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Bottom Full Length : ".$row["bottom_full_length"]."</pre>"; 
                    echo "<pre><font color='#cc0052'><font size='5px'>          Bottom             : ".$row["bottom"]."</pre>"; 
                   
                }
               
            }
            else{
                
            }
            $conn->close();
    ?>
<div style="padding-left:500px;">
    <button style="font-size: 18px;display: inline-block;background-color: #bfff00; border: 2px solid #4CAF50;" onclick="printDiv('rr');savedetails();">PRINT</button>
    <button style="font-size: 18px;display: inline-block;background-color: #bfff00; border: 2px solid #4CAF50;" onclick="savedetails();">SAVE</button><br><br>
</div>       

</div>
</body>
</html>