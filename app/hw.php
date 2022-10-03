<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>HW</title>
</head>
<body>
    <div id="header"></div>
    <div class="m-5"></div>

    <main class="container">
        <form action="" method="post" class="m-3">
            <h1 class="h1">Multiple meaning words</h1>
            <p>The below words have multiple meanings. Read the sentences and write down the correct definition for each sentence.</p>
            <fieldset>
                <legend>park</legend>
                <p>You cannot park your car here.</p>
                <p>Definition:</p>
                <p><input type="radio" name="park" value="a piece of public land in or near a city that is used for pleasure and exercise">&nbsp;a piece of public land in or near a city that is used for pleasure and exercise</p>
                <p><input type="radio" name="park" value="a large area of public land kept in its natural state to protect plants and animals">&nbsp;a large area of public land kept in its natural state to protect plants and animals</p>
                <p><input type="radio" name="park" value="a field or stadium where a sport is playe"> &nbsp;a field or stadium where a sport is played</p>
                <p><input type="radio" name="park" value="to leave a vehicle in a particular place">&nbsp;to leave a vehicle in a particular place</p>
            </fieldset><br>
            <fieldset>
                <legend>scale</legend>
                <p>During cooking class, students used a scale to measure some of the
                    ingredients.</p>
                <p>Definition:</p>
                <p><input type="radio" name="scale" value="a device that is used for weighing people or things">&nbsp;a device that is used for weighing people or things</p>
                <p><input type="radio" name="scale" value="one of many small thin plates that cover the bodies of some animals, such as fish or snakes a series of musical notes that go up or down in pitch">&nbsp;one of many small thin plates that cover the bodies of some animals, such as fish or snakes a series of musical notes that go up or down in pitch</p>
                <p><input type="radio" name="scale" value="a line on a map or chart that shows a specific unit of measure used to represent a larger unit">&nbsp;a line on a map or chart that shows a specific unit of measure used to represent a larger unit</p>
                <p><input type="radio" name="scale" value="the size or level of something especially in comparison to something else">&nbsp;the size or level of something especially in comparison to something else</p>
            </fieldset><br>
            <fieldset>
                <legend>tap</legend>
                <p>He turned on the hot water tap.</p>
                <p>Definition:</p>
                <p><input type="radio" name="tap" value="to hit something lightly especially with a small sound">&nbsp;to hit something lightly especially with a small sound</p>
                <p><input type="radio" name="tap" value="to hit your fingers or feet against something lightly">&nbsp;to hit your fingers or feet against something lightly</p>
                <p><input type="radio" name="tap" value="a device for controlling the flow of a liquid or gas from a pipe or container">&nbsp;a device for controlling the flow of a liquid or gas from a pipe or container</p>
                <p><input type="radio" name="tap" value="to place a device on someone's phone in order to secretly listen to telephone calls">&nbsp;to place a device on someone's phone in order to secretly listen to telephone calls
                </p>
            </fieldset><br>
            <h1 class="h1">‘There is’ or ‘There are’</h1>
            <p>Complete each sentence with ‘there is’ or ‘there are’.</p>
            <p>
                There
                <select name="There1" size="1">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="is">is</option>
                    <option value="are">are</option>
                </select>
                four flowers in the vase.
            </p><br>
            <p>
                There
                <select name="There2" size="1">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="is">is</option>
                    <option value="are">are</option>
                </select>
                not one cloud in the sky.
            </p><br>
            <p>
                There
                <select name="There3" size="1">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="is">is</option>
                    <option value="are">are</option>
                </select>
                a puddle on the floor.
            </p><br>
            <p>
                There
                <select name="There4" size="1">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="is">is</option>
                    <option value="are">are</option>
                </select>
                cookies in the jar.
            </p><br>
            <h1 class="h1">Complete the next ten</h1>
            <p>Find the missing numbers:</p><br>
            <p>&nbsp;45 + <input type="text" name="number1" id="" size="1" > = 70 </p><br>
            <p>&nbsp;28 + <input type="text" name="number2" id="" size="1" > = 40</p><br>
            <p>&nbsp;18 + <input type="text" name="number3" id="" size="1" >= 33</p><br>
            <p>&nbsp;19 - <input type="text" name="number4" id="" size="1" >=43</p><br>
            <input name="submit" type="submit" value="submit" class="mx-5 my-4">
        </form>
    </main>

    <div id="footer"></div>
    
    <script src="../js/all.js"></script>
    
</body>
</html>

<?php
	$host="localhost";  
	$user="istomery_user";
	$pass="123456";
	$db="istomery_homework";
	//create connection
	$conn=new mysqli($host,$user,$pass,$db);
	if ($conn->connect_error){
    		die("Connection failed: ".$conn->connect_error);}
	
    
    if (isset($_POST["submit"])) {
        $num1=$_POST["number1"];
        $num2=$_POST["number2"];
        $num3=$_POST["number3"];
        $num4=$_POST["number4"];
        $t4=$_POST["There4"];
        $t3=$_POST["There3"];
        $t2=$_POST["There2"];
        $t1=$_POST["There1"];
        $tap=$_POST["tap"];
        $scale=$_POST["scale"];
        $park=$_POST["park"];
        $sql = "INSERT INTO `homework` (`number1`,`number2`,`number3`,`number4`,`There1`,`There2`,`There3`,`There4`,`tap`,`scale`,`park`) VALUES ('$num1','$num2','$num3','$num4','$t1','$t2','$t3','$t4','$tap','$scale','$park')";
        $result = $conn->query($sql);
        if(!$result)
        {
            echo "error";
        }  
        else{
            echo "submitted successfully";
        }

    }
    
?>
