@extends('principal')

@section('conteudo')

  <div class='row'>
    <br>
    <div class='col-sm-4' style="text-align: center">
      <a href="/denuncia">
        <img src="{{ url('/img/denuncia_icon.png') }}">
      </a>
    </div>
    <div class='col-sm-6' style="text-align: center">
        <div class='row'>
          <div class='col-sm-3' style="text-align: center">
            <a href="/unidade">
              <img src="{{ url('/img/unidade_icon_p.png') }}">
            </a>
          </div>
          <div class='col-sm-3' style="text-align: center">
            <a href="/violencia">
              <img src="{{ url('/img/violencia.png') }}">
            </a>
          </div>

          <div class='col-sm-3' style="text-align: center">
           <a href="/paciente">
              <img src="{{ url('/img/paciente_icon_p.png') }}">
            </a>
          </div>

          <div class='col-sm-3' style="text-align: center">
             <a href="/encaminhar">
              <img src="{{ url('/img/encaminhar_icon_p.png') }}">
            </a>
          </div>

        </div>
        <div class='row'>
          <div class='col-sm-4' style="text-align: center">
             <a href="/unidade_notificacao">
                <img src="{{ url('/img/unidadeNotificadora_icon_p.png') }}">
            </a>
          </div>


          <div class='col-sm-4' style="text-align: center">
            <a href="/motivo_violencia">
              <img src="{{ url('/img/motivo_violencia_p.png') }}">
            </a>
          </div>

          <div class='col-sm-4' style="text-align: center">
             <a href="/violencia_sexual">
                <img src="{{ url('/img/violencia_sexual_icon_p.png') }}">
            </a>
          </div>

        </div>
    </div>
</div>

@stop
