<?php
    include_once "Connect.php";
        
        $querys = "SELECT * FROM post ORDER BY P_id";
        $query_run = mysqli_query($con,$querys);
        if (mysqli_num_rows ($query_run)> 0) {
            while ($result = $query_run -> fetch_assoc()) {
               $name = $result['Name'];
               $Remark = $result['S_Remark'];
               $Urgent=$result['urgency'];
               $Blood_G=$result['Blood_G'];
               $Phone=$result['phone'];
               $City=$result['city'];
            }}
         else{
            echo "No resutls";
         }
         

        ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donor</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/dfe881f618.js"></script>


</head>

<body>

    <div>
        <nav class="navbar navbar-light navbar-expand-md bg-dark navigation-clean-button">
            <div class="container-fluid"><a class="navbar-brand text-white" href="index.php"><i class="fas fa-ambulance"></i>&nbsp;Blood Doner</a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">

                    <div id="searchbox">
                     <form id="spage" action="search.php" method="POST">
                     <input name="name" type="text" class="searchinput" autocomplete="off" placeholder="Name or Blood group"/>
                    
                     <input name="search" type="submit" class="searchbutton" value="Search"/>
                    </form>
                    </div>
                    

                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"
                                style="color:#ffffff;"><i class="fa fa-home"></i>&nbsp;Home</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="donerlist.php"
                                style="color:#ffffff;"><i class="far fa-user-circle"></i>&nbsp;Doner</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php"
                                style="color:#ffffff;"><i class="fas fa-id-badge"></i>&nbsp;Registration</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link text-monospace" href="login.php"
                                style="color:#ffffff;"><i class="fas fa-user-shield"></i>&nbsp;Login</a></li>
                   
                        <li class= "nav=item" role="presentation"><a class="nav-link" href="profile.php" style="color:#ffffff;"><i class="far fa-user"></i>&nbsp;Profile</a></li>
                        
                   </ul>
                </div>
            </div>
        </nav>
    </div>
 <div>
       
<br>
<div class="container">
                <div id="doner-info">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center text-danger text-uppercase">Blood Request</h3><br>
                            <form action="filter2.php" method="POST" >
                            <div class="input-group mb-3">
                            <select id="inputState" class="form-control" name="city">
                              <option selected>Select area</option>
                              <option>Dhaka</option>
                              <option>Khulna</option>
                              <option>Sylhet</option>
                              <option>Chittagong</option>
                              <option>Rajshahi</option>
                              <option>Barisal</option>
                              <option>Rangpur</option>
                            </select>
                             </div>
                             <div class="input-group mb-3">
                            <select id="inputState" class="form-control" name="Blood_Group" >
                              <option selected>Select Blood Group</option>
                              <option>A+</option>
                              <option>A-</option>
                              <option>B+</option>
                              <option>B-</option>
                              <option>O+</option>
                              <option>O-</option>
                              <option>AB+</option>
                              <option>AB-</option>
                            </select>
                             </div>
                             
                            <button type="submit" name="filter" class="btn btn-danger" value="filter">Submit</button>
                            </form>
                            
                        </div>
                       
                    </div>
                    
                </div>
                
            </div>

    <br>
<br>  
 <?php   
     $sl=1;
    foreach ($query_run as $value){?>

    <div class="container">
        <div class="row" >
            <div class="col-md-10">
                <div class="card bg-light" style="margin-top:10px; width:800px;">
                    <div class="card-body" style="margin-left:10px;"><img class="rounded-circle" src="img/avater.png" style="width:100px;height:100px;">
                    <h5> Name : <?php echo $value['Name']; ?> </h5>
                    <h5> Phone : <?php echo $value['phone']; ?> </h5>
                    <h5> Blood Group : <?php echo $value['Blood_G']; ?> </h5>
                    <h5> City : <?php echo $value['city']; ?> </h5>
                    <h5> Urgency : <?php echo $value['urgency']; ?> </h5>
                    <h5> Description : <?php echo $value['S_Remark']; ?> </h5>
                
                    </div>
                </div>
            </div>
        </div>
    </div>   
 <?php 
 $sl++; }; ?>
  
</div>



                            
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <h5 class="text-uppercase text-center">Blood Doner</h5>
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="http://prantoamt.pythonanywhere.com"> Blood Doner.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->








    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>


</body>

</html>