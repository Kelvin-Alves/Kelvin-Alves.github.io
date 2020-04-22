@extends('welcome')
@section('script')
 
  <style>


        .quantity {
            float: left;
            margin-right: 15px;
            background-color: #eee;
            position: relative;
            width: 80px;
            overflow: hidden
        }

        .quantity input {
            margin: 0;
            text-align: center;
            width: 15px;
            height: 15px;
            padding: 0;
            float: right;
            color: #000;
            font-size: 20px;
            border: 0;
            outline: 0;
            background-color: #F6F6F6
        }

        .quantity input.qty {
            position: relative;
            border: 0;
            width: 100%;
            height: 40px;
            padding: 10px 25px 10px 10px;
            text-align: center;
            font-weight: 400;
            font-size: 15px;
            border-radius: 0;
            background-clip: padding-box
        }

        .quantity .minus, .quantity .plus {
            line-height: 0;
            background-clip: padding-box;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-background-size: 6px 30px;
            -moz-background-size: 6px 30px;
            color: #bbb;
            font-size: 20px;
            position: absolute;
            height: 50%;
            border: 0;
            right: 0;
            padding: 0;
            width: 25px;
            z-index: 3
        }

        .quantity .minus:hover, .quantity .plus:hover {
            background-color: #dad8da
        }

        .quantity .minus {
            bottom: 0
        }
        .shopping-cart {
            margin-top: 20px;
        }
        </style>
@stop
@section('cabecalho')
<div>
        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

        &nbsp;Resumo
</div>
@stop

@section('conteudo')

@if (old('cadastrar'))
    <div class="alert alert-success">
        <strong> {{ old('nome') }} </strong>: Cadastrado com Sucesso!
    </div>
@endif

@if (old('editar'))
    <div class="alert alert-success">
        <strong> {{ old('nome') }} </strong>: Alterado com Sucesso!
    </div>
@endif

<div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
            
                <a href="" class="btn btn-outline-info btn-sm pull-right">Voltar para carrinho</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                
                <h1>Tipo de pagamento <button type="button" class="btn btn-outline-danger btn-xs">
                                  
                                  <i class="fas fa-edit " aria-hidden="true"></i>
                              </button></h1>
               
                <div id="boleto" class="collapse show" data-parent="#accordion">
                   
                   <div class="row">
                        <div class="col-md-12"> <h2>Boleto</h2> </div>
                        
                        <div class="col-md-4">
                            <label>CPF</label>
                        </div>
                        <div class="col-md-8">
                           <p> 123.123.123-00</p>
                        </div>
                   
                   </div>
                    
                   
                </div>

                <div id="cartao" class="collapse show" data-parent="#accordion">
                        <h2>Cartão de credito</h2>
                            <div class="form-group">
                                <label for="username">Nome do Titular</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <label class="m-2" for="">nome</label>
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group.// -->
                            <div class="form-group">
                                <label for="cpf">CPF do Titular</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <p class="m-2">CPF</p>
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group.// -->

                            <div class="form-group">
                                <label for="cardNumber">Numero Cartão</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                    <p class="m-2">Numero</p>
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group.// -->

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Validade</span> </label>
                                            <p >10/10</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                            <p>123</p>
                                        </div> <!-- form-group.// -->
                                    </div>
                                </div> <!-- row.// -->
                        <!-- <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button> -->
                    


                </div>
                <hr>
                    <h1> Enderenço <button type="button" class="btn btn-outline-danger btn-xs">
                                  
                                  <i class="fas fa-edit " aria-hidden="true"></i>
                              </button></h1>
                              <div class="row">
                        <div class="col-md-12">
                                <div>
                                
                                </div>
                               <label >Nome da rua</label>
                               
                                <p >Rua lodovico</p>
                          
                        </div>
                        <div class="col-md-8">
                             
                                <label for="rua">Numero</label>
                                  
                                    <p >numero</p>
                          
                        </div>
                        <div class="col-md-4">
                                        
                            
                                <label for="rua">Cep</label>
                                
                                <p >cep</p>
                              
                            
                        </div>
                        <div class="col-12">

                            
                                <label for="rua">Complemento</label>
                                <p> Complemento</p>
                            

                        </div>

                </div>

                <hr>
                <h1>Produtos <button type="button" class="btn btn-outline-danger btn-xs">
                                  
                                  <i class="fas fa-edit " aria-hidden="true"></i>
                              </button></h1>
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/200x200" alt="prewiew" width="150" height="150">
                        </div>
                        <div class="col text-sm-center col-sm text-md-left col-md-6">
                            <h4 class="product-name"><strong>Nome</strong></h4>
                            <h4>
                                <small>variaveis</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            </div>
            <div class="card-footer">
                
                <div class="float-right" style="margin: 10px">
                        
                   
                    <a class="btn btn-success float-right" href="/pedido/resumo">Finalizar Compra</a>
                        
                    <div class="row">
                            <div class="col">
                                   
                                    <div class="float-right" style="margin: 5px">
                                    Frete: <b>50.00 R$</b>
                                    </div>
                                    <div class="float-right" style="margin: 5px">
                                    Desconto: <b>50.00 R$</b>
                                    </div>
                                    <div class="float-right" style="margin: 5px">
                                        Total: <b>50.00 R$</b>
                                    </div>
                            </div>
                    </div>
                   
                </div>
            </div>
        </div>


@stop
