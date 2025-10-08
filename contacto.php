<?php
// incluir la conexion
include("db/conexion.php");

//validar que es el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre=$_POST["nombre"];
    $correo= $_POST["email"];
    $telefono= $_POST["telefono"];
    $asunto= $_POST["asunto"]; 
    $mensaje= $_POST["mensaje"]; // asegurate que sea 'mensaje' y no 'Mensaje'

    
    // Preparar consulta (SQL Injection seguro)
    $stmt = $conn->prepare ("INSERT INTO formulario (nombre, correo, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $correo, $telefono, $asunto, $mensaje);

    if ($stmt->execute()) {
          $msg = "✅ Tu mensaje se envio correctamente.";
         echo "<script>
        document.addEventListener('DOMContentLoaded', function(){
          var m = " . json_encode($msg) . ";
          var d = document.createElement('div');
          d.textContent = m;
          Object.assign(d.style, {
              position:'fixed',
              left:'50%', 
              top:'20px', 
              transform:'translateX(-50%)', 
              background:'#1f2937', 
              color:'#fff',
              padding:'12px 18px', 
              borderRadius:'6px', 
              zIndex:9999,
              fontSize:'16px', 
              boxShadow:'0 2px 10px rgba(0,0,0,0.2)'
          });
          document.body.appendChild(d);
          setTimeout(function(){
              try { window.close(); } catch(e) {}
              setTimeout(function(){
                  if (!window.closed) { window.location = 'contacto.php'; }
              }, 200);
             }, 3000);
       });
       </script>";
    } else {
          $err = "❌ Error: " . $stmt->error;
         echo "<script>
         document.addEventListener('DOMContentLoaded', function(){
            var m = " . json_encode($err) . ";
            var d = document.createElement('div');
            d.textContent = m;
           Object.assign(d.style, {
                position:'fixed', 
                left:'50%', 
                top:'20px', 
                transform:'translateX(-50%)', 
               background:'#7f1d1d',
                color:'#fff', 
                padding:'12px 18px', 
               borderRadius:'6px', 
               zIndex:9999, 
                fontSize:'16px', 
                boxShadow:'0 2px 10px rgba(0,0,0,0.2)'
           });
           document.body.appendChild(d);
           setTimeout(function(){
              try { window.close(); } catch(e) {}
              setTimeout(function(){
                  if (!window.closed) { window.location = 'contacto.php'; }
              }, 200);
            }, 3000);
        });
       </script>";
}

    $stmt->close();
    $conn->close(); 
}
?>
<!DOCTYPE html>
<html lang="es">
 <head>
</php>
<!DOCTYPE html>
<html lang="es">
<head>
<Meta charset="UTF-8">
<Meta name="viewport" content="width=deavice-width, initial-scale=1.0">
<Title>contactos</Title>
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

<?php include ("menu.php"); ?>
	<header>
  <main>
	<div class="contact-container">
    <h2>Contacto</h2>


      <form action="contacto.php" method="post"novalidate>
        <div class="form-group">
            <label for="nombre">nombre completo</label>
            <input id="nombre" name="nombre" type="text" placeholder="tu nombre" required>
          </div>

        <div class="form-group">
          <label for="email">correo electronico</label>
          <input id="email" name="email" type="email" placeholder="tucorreo@ejemplo.com" required>

                <div class="form-group">
                  <label for="telefono">telefono(opcional)</label>
                  <input id="telefono" name="telefono" type="text" placeholder="+34 600 000 000">
                 </div>

         <div class="form-group">
          <label for="asunto">asunto</label>
          <input id="asunto" name="aunto" type="text" placeholder="breve resumen" required>
  </div>
              
                 <div class="form.group"> 
                  <label for="mensaje">mensaje</label>
                  <textarea id="mesaje" name="mensaje" placeholders="escribe tu mensaje..." required></textarea>
                  <div class="hint">maximo 200 caracteress. </div>
  <body>
    <main>
      <div class="contact-container">
        <form action="contacto.php" method="post" novalidate>
          
          </div>
          <div class="actions">
            <button type="reset" class="btn btn-secondary">limpiar</button>
            <button type="submit" class="btn btn-primary">enviar mensaje</button>
          </div>
        </form>
      </div>
    </main>

    <!-- footer -->
     <footer>
    </footer>

  </body>
  </html>

	</Main>

	<footer>
<P>realizado por: Melany Arango </P>
	</footer>
</body>
</html>	
