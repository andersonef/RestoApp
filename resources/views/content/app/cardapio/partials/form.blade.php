@inject('tipoProdutoService', 'RestoApp\Services\TipoProdutoService')
@inject('tipoPratoService', 'RestoApp\Services\TipoPratoService')
<fieldset>
    <legend>Cardápio do dia</legend>
    <div class="form-group">
        {!! Form::label('dataCardapio', 'Data do Cardápio: ', ['class' => 'col-sm-2 control-label']) !!}
        {!! Form::text('dataCardapio', null, ['id' => 'dataCardapio', 'class' => 'form-control', 'data-mask' => '99/99/9999']) !!}
    </div>
</fieldset>
<br>

<fieldset class="fset-refeicao">
    <legend>Pratos</legend>

    @foreach($tipoPratoService->all() as $tipoPrato)
        <div class="form-group">
            {!! Form::label('idTipoPrato'.$tipoPrato->id, $tipoPrato->descTipoPrato, ['class' => 'control-label col-sm-2']) !!}
            {!! Form::select('idPrato[]', selectValues($tipoPrato->Pratos, 'nomePrato'), (isset($cardapio)) ? selectValues($cardapio->Pratos, 'id') : null, ['id' => 'idPrato'.$tipoPrato->id, 'class' => 'form-control cmb-prato', 'multiple']) !!}
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
        $idprod.on('select2-selecting', function(evt){
            var fsetRefeicao = $(".fset-refeicao");
            if(evt.choice.TipoPratos){
                for(var x in evt.choice.TipoPratos){
                    //seto em kda select de tipo de prato, um data, contendo o limite permitido:
                    var combo = $("#idPrato" + evt.choice.TipoPratos[x].id);
                    combo.data('limite', evt.choice.TipoPratos[x].pivot.limiteTipoPrato);
                }
            }
            console.log("Selecionado: ", evt.choice);
            if(evt.choice.idTipoProduto == 1){ //marmitex
                return fsetRefeicao.show();
            }
            fsetRefeicao.hide();
        });

        //Evento de clique no radio para limpar o checkbox.
        $("[name=idTipoProduto]").on('ifChecked', function(){
            $idprod.select2('data', null);
            $idprod.focus();
            console.log('limpei manolo');
        });


        //evento de clique para adicionar um prato na marmitex.
        $(".cmb-prato").on('select2-selecting', function(evt){
            console.log('limite eh de ' + $(this).data('limite'));
        });
        $(".cmb-prato").select2({
            maximumSelectionSize : function(){
                return parseInt($(this).data('limite'));
            }
        });


    });
    </script>


@endsection