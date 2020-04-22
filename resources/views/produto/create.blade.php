@extends('welcome')
@section('script')

@stop
@section('cabecalho')
<div>
        <a href="#"><i class="fas fa-user"></i></a>

        &nbsp;Cadastrado De Pescado
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
<div>
    <div class="card border-left-info border-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <form action="{{ route('produto.store')}}" method="POST" enctype="multipart/form-data">
                <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                <input type ="hidden" name="cadastrar" value="C">

                <div class="row">
                    <div class="col">
                        <div class="row">
                           <div class="col-lg col-md-6 mb-4">
                             <label>NOME</label>
                             <input type="text" name="nome" class="form-control">
                           </div>
                           <div class="col-lg col-md-6 mb-4">
                             <label>Nome cientifico</label>
                             <input type="text" name="nome" class="form-control">
                           </div>
                        </div>
                       
                        <div class="row">
                           <div class="col-lg col-md-6 mb-4">
                             <label>Capturado</label>
                             <input type="text" name="nome" class="form-control">
                           </div>
                           <div class="col-lg col-md-6 mb-4">
                             <label>Uso</label>
                             <input type="text" name="nome" class="form-control">
                           </div>
                        </div>
<!--                        
                        <div class="row">
                           <div class="col-lg col-md-6 mb-4">
                             <label>Preço</label>
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">KG</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Unitario</label>
                              </div>
                              <input type="text" name="nome" class="form-control">
                           </div>
                           
                          
                        </div> -->
                        
                        
                        <div class="row">
                           <div class="col">
                             <br>
                             <label>Imagem</label>
                             <input class="form-control" type="file" name="file">
                           </div>
                        </div>
                  </div>

                </div>
                <br>
                <button type="submit" class="btn btn-success btn-block">Salvar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>




@stop
