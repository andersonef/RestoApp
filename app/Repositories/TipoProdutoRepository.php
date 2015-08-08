<?php namespace RestoApp\Repositories;

use Andersonef\Repositories\Abstracts\RepositoryAbstract;
use \RestoApp\Entities\TipoProduto;

/**
 * Data repository to work with entity TipoProduto.
 *
 * Class TipoProdutoRepository
 * @package RestoApp\Repositories
 */
class TipoProdutoRepository extends RepositoryAbstract{


    public function entity()
    {
        return \RestoApp\Entities\TipoProduto::class;
    }

}