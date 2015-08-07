<?php namespace RestoApp\Services;

use Andersonef\Repositories\Abstracts\ServiceAbstract;
use Illuminate\Auth\Guard;
use Illuminate\Database\DatabaseManager;
use \RestoApp\Repositories\UsuarioRepository;

/**
 * Service layer that will applies all application rules to work with Usuario class.
 *
 * Class UsuarioService
 * @package RestoApp\Services
 */
class UsuarioService extends ServiceAbstract{
    private $guard;

    /**
     * This constructor will receive by dependency injection a instance of UsuarioRepository and DatabaseManager.
     *
     * @param UsuarioRepository $repository
     * @param DatabaseManager $db
     */
    public function __construct(UsuarioRepository $repository, DatabaseManager $db, Guard $guard)
    {
        parent::__construct($repository, $db);
        $this->guard = $guard;
    }



    public function authenticate(array $data)
    {

        $ok = false;
        if(!$ok = $this->guard->attempt(['emailUsuario' => $data['username'], 'password' => $data['password']])){

            $ok = $this->guard->attempt(['loginUsuario' => $data['username'], 'password' => $data['password']]);
        }

        if(!$ok) return false;
        return $this->guard->user();
    }

}