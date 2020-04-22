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

        &nbsp;Carrinho 
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
                    <!-- PRODUCT -->
                    

            <div id="accordion">

                
                
                    <button class="btn btn-link" data-toggle="collapse" data-target="#boleto">
                    Boleto
                    </button>
                
                
                    <button class="btn btn-link" data-toggle="collapse" data-target="#cartao">
                    Cartão de Credito
                    </button>
                
                <hr>
                <div id="boleto" class="collapse show" data-parent="#accordion">
                    CPF
                    <input type="text" class="form-control">
                
                </div>
                <div id="cartao" class="collapse" data-parent="#accordion">

                        <form role="form">
                        <div class="form-group">
                            <label for="username">Nome do Titular</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->
                        <div class="form-group">
                            <label for="cpf">CPF do Titular</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="cpf" placeholder="" required="">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->

                        <div class="form-group">
                            <label for="cardNumber">Numero Cartão</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                </div>
                                <input type="text" class="form-control" name="cardNumber" placeholder="">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label><span class="hidden-xs">Validade</span> </label>
                                    <div class="form-inline">
                                        <select class="form-control" style="width:45%">
                                        <option>Mes</option>
                                        <option>01 - Janiary</option>
                                        <option>02 - February</option>
                                        <option>03 - February</option>
                                        </select>
                                        <span style="width:10%; text-align: center"> / </span>
                                        <select class="form-control" style="width:45%">
                                        <option>Ano</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                    <input class="form-control" required="" type="text">
                                </div> <!-- form-group.// -->
                            </div>
                        </div> <!-- row.// -->
                        <!-- <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button> -->
                        </form>


                </div>
                
            </div>
                <hr>
                Endereço
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="rua">Rua</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                                </div> <!-- input-group.// -->
                            </div>
                        </div>
                        <div class="col-md-8">
                             <div class="form-group">
                                <label for="rua">Numero</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input type="text" class="form-control" name="username" placeholder="" required="">
                                    </div> <!-- input-group.// -->
                             </div>
                        </div>
                        <div class="col-md-4">
                                        
                            <div class="form-group">
                                <label for="rua">Cep</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                                </div> <!-- input-group.// -->
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="form-group">
                                <label for="rua">Complemento</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                                </div> <!-- input-group.// -->
                            </div>

                        </div>

                </div>
               
              
                
                
            </div>
            <div class="card-footer">
                
                <div class="float-right" style="margin: 10px">
                        
                   
                    <a class="btn btn-success float-right" href="/pedido/resumo">OK</a>
                        
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
