<?php

namespace App\Http\Controllers\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pendidikan;
use App\DataTables\PendidikanDataTable;

class PendidikanController extends Controller
{

	public function index(PendidikanDataTable $ds)
	{
		return $ds->render('pendidikan.lists');
	}
    
}
