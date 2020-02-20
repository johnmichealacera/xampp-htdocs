<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <title>Event Countdown</title>
    
</head>
<?php 
include 'php\function.php'; 
/*
$eventName = "";
$eventDate = "";
$eventTime = "";*/
$newArray = ["","",""];
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $eventName = $_POST["eventName"];
        $eventDate = $_POST["eventDate"];
        $eventTime = $_POST["eventTime"];

        $newArray = createEvent($eventName, $eventDate, $eventTime);

    }
?>
<body class="bg-light">
    <div class="container-fluid bg-primary">
        <div class="row main_row">
            <div class="col-6 bg-secondary">
                <div class="row pt-3">
                    <div class="col">
                    <h1 class="display-1 text-center"> Event Countdown <br></h1>
                    </div>
                </div>
                <form method="post"> <!--action="function.php"-->
                    <div class="row pt-4 m-2 form-group">
                        <input class="col-6 form-control" type="text" placeholder="* Event Name" name="eventName" required>
                        <input class="col-3 form-control" type="date" name="eventDate" required>
                        <input class="col-3 form-control" type="time" name="eventTime">
                    </div>
                    <div class="row pt-4 form-group">
                        <input class="col btn btn-success m-2 form-control" type="submit" value="Create Event">
                    </div>
                </form>
            </div> 
            <div class="col-6 bg-danger p-5">
                <h1 class="row display 1 text-center"> Upcoming Events </h1>
                <h2 class="row"> Event Name: <?= $newArray[0]; ?> </h2>
                <h2 class="row"> Event Date: <?= $newArray[1]; ?></h2>
                <h2 class="row"> Event Time: <?= $newArray[2]; ?></h2>
            </div>    
        </div>    
    </div>
</body>
</html>