<?php namespace RestoApp\Services;

use Andersonef\Repositories\Abstracts\ServiceAbstract;
use Illuminate\Database\DatabaseManager;
use \RestoApp\Repositories\TipoProdutoRepository;

/**
 * Service layer that will applies all application rules to work with TipoProduto class.
 *
 * Class TipoProdutoService
 * @package RestoApp\Services
 */
class TipoProdutoService extends ServiceAbstract{

    /**
     * This constructor will receive by dependency injection a instance of TipoProdutoRepository and DatabaseManager.
     *
     * @param TipoProdutoRepository $repository
     * @param DatabaseManager $db
     */
    public function __construct(TipoProdutoRepository $repository, DatabaseManager $db)
    {
        parent::__construct($repository, $db);
    }



}