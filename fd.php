<html>
    <head>
        <title>Fashion District 1</title>
        <link rel="stylesheet" type="text/css" href="fd1.css">
        <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        
    </head>
    <body background="https://images.unsplash.com/photo-1528578577235-b963df6db908?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" id="bd">
        
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
                            <h3 style="text-shadow:0px 4px 3px rgb(163, 91, 170);color:rgb(18, 19, 17);padding-left:300px;padding-bottom:30px;"><b>*You can have anything you want in life if you dress for it*</b></h3>
                            
                                <div class="container">
                                   
                                    <?php
		                                    $form="<form action='pooja.php' method='post'>
                                                                        
                                                <table>
                                                    <tr>
                                                    <td align='left'><b>Name</b></td>
                                                    <td align='left' style='padding:2px;'><b><input type='text' name='name' /></b></td>
                                                    </tr>
                                                    <tr>
                                                    <td align='left'><b>Mobile Number</b></td>
                                                    <td align='left' style='padding:2px'><b><input type='text' name='mobile_no'></b></td>
                                                    </tr>
                                                    <tr>
                                                    <td align='left'><b>Customer Id</b></td>
                                                    <td align='left' style='padding:2px'><b><input type='text' name='cus_id'></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'><b>Material Type</b></td>
                                                        <td align='left' style='padding:2px'>
                                                            <select name='material_type'>
                                                                <option>(please select a state)</option>
                                                                <option value='cotton'>Cotton</option>
                                                                <option value='sateen'>Sateen</option>
                                                                <option value='polyster'>Polyster</option>
                                                                <option value='silk'>Silk</option>
                                                                <option value='nylon'>Nylon</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'><b>Ordering Date</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='date' name='order_date'></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'><b>Expected date of delivery</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='date' name='delivery_date'></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'><b>Total Cost</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='number' name='total_cost'></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'><b>Advance Amount</b></td>
                                                        <td align='left' style='padding:2px'><b><input type='number' name='advance_amount'></b></td>
                                                    </tr>                                             
                                                    <tr>
                                                        <td align='left'><b>Style</b></td>
                                                        <td align='left' style='padding:2px'>
                                                            <select name='style' style='text-align:center'>
                                                                <option>(please select a state)</option>
                                                                <option value='Patiala Pants'>Patiala Pant</option>
                                                                <option value='Gathering Pant'>Gathering Pant</option>
                                                                <option value='Normal Pant'>Normal Pant</option>
                                                                <option value='Long Top'>Long Top</option>
                                                                <option value='Short Top'>Short Top</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'><b>Neck Designs</b></td>
                                                        <td align='left' style='padding:2px'>
                                                                <select name='neck_design'>
                                                                    <option>(please select a state)</option>
                                                                    <option value='Collar Neck'>Collar Neck</option>
                                                                    <option value='Round Neck'>Round Neck</option>
                                                                    <option value='Boat Neck'>Boat Neck</option>
                                                                    <option value='V Neck'>V Neck</option>
                                                                </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td></td>
                                                            <td><input type='submit' name='loginbtn' value='NEXT' class='button' style='background-color:orange;font-size:20px;' /></td>
                                                    </tr>
                                                </table>
                                            </form>";
                                
                                           
                                            if(isset($_POST['loginbtn']))
                                            {
                                                include "pooja.php";
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