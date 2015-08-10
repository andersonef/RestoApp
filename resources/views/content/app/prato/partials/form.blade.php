@inject('tipoPratoService', 'RestoApp\Services\TipoPratoService')
<fieldset>
    <legend>Informação do prato</legend>

    <div class="form-group">
        {!! Form::label('idTipoPrato', 'Grupo: ', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('idTipoPrato', selectValues($tipoPratoService->all(), 'descTipoPrato'), (isset($prato)) ? $prato->idTipoPrato : null, ['id' => 'idTipoPrato', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('nomePrato', 'Nome do Prato: ', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('nomePrato', null, ['id' => 'nomePrato', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('calPorcaoPrato', 'Valor Energético por porção: ', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('calPorcaoPrato', null, ['id' => 'calPorcaoPrato', 'class' => 'form-control']) !!}
        </div>
    </div>


</fieldset>
<br>