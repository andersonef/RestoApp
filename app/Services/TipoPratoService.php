<?php namespace RestoApp\Services;

use Andersonef\Repositories\Abstracts\ServiceAbstract;
use Illuminate\Database\DatabaseManager;
use \RestoApp\Repositories\TipoPratoRepository;

/**
 * Service layer that will applies all application rules to work with TipoPrato class.
 *
 * Class TipoPratoService
 * @package RestoApp\Services
 */
class TipoPratoService extends ServiceAbstract{

    /**
     * This constructor will receive by dependency injection a instance of TipoPratoRepository and DatabaseManager.
     *
     * @param TipoPratoRepository $repository
     * @param DatabaseManager $db
     */
    public function __construct(TipoPratoRepository $repository, DatabaseManager $db)
    {
        parent::__construct($repository, $db);
    }



}