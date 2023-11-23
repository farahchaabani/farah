<!DOCTYPE html>
<html>
    <head>
    	<style>
    		.sign-up{
    	        background-color: transparent;
    			width: 300px;
    			height: 450px;
    			padding: 100px 30px;
    			position: absolute;
    			top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 2px solid;
                border-color: white;
                border-radius: 10px;
                backdrop-filter:blur(20px);
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
            .sign-up .input-box{
                position: relative;
            }
            .sign-up h1{
                font-size: 36px;
            }
            .input-box{
                border-bottom: 2px solid black;
            }
    	</style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body background="..\Lab7\background.png" text="black" vlink="gray">
    	<div class="sign-up">
    	    <form action="sign-in.php" method="POST" name="form">
    	    	<h1 class="log">Inscription</h1>
                <div class="input-box">
    		        <input type="text" name="nom" placeholder="Votre nom d'utilisateur" class="input">
                    <i class='bx bxs-user'></i>
                </div>
    		    <br><br>
                <div class="input-box">
    		        <input type="text" name="email" placeholder="Votre E-mail" class="input">
                    <i class='bx bx-envelope'></i>
                </div>
    		    <br><br>
                <div class="input-box">
    		        <input type="password" name="motpasse" placeholder="Votre mot de passe" class="input">
                    <i class='bx bxs-lock-alt'></i>
                </div>
    		    <br><br>
                <div class="input-box">
                    <input type="password" name="confmotpasse" placeholder="Confirmer votre mot de passe" class="input">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <br><br>
    		    <button type="submit" class="btn"><b>Inscription</b></button>
    		    <br><br>
    		    <div class="ali">
    		        Déjà inscrit ! 
    		        <a href="sign-in.php"><b>Connexion</b></a>
    		    </div>
    	    </form>
        </div>
    </body>
</html>
