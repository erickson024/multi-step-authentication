<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <style>
      .progress {
    background-color: #e9ecef;
    border-radius: 0;
}

.progress-bar {
    transition: background-color 0.3s ease;
}

.bg-secondary {
    background-color: #e9ecef !important;
}

.form-card {
    min-height: 350px; /* or whatever fits your largest step */
    display: flex;
    flex-direction: column;
    justify-content: start;
}
    </style>

</head>

<body>
    @yield('content')
</body>

</html>