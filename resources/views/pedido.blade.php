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
               
                
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continuar Compra</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->
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
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                    <!-- PRODUCT -->
                   
                    <!-- END PRODUCT -->
                
            </div>
            <div class="card-footer">
                <div class="coupon m-2 col-md-5 col-sm-5 no-padding-left float-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupom">
                        </div>
                        <div class="col-3">
                            <input type="submit" class="btn btn-default" value="Cupom">
                        </div>
                    </div>
                </div>
                <div class="coupon m-2 col-md-5 col-sm-5 no-padding-left float-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Cep">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Cep">
                        </div>
                    </div>
                </div>
                <div class="float-right" style="margin: 10px">
                        
                   
                    <a class="btn btn-success float-right" href="/pedido/pagamento">Pagamento</a>
                        
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
