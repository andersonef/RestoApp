@inject('tipoProdutoService', 'RestoApp\Services\TipoProdutoService')
@inject('tipoPratoService', 'RestoApp\Services\TipoPratoService')
<fieldset>
    <legend>Tipo do Pedido</legend>
    <div class="form-group">
        @foreach($tipoProdutoService->all() as $tipoProduto)
            {!!Form::radio('idTipoProduto', $tipoProduto->id, false, ['id' => 'idTipoProduto'.$tipoProduto->id])!!} {!! Form::label('idTipoProduto'.$tipoProduto->id, $tipoProduto->descTipoProduto) !!}<br>
        @endforeach
    </div>
    <div class="form-group">
        {!! Form::text('idProduto', null, ['id' => 'idProduto']) !!}
    </div>
</fieldset>
<br>

<fieldset>
    <legend>Detalhes da Refeição</legend>

    @foreach($tipoPratoService->all() as $tipoPrato)
        <div class="form-group">
            {!! Form::label('idTipoPrato'.$tipoPrato->id, $tipoPrato->descTipoPrato) !!}
            {!! Form::select('idPrato[]', selectValues($tipoPrato->Pratos, 'nomePrato'), null, ['id' => 'idTipoPrato'.$tipoPrato->id, 'multiple']) !!}
        </div>
    @endforeach
</fieldset>


@section('javascript')
    <script type="text/javascript">
    $(document).ready(function(){
        var $idprod = $("#idProduto").select2({
            placeholder : 'Informe o produto dessa venda',
            ajax : {
                url : '{{route('app.produto.index')}}',
                dataType : 'json',
                quietMilis : 250,
                data : function(term, page){
                    var response = {idTipoProduto : $("[name=idTipoProduto]:checked").val(), q: term};
                    console.log("dados para servidor", response);
                    return response;
                },
                results : function(data, page){
                    return {results : data};
                },
                cache : true
            },
            formatResult : function(resp){
                return resp.descProduto;
            },
            formatSelection : function(resp){
                return resp.descProduto
            }
        });

        //Evento de clique no checkbox de produtos para trazer a qtd ou detalhes sobre a marmitex, dependendo do tipo do ítem:
        $idprod.on('select2-selecting', function(){

        });

        //Evento de clique no radio para limpar o checkbox.
        $("[name=idTipoProduto]").on('ifChecked', function(){
            $idprod.select2('data', null);
            $idprod.focus();
            console.log('limpei manolo');
        })
    });
    </script>
@endsection