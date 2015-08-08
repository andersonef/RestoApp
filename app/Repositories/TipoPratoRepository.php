<?php namespace RestoApp\Repositories;

use Andersonef\Repositories\Abstracts\RepositoryAbstract;
use \RestoApp\Entities\TipoPrato;

/**
 * Data repository to work with entity TipoPrato.
 *
 * Class TipoPratoRepository
 * @package RestoApp\Repositories
 */
class TipoPratoRepository extends RepositoryAbstract{


    public function entity()
    {
        return \RestoApp\Entities\TipoPrato::class;
    }

}