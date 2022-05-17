<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/Proyectos/ProyectoF/index.html">Inici&oacute;</a></li>
        </ul>
    </nav>
</body>

<div class="Seccion0">
    <div class="Color">
        <div id="C1"> </div>
        <div id="C2"> </div>
        <div id="C3"> </div>
        <div id="C4"> </div>
        <div id="C5"> </div>
    </div>
</div>

<main>
    <h2>¡Danos tu opini&oacute;n!</h2>

    <form class="opiniones" action="guardar.php" method="POST" id="forma_opinion" runat="server" enctype="multipart/form-data">

        <label for="Nombre"><h3>Nombre:<h3></label><br>
        <input type="text" id="Nombre" name="Nombre" maxlength="60" required><br>

        <label for="Edad"><h3>Edad:<h3></label><br>
        <input type="text" id="Edad" name="Edad" pattern="[0-9]+" maxlength="2" required><br>

        <h3>G&eacute;nero</h3>
        <div class="Gt"><input type="radio" name="Genero" value="Mujer" required/><label>Mujer</label></div>
        <div class="Gt"><input type="radio" name="Genero" value="Hombre" required/><label>Hombre</label></div>
        <div class="Gt"><input type="radio" name="Genero" value="Otro" required/><label>Otro</label></div><br>

        <label for="Correo">Correo electr&oacute;nico:</label><br>
        <input type="email" id="Correo" name="Correo"  maxlength="60" required><br>

        <h3>Calificaci&oacute;n del juego:</h3>
        <select name="Calif" required>
            <option value= "">-----</option>
            <option value="Muy bueno">Muy bueno</option>
            <option value="Bueno">Bueno</option>
            <option value="Regular">Regular</option>
            <option value="Malo">Malo</option>
            <option value="Muy malo">Muy malo</option>
        </select>

        <button class="submit" type="submit"><h3>Enviar<h3></button>
    </form>   
</main>
<div class="Creditos">
    <p>Martha Peinado.</p><p>Correo:al198454@gmail.com.mx</p>
</div>
</html>