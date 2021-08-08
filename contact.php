

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<?php
include "header.php";
?>
<main>
<div class="formulario-cntc">
            <form id='contacto' class='contacto' action='' method="GET">

            <fieldset> 
                <div class="fc">
                    <h2><u>Contact Form</u></h2>
                    <br>
                    <div class="form-c">
                        <label>Name</label><br>
                        <input type="text" name="nombre" id="nombre" placeholder="Your Name" required="">
                        <br>
                        <br>
                        <label>E-Mail:</label><br>
                        <input type="email" name='email' id="email"placeholder="Your Email" required="">
                        <br>
                        <br>
                        <label>Phone:</label><br>
                        <input type="tel" name='tel' id="tel" placeholder="Your Phone" required="">
                        <br>
                        <br>
                        <label>Asunto:</label><br>
                        <input type="text" name='asunto' id="asunto" placeholder="asnto" required="">
                        <br>
                        <br>
                        <label name='mensaje'>Message: </label> <br>
                
                        <textarea rows="10" cols="30" name='mensaje' id="mensaje" placeholder="" required="">
                                
                    </textarea>
                    </div>
                    <div class="botones-envio">
                        <input type="submit" id="enviodatos" value="Enviar">
                        <input type="reset"id="restablecer" value="Restablecer">
                    </div>
                </div>
            </fieldset> 
        </form>
        </div>
        </main>
<?php
include "footer.php";
?>

</body>

</html>

<?php
$email=$_GET['email'];
$tel=$_GET['tel'];
$mensaje=$_GET['mensaje'];
$nombre=$_GET['nombre'];
$asunto=$_GET['asunto'];
mail('ornebanchero1@gmail.com','hola',$mensaje);
echo"enviado";
?>