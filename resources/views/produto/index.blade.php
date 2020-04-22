@extends('welcome')

@section('script')
<?php
  $produto = array(
    "000.000.000.01" => array(
      "nome" => "Carlos Eduardo",
      "endereco" => "Rua Manuel Viana, 200",
      "telefone" => "(41)3422-2829",
    ),

    "000.000.000.02" => array(
      "nome" => "Fabiola Oliveira",
      "endereco" => "Rua Antonio Carlos Rodrigues, 2064",
      "telefone" => "(41)99912-0214",
    )
  );
?>



<script >

    $(function(){
    var produto = <?php echo json_encode($produto); ?>;
    var list= new Map();
    $( ".carrinho" ).click(function() {
        event.preventDefault();
        var id =$(this).attr("data-id");
        for (var variavel in produto) {
            if(variavel == id){
                
                if(list.get(variavel)){

                total=list.get(variavel)+1;
                list.set(variavel, total);
                }else {
                    list.set(variavel, 1);
                }
                var num=parseInt($("#num").text()) + 1;

                $( '#num' ).html(num);
            }


        }



    });
  });
</script>

@stop
@section('cabecalho')
    Pescado
@stop
@section('conteudo')
  
    <div class="container">
    
        <div class="row">
    



<!-- 
        <div class="col-lg-3">

            <h1 class="my-4"></h1>
            <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
            </div>

        </div> -->
        <!-- /.col-lg-3 -->

        <div class="col-lg">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://placehold.it/1200x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/1200x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/1200x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4 produto">
                    <div class="card h-100 border-0 shadow">

                    <div class="card-footer">
                            <div class="row">
                                <div class="col" >
                                    
                                        <a class="carrinho" href="" data-id="000.000.000.01" >Adicionar <i class="fas fa-shopping-cart px-1 fa-2x text-info"></i></a>
                                </div>
                                    
                                    <div class="col">

                                        <a class="text-success" href="{{ route('login') }}">Comprar <i class="fas fa-money-bill-wave px-1 fa-2x text-success"></i></a>
                                    </div>
                            </div>
                        </div>
                        <a href="#">
                        <img class="card-img-top" id="comp-jn9nkduf__item-j9wkr1bkimgimage" alt="bagre2.png" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/37cd4f_e183c311d7364a2a806878e995fc8971~mv2.png/v1/fill/w_226,h_214,al_c,q_85,usm_0.66_1.00_0.01/bagre2.webp">
                        </a>

                        <div class="card-body ">
                            <h4 class="text-center card-title">
                                <a href="#">Bagre</a>
                            </h4>
                            
                            <h5>R$24.99 KG</h5>
                            <hr>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Nome científico </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Capturado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Usos</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Cathorops spixii, Genidens barbus e Bagre bagre</div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Principalmente em fundeio com rede baixa</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">O caldo de bagre cozido é um prato muito tradicional na culinária caiçara</div>
                            </div>
                            <!-- <p class="card-text">Nome científico: Cathorops spixii, Genidens barbus e Bagre bagre</p>

                            <p class="card-text">Capturado: Principalmente em fundeio com rede baixa</p>

                            <p class="card-text">Usos: o caldo de bagre cozido é um prato muito tradicional na culinária caiçara</p> -->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col" >
                                    
                                        <a class="carrinho" href="" data-id="000.000.000.01" >Adicionar <i class="fas fa-shopping-cart px-1 fa-2x text-info"></i></a>
                                </div>
                                    
                                    <div class="col">

                                        <a class="text-success" href="{{ route('login') }}">Comprar <i class="fas fa-money-bill-wave px-1 fa-2x text-success"></i></a>
                                    </div>
                            </div>
                        </div>
                        </div>
                </div>


            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

        </div>
    <!-- /.row -->

    </div>
@stop