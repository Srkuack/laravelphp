<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Contacto</title> 
</head>
<body class="container">
    <header>
        <div class="wrapper">
			<nav>
                <a href="index.html">Inicio</a>
				<a href="personaje.html">Personaje</a>
			</nav>
        </div>
    </header>
    <section>
        <div>
            <h1 class="text-primary">Formulario de Contacto</h1>
        </div>
        <div class="Formulario">
            <form action="/crear-contacto" metod="POST">
                @csrf
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                <label for="Textarea" class="form-label">Mensaje</label>
                <textarea class="form-control" id="Textarea" rows="3"></textarea>
                
                <select class="form-select" aria-label="form-label">
                    <option value="1">Contratación</option>
                    <option value="2">Personal</option>
                    <option value="3">Otro</option>
                </select>
                <div>
                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>