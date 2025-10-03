<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Livewire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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
            min-height: 350px;
            /* or whatever fits your largest step */
            display: flex;
            flex-direction: column;
            justify-content: start;
        }

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }

        .form-check-input:checked {
            background-color: #000 !important;
            border-color: #000 !important;
        }

        #loading-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0%;
            background-color: #000;
            /* color of the bar */
            z-index: 9999;
            transition: width 0.3s ease;
        }
    </style>

</head>

<body>
    <div id="loading-bar"></div>

    @yield('content')

</body>

<script>
    document.addEventListener('readystatechange', () => {
        const bar = document.getElementById('loading-bar');
        if (document.readyState === 'interactive') bar.style.width = '10%';
        if (document.readyState === 'complete') bar.style.width = '100%';
    });
</script>

</html>