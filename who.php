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
        <h2>Who do you want to go with?</h2>
        
        <h3>Enter a friend's name.</h3>
        
        <?php
            
            echo "<form method='post' action='who.php'>";
            for($i = 0; $i < 3; $i++) {
                echo "<input type='text' name='friends[]' /><br>";
            }
            echo "</form>";
        
            echo "<input type='submit' name='submit' value='Submit'/>";
            if(isset($_POST['friends'])) {
                $friends = $_POST['friends'];
        
                print_r($_POST['friends']);
            }

        ?>
        
    </center></body>
    
</html>