<?php namespace RestoApp\Repositories;

use Andersonef\Repositories\Abstracts\RepositoryAbstract;
use \RestoApp\Entities\Produto;

/**
 * Data repository to work with entity Produto.
 *
 * Class ProdutoRepository
 * @package RestoApp\Repositories
 */
class ProdutoRepository extends RepositoryAbstract{


    public function entity()
    {
        return \RestoApp\Entities\Produto::class;
    }

    public function all(array $columns = ['*'])
    {
        $all = parent::all($columns);
        foreach($all as $i => $obj) $all[$i]->TipoPratos;
        return $all;
    }


}