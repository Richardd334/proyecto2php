<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Problemas</title>
    <link rel="stylesheet" href="estilosRepo.css">
</head>
<body>
    <div class="container">
        <h1>Reporte de Problemas</h1>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" id="departamento" name="departamento" required>
            </div>
            <div class="form-group">
                <label for="tipo_problema">Tipo de Problema:</label>
                <input type="text" id="tipo_problema" name="tipo_problema" required>
            </div>
            <div class="form-group">
                <label for="colaborador">Colaborador que Resuelve:</label>
                <input type="text" id="colaborador" name="colaborador" required>
            </div>
            <div class="form-group">
                <label for="fecha_reporte">Fecha de Reporte:</label>
                <input type="date" id="fecha_reporte" name="fecha_reporte" required>
            </div>
            <div class="form-group">
                <label for="fecha_solucion">Fecha de Solución:</label>
                <input type="date" id="fecha_solucion" name="fecha_solucion">
            </div>
            <button type="submit">Enviar Reporte</button>
        </form>
    </div>
</body>
</html>