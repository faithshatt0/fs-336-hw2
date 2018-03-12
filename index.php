<?php
    $firstName= $_POST['firstname'];
    $timeOfDay= $_POST['time'];
    $social= $_POST['social'];
?>

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
        <div>
        <h2>Let's learn a few things about you</h2>
        
            <h3>What is your name?</h3>
            <form action='where.php' method='post'>
                <input type='text' name='firstname'>
            <h3>When would you like to go?</h3>
                <label><input type="radio" name="time" value="day"> Day</label>
                <label><input type="radio" name="time" value="night"> Night</label>
            <h3>Are you a social person?</h3>
                <label><input type="radio" name="social" value="yes"> Yes</label>
                <label><input type="radio" name="social" value="no"> No</label>
            <h3>Select your economic state:</h3>
                <select name="formMoney">
                  <option value="">Select...</option>
                  <option value="alot">I can spend a lot</option>
                  <option value="alittle">I can spend a little</option>
                  <option value="poor">I'm poor</option>
                </select>
                
                </br></br><input type='submit'>
            </form>
          
        </div>
    </center></body>
    
    <footer>
        <hr>
        Internet Programming. 2018
        <br/>
        <img width='100' src= "https://csumb.edu/sites/default/files/styles/profile_large/public/photo_1_6.jpg?itok=N4I4g9Wl">
    </footer>
    
</html>