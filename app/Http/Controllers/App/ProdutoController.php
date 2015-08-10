<?php

namespace RestoApp\Http\Controllers\App;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use RestoApp\Criterias\FindUsingLikeCriteria;
use RestoApp\Http\Requests;
use RestoApp\Http\Controllers\Controller;
use RestoApp\Services\ProdutoService;

class ProdutoController extends Controller
{
    protected $produtoService;

    public function __construct(ProdutoService $produtoService)
    {
        $this->produtoService = $produtoService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            //se chegou aki então tenho um idTipoProduto na request e vou usá-lo pra voltar só desse tipo:
            if($request->has('idTipoProduto'))
                return new JsonResponse($this->produtoService
                    ->findByCriteria(new FindUsingLikeCriteria($request->get('q')))
                    ->where('idTipoProduto','=',$request->get('idTipoProduto'))->get()
                );

            return new JsonResponse($this->produtoService
                ->findByCriteria(app(FindUsingLikeCriteria::class, [$request->get('q')]))
                ->with('TipoPratos')
                ->get()
            );
        }

        return 'view de listagem dos produtos';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
