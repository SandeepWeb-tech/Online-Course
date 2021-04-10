<?php
include "connection.php";

$select_query = "SELECT * FROM subject";
$select_query_result = mysqli_query($conn , $select_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
    <title>Online Courses</title>
</head>
<body>
    <div class="container">
        <div class="head">
            <h1>Online Courses</h1>
        </div>
        

        <div class="section">
            <div class="navbar">
                <ul>
                    <li onclick="getHome()"> Home</li>
                    <li onclick="getAdd()">Add Courses</li>
                    <li onclick="getView()">View Courses</li>
                    <li onclick="getContact()">Contact</li>
                    <li onclick="getAbout()">About Us</li>
                </ul>
            </div>

            <div class="Articles">
                <div class="jumbotron" id="home">
                    <center>
                        <h1>Day With Surya</h1>
                        <h3>Online Courses</h3>
                        <p>We Provide Online Courses That Help You <br>To Boost Your Knowledge</p>
                        <button class="btn btn-warning">Explore</button>
                    </center>
                </div>
                <div id="add-course" class="jumbotron">

                    <center>
                    <h1>Add Courses</h1>
                    <hr>
                        <form method="POST" action="login.php">
                            <input type="text" name="id" id="course-id" placeholder="Course Id" autocomplete="off" required> <br>
                            <input type="text" name="name" id="course-name" placeholder="Course Name" autocomplete="off" required><br>
                            <textarea id="description" name="desc" placeholder="Description"  autocomplete="off" required></textarea><br>
                            <button class="btn  btn-primary" onclick = "add();">Add Course</button>
                        </form>
                    </center>
                </div>
                <script>
                    function add(){
                       alert("Are you sure want to Add Course ?")
                    }
                    </script>
                   

                <div id="view-courses" >
                    <form method="post" >
                <?php while ($row = mysqli_fetch_array($select_query_result)){ ?>
                    <div class="card">
                        <div class="card-body">
                            <center>
                            
                                <h4 class="card-title"><?php echo $row['coursename']; ?></h4>
                                <h6 class="card-title">Code: <?php echo $row['subjectid']; ?></h6>
                                <p><?php echo $row['description']; ?> </p>
                                <button class="btn btn-warning">Update Course</button>
                                <button class="btn btn-danger" name="delete"> <a href="delete.php?subjectid=<?php echo $row['subjectid']; ?>"> Delete Course</a></button>
                                
                            </center>
                        </div>
                    </div>
                    <?php } ?>
                </form>
                </div>
                <div id="contact" class="jumbotron">
                    <center>
                        <h1>Contact</h1>
                        <hr>
                        <div class="conform">
                            <input type="text" name="email" id="email" placeholder="Email" width="300"><br>
                            <textarea name="query" placeholder="query"></textarea><br>
                            <button class="btn btn-success">Send</button>
                        </div>
                    </center>
                </div>
                <div id="about" class="jumbotron">
                   <center> 
                       <h1>About Us</h1>
                       <hr>
                    </center>
                       <div class="about-info">
                           <div class="address">
                               <h3>DayWithSurya</h3><br>
                               <p>Matiyari Chauraha , Chinhat<br>Lucknow 226028</p>
                               <p><span>Gmail:</span>daywithsurya</p>
                           </div>
                           <div class="social-icon">
                            <h3>Social Media Handle</h3><br>
                            <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                        </div>
                       </div>
                </div>
            </div>
        </div>






















        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>