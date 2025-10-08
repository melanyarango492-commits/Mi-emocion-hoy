<php> 
</php>
<!DOCTYPE html>
<html lang="es">
<head>
<Meta charset="UTF-8">
<Meta name="viewport" content="width=deavice-width, initial-scale=1.0">
<Title>pàgina de melany</Title>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ====== Header ====== */
    header {
      background: #f068f3;
      color:white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color:white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #facc15;
    }

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #E9BEF9;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #EF6AF1;
      color:white;
      text-align: center;
      padding: 15px 0;
    }
  </style>
<head>
<body>
	<header>
		<h1> Mi  web frontend</h1>
		<nav>
			<ul>
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="acerca.php">Acerca</a></li>
				<li><a href="contacto.php">Contacto</a></li>
			</ul>
		</nav>
	</header>

	</header>

	<Main>
<h1> Bienvenidos a mi página web </h1>
<p> Maneja y ten el control de tus emociones para tener una mejor salud mental. </p>
	</Main>

	<footer>
<P>realizado por: Melany Arango </P>
	</footer>
</body>
</html>	
