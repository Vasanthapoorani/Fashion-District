<html>
    <head>
        <title>Fashion District 2</title>
        <link rel="stylesheet" type="text/css" href="fd2.css">
        <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        
    </head>
    <body background="https://images.unsplash.com/photo-1546314065-565eec68f489?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" id="bd">
        
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <nav class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                    </button>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="Fashion District.html"  style="color:rgb(7, 150, 14);font-size:20px">HOME</a></li>
                        <li><a href="trial1.php" style="color:rgb(243, 164, 17);font-size:20px">CUSTOMER DETAILS</a></li>
                        <li><a href="trial.php" style="color:rgb(243, 164, 17);font-size:20px">MEASUREMENT DETAILS</a></li>
                        <li><a href="address.html" style="color:rgb(243, 164, 17);font-size:20px">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
        </nav>
        <div class="container1">
            <div class="row">
                <div class="col-lg-12" id="thick">
                            
                                <div class="container">
                                   
                                    <?php
                                            $form="<form action='pooja1.php' method='post'>
                                            <table>   
                                                        <tr>
                                                        <td align='left'><b>CUSTOMER ID</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='text' name='cus_id'></b></td>
                                                        </tr>               
                                                        <tr>
                                                        <td align='left'><b>Top Full Length</b></td>
                                                        <td align='left' style='padding:2px;'><b><input type='number' name='full_length' /></b></td>
                                                        </tr>
                                                        <tr>
                                                        <td align='left'><b>Slit</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='number' name='slit'></b></td>
                                                        </tr>
                                                        <tr>
                                                        <td align='left'><b>Shoulder</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='number' name='shoulder'></b></td>
                                                        </tr>
                                                        <tr>
                                                                <td align='left'><b>Chest</b></td>
                                                                <td align='left' style='padding:2px;'><b><input type='number' name='chest' /></b></td>
                                                        </tr>
                                                        <tr>
                                                                <td align='left'><b>Low Chest</b></td>
                                                                <td align='left' style='padding:2px'><b><input type='number' name='low_chest'></b></td>
                                                        </tr>
                                                        <tr>
                                                                <td align='left'><b>Hip</b></td>
                                                                <td align='left' style='padding:2px'><b><input type='number' name='hip'></b></td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <td align='left'><b>Stomach</b></td>
                                                            <td align='left' style='padding:2px'><b><input type='number' name='stomach'></b></td>
                                                        </tr>
                                                        <tr>
                                                            <td align='left'><b>Sheet</b></td>
                                                            <td align='left' style='padding:2px'><b><input type='number' name='sheet'></b></td>
                                                        </tr>
                                                        <tr>
                                                            <td align='left'><b>Hand Full Length</b></td>
                                                            <td align='left' style='padding:2px'><b><input type='number' name='hand_full_length'></b></td>
                                                        </tr>
                                                        <tr>
                                                            <td align='left'><b>Hand Arms</b></td>
                                                            <td align='left' style='padding:2px'><b><input type='number' name='hand_arms'></b></td>
                                                        </tr>                                             
                                                        <tr>
                                                                <td align='left'><b>Sleeve</b></td>
                                                                <td align='left' style='padding:2px'><b><input type='number' name='sleeve'></b></td>
                                                        </tr>
                                                        <tr>
                                                                <td align='left'><b>Bottom Full Length</b></td>
                                                                <td align='left' style='padding:2px'><b><input type='number' name='bottom_full_length'></b></td>
                                                        </tr>
                                                        <tr>
                                                                <td align='left'><b>Bottom</b></td>
                                                                <td align='left' style='padding:2px'><b><input type='number' name='bottom'></b></td>
                                                        </tr>           
                                                        <tr>
                                                            <td></td>
                                                            <td><input type='submit' name='submit' value='Submit' class='button' style='background-color:orange;font-size:20px;padding-bottom:30px;' /></td>
                                                        </tr>                                                                                  
                                                    </table>
                                                
                                     
                                            </form>";
                                    ?>
                                            
                                    <?php
                                           
                                                if(isset($_POST['sumbit']))
                                                    {                                         
                                                        include "pooja1.php";
                                                    }                                                             
                                                else
                                                    echo"$form";	
                                    ?>
                                </div>
                </div>
            </div>    
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>