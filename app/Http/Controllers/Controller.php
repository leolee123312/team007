<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function someAction()
    {
        if(Gate::allows('admin')){
            return'系統管理者。';
        }
        if(Gate::denise('admin')){
            return'非系統管理者。';
        }
    }
    public function adminAction()
    {
        $this->authorize('admin');
    }
    use AuthorizesRequests, ValidatesRequests;
}
