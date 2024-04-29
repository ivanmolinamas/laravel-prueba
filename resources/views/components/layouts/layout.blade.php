<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <!-- //importo vite -->
    @vite(["resources/css/app.css" , "reources/css/app.js"])

</head>

<body>
<!-- header -->
<x-layouts.header class="bg-header"/>

<!-- nav -->
<x-layouts.nav class="bg-nav"/>

<!-- main -->
<main class="h-body bg-main">
    {{$slot}}

</main>

<!-- footer -->
<x-layouts.footer class="bg-footer "/>

</body>
</html>
