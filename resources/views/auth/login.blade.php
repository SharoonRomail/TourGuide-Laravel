<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.101.0">
<title>Tour</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/cover.css')}}" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center">
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">  
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0"><img src="images/logo.png" /></h3>
        </div>
    </header>
    <main class="px-3 main-cnt">
        @include('front.main')
    </main>
    <footer class="mt-auto text-white">
        <p>Copyright &copy; 2022</p>
    </footer>
    @include('sweetalert::alert')
</div>
</body>
</html>