<?php

namespace App\Http\Controllers\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Agama;
use App\DataTables\AgamaDataTable;

class AgamaController extends Controller
{

	public function index(AgamaDataTable $ds)
	{
		return $ds->render('agama.lists');
	}
    
}
