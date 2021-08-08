<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "headerSesion.php";
    ?>
    <main>
    <form action="datos.php" method="POST">
        <div class="form-row">
        <div class="form-group col-12">
            <h>Para visualizar o manipular datos reingrese su </h>
            <label for="inputName">DNI: </label>
            <input type="text" name="dni" class="form-control" id="inputDni" placeholder="dni" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>