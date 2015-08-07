<?php namespace RestoApp\Repositories;

use Andersonef\Repositories\Abstracts\RepositoryAbstract;
use \RestoApp\Entities\Usuario;

/**
 * Data repository to work with entity Usuario.
 *
 * Class UsuarioRepository
 * @package RestoApp\Repositories
 */
class UsuarioRepository extends RepositoryAbstract{


    public function entity()
    {
        return \RestoApp\Entities\Usuario::class;
    }

}