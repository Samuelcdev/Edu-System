<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title . " | Edu System" ?? 'Sin título') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c88d790515.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <?= $content ?? '<p>No hay contenido disponible.</p>'; ?>
    </main>
</body>
</html>