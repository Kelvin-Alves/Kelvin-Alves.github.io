<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--fontawesome-->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->
<title>GP</title>
<style type="text/css"> 
a:link 
{ 
 text-decoration:none; 
} 
body{
    background:  url("{{ url('/img/fundo.jpg') }}");
                
    background-size:100%;
}
</style>


@yield('script')


</head>
<body >
    <!-- navbar -->
   
    <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top  fixed-top">
        <a class="navbar-brand"><img id="comp-jmr3svftimgimage" style="object-position:50% 50%;width:76px;height:60px;object-fit:cover" alt="Olha o Peixe! - Logo - Defesa-04.png" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/37cd4f_2d721e2d69324c9aac04bf8c5c21bd39~mv2_d_2127_1772_s_2.png/v1/crop/x_229,y_263,w_1688,h_1281/fill/w_76,h_60,al_c,q_85,usm_0.66_1.00_0.01/Olha%20o%20Peixe!%20-%20Logo%20-%20Defesa-04.webp"></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
         <!-- Search bar -->
         <form class="form-inline ">
            <div class="input-group">
            <input type="text" class="form-control " placeholder="Search" >
            <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
            <a class="nav" href="/pedido">
                <i class="fas fa-shopping-cart px-1 fa-2x text-info"></i>
                <p id="num" class="text-light">0</p>
            </a>

        <div class="collapse navbar-collapse justify-content-between" id="nav">
            <ul class="navbar-nav">
            <li class="nav-item" >
                <a class="nav-link text-light  px-3" href="#">Home</a>
            </li>
            <li class="nav-item dropdown" data-toggle="dropdown">
               <a class="nav-link text-light  px-3 dropdown-toggle" href="#">Categorias</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">promoção</a>
                <a class="dropdown-item" href="#">teste</a>
                <a class="dropdown-item" href="#">teste1</a>
            </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light px-3" href="#">Sobre</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light px-3" href="#">Contato</a>
            </li>
            
              <!-- Authentication Links -->
              @guest
                            <li class="nav-item">
                                <a class="nav-link nav-link text-light px-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav-link text-light px-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item nav-link text-light  px-3 dropdown-toggle dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            
            </ul>
        </div>
    </nav>
   
    <div class="container">
        <div class=" text-center my-auto">
            <h1 style="text-aling"> @yield('cabecalho')</h1>
        </div>
         <!-- Page Content -->
  
        @yield('conteudo')
    </div>
    

    <hr>
        <div class="container my-auto">
          <div class=" text-center my-auto">
            <span>Copyright &copy; Kelvin Alves 2019</span>
          </div>
        </div>

    
</body>

</html>