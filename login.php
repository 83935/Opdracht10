<?php require_once('includes/header.php'); ?>
<div class="vh-100">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 mx-auto my-auto">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Gebruikersnaam">
					<div class="form-group">
						<label for="wachtwoord">Wachtwoord</label>
						<input type="password" class="form-control" name="password" value="<?php echo $username; ?>" placeholder="Wachtwoord">
					</div>
					<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
						    <?php
session_start();
//roep menu.php
//als de gebruiker ingelogd is stuur hem naar welcome.php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
//roep config.php zodat je database gegevens al hebt
require_once "config.php";
//defineer de variabelen
$username = $password = "";
$username_err = $password_err = "";
 //als er een post gestuurd is moet je doorgaan
if($_SERVER["REQUEST_METHOD"] == "POST"){
 //check of er een gebruiksnaam ingevuld is
    if(empty(trim($_POST["username"]))){
        $username_err = "Vul aub een gebruikersnaam in.";
		echo $username_err;
    } else{
        $username = trim($_POST["username"]);
    }
  
    if(empty(trim($_POST["password"]))){
        $password_err = "Vul aub een wachtwoord in.";
		echo $password_err;
    } else{
        $password = trim($_POST["password"]);
    }
    
 //als er geen gebruikersnaam en wachtwoord ingevuld is
    if(empty($username_err) && empty($password_err)){
     //maak de query
        $sql = "SELECT leerling_nummer, naam, password FROM studenten WHERE naam = ?";
        //als er verbind is maak de verbinding op een veilige manier
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                         //begin de sessie
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["gebruikersnaam"] = $username;                            
                            //stuur de gebruiker naar welcome.php
                            header("location: index.php");
                        } else{
                           //als de wachtword niet goed is
                            $password_err = "De wachtword die u ingevuld hebt is onjuist.";
                        }
                    }
                } else{
                   //als er geen gebruikersnaam bestaat
                    $username_err = "Er is geen acount met de volgende gebruikersnaam gevonden.";
                }
            } else{
				//als er geen verbinding mogelijk gemaakt kan worden
                echo "Er ging iets mis. Probeer later opnieuw.";
            }
        }
//dichtsluiten van de statemet
        mysqli_stmt_close($stmt);
    }
//verbreken van de verbinding
    mysqli_close($link);
}
?>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>
