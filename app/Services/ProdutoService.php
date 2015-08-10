<?php namespace RestoApp\Services;

use Andersonef\Repositories\Abstracts\ServiceAbstract;
use Illuminate\Database\DatabaseManager;
use \RestoApp\Repositories\ProdutoRepository;

/**
 * Service layer that will applies all application rules to work with Produto class.
 *
 * Class ProdutoService
 * @package RestoApp\Services
 */
class ProdutoService extends ServiceAbstract{

    /**
     * This constructor will receive by dependency injection a instance of ProdutoRepository and DatabaseManager.
     *
     * @param ProdutoRepository $repository
     * @param DatabaseManager $db
     */
    public function __construct(ProdutoRepository $repository, DatabaseManager $db)
    {
        parent::__construct($repository, $db);
    }


}