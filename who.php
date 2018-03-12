<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>What to do</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    
    <body><center>
        <h1>Bored?</h1>
        <a id="again" href="index.php" class="button">Let me choose again</a>
        <h2 id="whotitle">Who do you want to go with?</h2>
        
        <?php
            if(!isset($_GET['people'])) {
                echo '<h3>How many people would you like to choose between?</h3>';
                echo "<form action='who.php' method='GET'>";
                echo "<input type='number' name='people' min='1' max='3'>";
                echo "<input id='sub' type='submit' value='This many!'>";
                echo "</form>";
            } 
            else {
                $num = $_GET['people'];
                echo "<h3>Enter $num friends names.</h3>";
                $friend_array = array();
                echo "<form method='POST' action='who.php' >";
                for($i = 0; $i < $num; $i++) {
                    echo "<input type='text' name='friends[]' id='subject'/>";
                }
                echo "<input id='woop' type='submit' value='Woop!'/>";
                echo "</form>";
            }
            if (isset($_REQUEST['friends']) && is_array($_REQUEST['friends'])) {
              $friends = $_REQUEST['friends'];
            
              $num = rand(0,2);
              echo "</br><h3>You should go with $friends[$num]!</h3>";
            }
        ?>
        
    </center></body>
    
    <footer>
        <hr>
        Internet Programming. 2018
        <br/>
        <img width='100' src= "https://csumb.edu/sites/default/files/styles/profile_large/public/photo_1_6.jpg?itok=N4I4g9Wl">
    </footer>
    
</html>