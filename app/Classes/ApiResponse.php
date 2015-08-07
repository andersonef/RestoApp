<?php
/**
 * Created by PhpStorm.
 * User: anderson
 * Date: 26/07/15
 * Time: 09:15
 */

namespace RestoApp\Classes;


use Illuminate\Http\JsonResponse;

class ApiResponse extends JsonResponse{
    protected $myreturn;

    public function __construct($data, $status = true)
    {
        $this->myreturn = [
            'status' => ($status) ? 'success' : 'failure',
            'data'  => $data
        ];
        parent::__construct($this->myreturn, ($status) ? 200 : 422);
    }

    public function setMessage($msg){
        $this->myreturn['message'] = $msg;
        $this->setContent($this->myreturn);
        return $this;
    }


} 