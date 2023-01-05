<?php
ob_start();

$db = mysqli_connect('localhost', 'root', '', 'user_management');

if($db){
    // echo 'Database is connected';
}else{
    echo 'Database connection error';
}

?>

<!-- insert code -->
<?php
    if(isset($_POST['saveinfo'])){
        $username   = $_POST['username'];
        $gname      = $_POST['gname'];
        $sname      = $_POST['sname'];
        $email      = $_POST['email'];
        $pass       = $_POST['pass'];

        $upass = sha1($pass);
        $sql2 = "INSERT INTO users(name,gname,sname,pass,email) VALUE ('$username', '$gname', '$sname', '$upass', '$email')";
        $res2 = mysqli_query($db,$sql2);
        
    }
?>

<?php
if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $sql3 = "DELETE FROM users WHERE id='$del_id'";
    $res3 = mysqli_query($db,$sql3);

    if($res3){
        header('location: index.php');
    }else{
        echo 'Delete Error!';
    }
}

?>



<!-- Update Code -->

<?php
    if(isset($_POST['updateinfo'])){
        $name   = $_POST['name'];
        $gname   = $_POST['gname'];
        $sname   = $_POST['sname'];
        $role   = $_POST['role'];
        $status   = $_POST['status'];
        $email   = $_POST['email'];
        $phpne   = $_POST['phpne'];
        $address   = $_POST['address'];
        $id   = $_POST['editid'];

        $sql5 = "UPDATE users SET name='$name', gname='$gname', sname='$sname', email='$email', phone='$phpne', address='$address', role='$role', status='$status' WHERE id='$id'";
        $res5 = mysqli_query($db,$sql5);

        if($res5){
            header('location: index.php');
        }else{
            echo 'Update Error';
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- FontAwsome CDN link Hear -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Css File link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <title>Php first project</title>



  </head>
  <body>
    

  <div class="mt-400"></div>
    <header>
        <div class="container">
            <div class="header">
                <div class="school-title text-center">
                    <h1><span>About</span> Something</h1>
                </div>
                <div class="row pt-2 s1-icon">
                    <div class="col-md-3"><i class="fa-solid fa-envelope"></i> anything@something.com</div>
                    <div class="col-md-3"><i class="fa-solid fa-location-dot"></i> Bakshimul, Burichang, Cumilla</div>
                    <div class="col-md-3"><i class="fa-solid fa-phone"></i> +880 1784801663</div>
                    <div class="col-md-3 text-end s2-icon"><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-linkedin-in"></i><i class="fa-brands fa-instagram"></i></div>
                </div>
                <span class="header-line"></span>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Booking</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="login" id="login"><span href="">LogIn</span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="singup text-end" id="singin"><span href="">SingUp</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <section class="login-box" id="login-box">

        <div class="login-card">
            <div class="login-singup-btn text-end">
                <ul>
                    <li class="ms-auto"><i class="fa-solid fa-xmark me-3" onclick="document.getElementById('login-box').style.display='none'"></i></li>
                    <li id="btn-login"><span class="">LogIn</span></li>
                    <li id="btn-singup"><span class="">SingUp</span></li>
                </ul>
            </div>
            <form action="">
                <div class="login-form" id="login-f">
                    <h6>Email or Phone</h6>
                    <input class="mb-4" type="email" placeholder="Enter Your Email or Phone Number" required>
                    <h6>Pnone or Email</h6>
                    <input type="password" placeholder="Enter Your Password" required>
                    <p class="mb-4 mt-2"><a href="#">forgot password?</a></p>
                    <div class="login-c mb-5">
                        <button type="button">Login</button>
                    </div>
                    <P class="not-member">Not a Member? <span id="not-member-singup" href="">SingUp Now</span></P>
                </div>
            </form>

            <form action="" method="POST">
                <div class="singup-f" id="singup-f">
                    <div class="row">
                        <div class="row">
                            <div>
                                <h6>Full Name</h6>
                            <input class="mb-3" type="text" name="username" placeholder="Enter Your Full Name">
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Given Name</h6>
                                <input type="text" name="gname" placeholder="Enter Your First Name" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Surname</h6>
                                <input class="mb-3" name="sname" type="text" placeholder="Enter Your Last Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <h6>Email</h6>
                            <input class="mb-3" type="email" name="email" placeholder="Enter Your Email Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Password</h6>
                                <input type="password" name="pass" placeholder="Create a New Password" required>
                            </div>
                            <div class="col-md-6">
                                <h6>Conform Password</h6>
                                <input class="mb-3" name="repass" type="password" placeholder="Re-type Your Password" required>
                            </div>
                        </div>
                        <div class="login-c mt-4">
                        <button type="submit" name="saveinfo">Submit</button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
</section>





<?php
            
            $sql1 = 'SELECT * FROM users';
            $res1 = mysqli_query($db,$sql1);
            
            while($row = mysqli_fetch_assoc($res1)){
                    $id       = $row['ID'];
                    $name     = $row['name'];
                    $gname    = $row['gname'];
                    $sname    = $row['sname'];
                    $pass     = $row['pass'];
                    $email    = $row['email'];
                    $phone    = $row['phone'];
                    $address  = $row['address'];
                    $role     = $row['role'];
                    $status   = $row['status'];

            ?>
                <section class="user mb-2">
                        <div class="container">
                            <div class="user-information">
                                <div class="user-info">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href=""><img src="img/avatar-icon.png" alt=""></a>
                                        </div>
                                        <div class="col-md-4 user-name">
                                            <h3><?php echo $gname.' '.$sname; ?></h3>
                                        </div>
                                        <div class="col-md-3 user-email">
                                            <h5><?php echo $email; ?></h5>
                                        </div>
                                        <div class="col-md-4 user-profile text-end pt-5">
                                            <a class="btn-success" style="padding: 12px 30px; cursor:pointer;" href="index.php?id=<?php echo $id;?>">Delete <i class="fa-regular fa-trash-can"></i></a>
                                            <a class="btn-success" style="padding: 12px 30px; cursor:pointer;" href="index.php?edit_id=<?php echo $id;?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                            <!-- <button id="profile" onclick="show()">Profile <i class="fa-solid fa-chevron-down" id="up"></i></button> -->
                                        </div>
                                    </div>
                                </div>
                                                    


                                <!-- edit information -->

                            </div>
                        </div>
                    </section>
            
            <?php
            }
            
            ?>


<section>
                <div class="container">
                    <!-- edit information -->
                    <?php
                                            if(isset($_GET['edit_id'])){

                                                $editid = $_GET['edit_id'];

                                                $sql4 = "SELECT * FROM users WHERE id='$editid'";
                                                $res4 = mysqli_query($db,$sql4);
                                                $row = mysqli_fetch_assoc($res4);
                                                    $id       = $row['ID'];
                                                    $name     = $row['name'];
                                                    $gname    = $row['gname'];
                                                    $sname    = $row['sname'];
                                                    $pass     = $row['pass'];
                                                    $email    = $row['email'];
                                                    $phone    = $row['phone'];
                                                    $address  = $row['address'];
                                                    $role     = $row['role'];
                                                    $status   = $row['status'];

                                                ?>
                                                    <form action="" method="POST">
                                                        <div class="user-info-box mb-3" id="user-info-box">
                                                            <div class="row">
                                                                <div class="col-md-3 user-photo text-center">
                                                                    <img src="img/avatar-icon.png" alt="">
                                                                    <h3><?php echo $gname.' '.$sname; ?></h3>
                                                                    <p><?php echo $email; ?></p>
                                                                </div>
                                                                <div class="col-md-8 user-info-table">
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-7"></div>
                                                                        <div class="col-md-3 user-profile text-end edit">

                                                                            <?php
                                                                                if($role == 0){
                                                                                    echo '<span class="badge bg-danger" style="font-size:16px;">Subscriber</span>';
                                                                                }
                                                                                if($role == 1){
                                                                                    echo '<span class="badge bg-info" style="font-size:16px;">Editor</span>';
                                                                                }
                                                                                if($role == 2){
                                                                                    echo '<span class="badge bg-success" style="font-size:16px;">Admin</span>';
                                                                                }
                                                                            ?>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-2 user-profile text-end edit">

                                                                            <?php
                                                                                if($status == 0){
                                                                                    echo '<span class="badge bg-danger" style="font-size:16px;">Deactive</span>';
                                                                                }
                                                                                if($status == 1){
                                                                                    echo '<span class="badge bg-success" style="font-size:16px;">Active</span>';
                                                                                }
                                                                            ?>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="row text-center "><h2>User All data/information</h2></div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6 name">
                                                                            <h5>Full Name</h5>
                                                                            <input type="text" name="name" value="<?php echo $gname.' '.$sname; ?>">
                                                                        </div>
                                                                        <div class="col-md-3 name">
                                                                            <h5 for="">Set your Role</h5>
                                                                            <select name="role" id="" style="background:transparent; border: none; width:100%; border-bottom:1px solid green; padding-bottom:5px;">
                                                                                <option value="0" <?php if($role == 0)echo 'selected';?>>Subscriber</option>
                                                                                <option value="1" <?php if($role == 1)echo 'selected';?>>Editor</option>
                                                                                <option value="2" <?php if($role == 2)echo 'selected';?>>Admin</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3 name">
                                                                            <h5 for="">Set your Status</h5>
                                                                            <select name="status" id="" style="background:transparent; border: none; width:100%; border-bottom:1px solid green; padding-bottom:5px;">
                                                                                <option value="0" <?php if($status == 0)echo 'selected';?>>Deactive</option>
                                                                                <option value="1" <?php if($status == 1)echo 'selected';?>>Active</option>
                                                                                <input type="hidden" value="<?php echo $editid;?>" name="editid">
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6 name">
                                                                            <h5>Given Name</h5>
                                                                            <input type="text" name="gname" value="<?php echo $gname; ?>">
                                                                        </div>
                                                                        <div class="col-md-6 name">
                                                                            <h5>Surname</h5>
                                                                            <input type="text" name="sname" value="<?php echo $sname; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6 name">
                                                                            <h5>Email</h5>
                                                                            <input type="text" name="email" value="<?php echo $email; ?>">
                                                                        </div>
                                                                        <div class="col-md-6 name">
                                                                            <h5>Phone Number</h5>
                                                                            <input type="text" name="phpne" value="<?php echo $phone; ?>" placeholder="Enter your phone number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3 name">
                                                                            <div>
                                                                                <h5>Address</h5>
                                                                                <input type="text" name="address" value="<?php echo $address; ?>" placeholder="Enter your Address">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-9"></div>
                                                                        <div class="col-md-3 user-profile">
                                                                            <button type="submit" name="updateinfo">Save Change</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                <?php
                                            }
                                        ?>
                </div>
            </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/main.js"></script>


    <?php ob_end_flush(); ?>
  </body>
</html>