<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use Yajra\DataTables\Exceptions\Exception;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable, \Exception $exception)
    {
        if ($exception instanceof Exception) {
            return response([
                'draw'            => 0,
                'recordsTotal'    => 0,
                'recordsFiltered' => 0,
                'data'            => [],
                'error'           => 'Laravel Error Handler',
            ]);
        }

        return $dataTable->render('users.index');
    }
}
