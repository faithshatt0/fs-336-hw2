<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>What to do</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>Bored?</h1>
        <a id="again" href="index.php" class="button">Let me choose again</a>
        <h2 id="youshould">You should . . . </h2>
        <a id="who" href="who.php" class="button">Who should I go with?</a>
        
        <?php
            
            $locations = array("beach","city","forest");
            $activities = array();
            
            $location = $_GET['location'];
            
            if ($location != "beach" && $location != "city" && $location != "forest") {
                $location = $locations[rand(0,2)];
            }
            
            
            if($location == 'beach') {
                array_push($activities,"Build a sand castle!", "Learn how to surf!", "Run down the beach!", "Do yoga!");
                $pics = array("sandcastle.jpg","surf.jpg","run.jpg","yoga.jpg");
            } elseif ($location == 'city') {
                array_push($activities,"Visit a coffee shop!", "Go to a concert!", "Visit an art gallery!", "Take the bus to sight see!");
                $pics = array("coffeeshop.jpg","concert.jpg","gallery.jpg","publictrans.jpg");
            } elseif ($location == 'forest') {
                array_push($activities,"Go hiking!", "Have a picnic!", "Bird watch!", "Draw plants & animals!");
                $pics = array("hiking.jpg","picnic.jpg","birdwatch.jpg","draw.jpg");
            }
            
            $randNum = rand(0,3);
            
            echo "<h2>$activities[$randNum]</h2> </br>";
            
            echo "<img width='1000' src='img/$location/$pics[$randNum]' />";
        ?>
        
    </body>
    
</html>