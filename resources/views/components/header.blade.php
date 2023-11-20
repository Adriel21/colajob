<!-- @dump(session()->all()) -->

<!DOCTYPE html>

<html lang="pt-br" class="h-100">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="{{ asset('img/general/favicon.icon') }}" type="image/x-icon">
<title>Home - Colajob</title>




<!-- <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



<!-- Bootstrap Icons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@if(session()->has('user'))
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endif   





</head>

<body>

    





<header id="topo" class="border-bottom sticky-top">


<section class="navbar navbar-expand-lg">

  <div class="container limitador">

    <h1 class="ms-n1"><a class="navbar-brand logo" href="/"><img src="{{ asset('img/general/tecnologia.png') }}" width="40"> Colajob</a></h1>



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>



    <nav class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item m-1 active">

          <a class="nav-link btn text-uppercase fw-semibold" aria-current="page" href="/">Home</a>

        </li>


        @if(session()->has('user'))
        <li class="nav-item m-1">

          <a class="nav-link btn text-uppercase fw-semibold" href="entrar">Quero Trabalhar</a>

        </li>



        <li class="nav-item m-1">

          <a class="nav-link btn text-uppercase fw-semibold" href="cadastrar">Quero Contratar</a>

        </li>

        <li class="nav-item mx-1 dropdown d-flex flex-row justify-content-center">
          <a class="nav-link btn text-uppercase fw-semibold px-3 dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-inline-block me-2 bg-success rounded-circle" style="width: 10px; height: 10px;"></span> Meu Perfil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="painel-cliente">Perfil Cliente</a></li>
              <li><a class="dropdown-item" href="painel-cliente/cadastrar-perfil-freelancer">Me tornar Freelancer</a></li>
              <li><a class="dropdown-item" href="../admin/cadastro_atualiza.php">Editar Cadastro</a></li>
              <li><a class="dropdown-item" href="sair" >Sair</a></li>
          </ul>
        </li>


        @else   
        <li class="nav-item m-1">

          <a class="nav-link btn text-uppercase fw-semibold" href="entrar">Login</a>

        </li>



        <li class="nav-item m-1">

          <a class="nav-link btn text-uppercase fw-semibold" href="cadastrar">Cadastro</a>

        </li>
        @endif

      </ul>

    </nav>

  </div>

</section>

</header>







