<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='mystyle.css'>
    <title>11 PHP paskaita</title>
</head>
<body>

<?php 

    

if(isset($_GET["prisijungti"])) 
{

$registruotiVartotojai = array(
array(
    "username" => "admin", 
    "password" => "admin", 
    "teises" => 10, 
),
array(
    "username" => "admin123", 
    "password" => "admin123", 
    "teises" => 2, 
),
  
);

if (isset($_GET["username"]) && !empty($_GET["username"]) && isset($_GET["password"]) && !empty($_GET["password"]) )
{
$vardas = $_GET["username"];
$slaptazodis = $_GET["password"];

foreach($registruotiVartotojai as $elementas) {
    
    $teisingasDuomuo = false;
    $laikinasis_vardas = "";
    $laikinasis_teises = "";
    if($vardas == $elementas["username"] && $slaptazodis == $elementas["password"]) {
        $teisingasDuomuo = true;
        $laikinasis_vardas = $elementas["username"];
        $laikinasis_teises = $elementas["teises"];
        break;
    }
}


if($teisingasDuomuo) {

    // echo "Sveikas atvykes ". $laikinasis_vardas ." ". $laikinasis_teises."teises";

    setcookie("prisijungti",  $laikinasis_vardas, time() + 3600 * 24, "/");
    setcookie("teises",  $laikinasis_teises, time() + 3600 * 24, "/");
    header('Location: login.php');

} else 
    {
          $zinute1 = 'Neteisingas vartotojo vardas arba slaptazodis, bandykite is naujo';
    }

} else {
    $zinute2 = 'Laukeliai yra tusti';
}

}
?>

<element id='login'>


   
<div class='container'>
        <div class='left-column'>
            <div class='left-column-container'>
                <h1>Sign in</h1>

                <div class='links'>
                    <a href='#'>Privacy policy</a>
                    <p>&</p>
                    <a href='#'>terms of service</a>
                </div>
            </div>
        </div>
        <div class='right-column'>
              
            <div class='right-column-container'>
            <?php if(!isset($_COOKIE["prisijungti"])) { ?> 
                <span class='close'>x</span>
     
        <form action="login.php" method="get">
                <div class='input'>
                    <label for='vardas'>USERNAME</label>
                    <input placeholder='Enter your user name' type='text' id='username' name='username' />
                </div>
                
                <div class='input'>
                    <label for='password'>PASSWORD</label>
                    <input placeholder='Enter your password' type='text' id='password' name='password' />
                </div>
           
                <div class='right-column-bottom-action'>
                    <button type='submit' name='prisijungti' class='btn'>Login</button>
                    <p class='or'>or</p>
                    <a href='forgot.php'>Forgot password</a>  
                                          
          
                </div>
                    <div>
                        <?php if(isset($zinute1)) { echo $zinute1;} ?> 
                        <?php if(isset($zinute2)) { echo $zinute2;} ?>

                    </div>
                </form>

            </div> 
       
        

        </div>
    </div>


    <?php }

    if(isset($_COOKIE["prisijungti"]) && isset($_COOKIE['teises']))
     {
        echo 'Sekmingai prisijungete: '.($_COOKIE['prisijungti']).'; teises: '.($_COOKIE['teises']);

        echo '<form action="login.php" method="get">
        <button type="submit" name="atsijungti" class="btn">Atsijungti</button>
        </form>';
        echo '<br>';
        // header("Location: manopaskyra.php");



        if(isset($_GET['atsijungti']))
         {
        setcookie("prisijungti",  "", time() - 3600, "/");
        setcookie("teises",  "", time() - 3600, "/");
        header("Location: login.php");

         }
     }

    

 

?>



    </body>
</html>
