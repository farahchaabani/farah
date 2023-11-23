<!DOCTYPE html>
<html>
    <head>
    	<style>
    		.sign-in{
    			background-color: transparent;
    			width: 300px;
    			height: 400px;
    			padding: 60px 40px;
    			position: absolute;
    			top: 50%; 
                left: 50%;
                transform: translate(-50%, -50%);
                border: 2px solid;
                border-color: white;
                border-radius: 10px;
                backdrop-filter:blur(20px);
                margin: auto;
    			}
    		.input-box input{
    			width: 100%;
    			height: 50px;
    			background-color: transparent;
                border: none;
                outline: none;
    		}
    		.btn{
    			width: 100%;
    			height: 50px;
    			background: #FFFFFF;
    			border: none;
    			border-radius: 40px;
    			font-size: 15px;
    		}
    		.dfg{
    			text-align: right;
    		}
    		.log{
    			text-align: center;
    		}
    		.ali{
    			text-align: center;
    		}
    		.input-box i{
    			position: absolute;
    			right: 20px;
    			top: 50%;
    			transform: translateY(-50%);
    		}
    		.sign-in .input-box{
    			position: relative;
    		}
    		.input-box{
                border-bottom: 2px solid black;
            }
    	</style>
    	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body background="..\Lab7\background.png" text="black" vlink="gray">
        <div class="sign-in">
    	    <form action="sign-up.php" method="POST" name="formulaire">
    	    	<h1 class="log">Connexion</h1>
    	        <div class="input-box">
    	            <input type="text" name="mail" placeholder="E-mail" class="input">
    	            <i class='bx bx-envelope'></i>
                </div>
    	        <br><br>
    	        <div class="input-box">
    	            <input type="password" name="mp" placeholder="mot de passe" class="input">
    	            <i class='bx bxs-lock-alt'></i>
    	        </div>
    	        <br><br>
    	            <input type="checkbox" name="fgh" value="Remember me" class="dfg">Se souvenir de moi
    	        <br><br>
    		        <button type="submit" class="btn"><b>Connexion</b></button>
                <br><br>
                <div class="ali">
    	            Vous n'avez pas un compte !
    	  	        <a href="sign-up.php"><b>Inscription</b></a>
    	  	    </div>
    	    </form>
        </div>
<?php
$idcon=mysqli_connect("localhost" ,"root", "");
if($idcon)
 {
 	echo "Connexion réussite <br/>" ;
 	$okbd=mysqli_select_db($idcon,"biblio");
 	if($okbd==TRUE)
 		echo "<br/>Base correcte <br/>";
 	else
 		echo "<br/>Base incorrecte <br/>";
 }
 else
 	echo "Erreur de connexion avec le serveur:<br/>";
?>
    </body>
</html>

