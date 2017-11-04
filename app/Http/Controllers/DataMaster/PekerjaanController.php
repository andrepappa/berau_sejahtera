<?php

namespace App\Http\Controllers\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pekerjaan;
use App\DataTables\PekerjaanDataTable;

class PekerjaanController extends Controller
{

	public function index(PekerjaanDataTable $ds)
	{
		return $ds->render('pekerjaan.lists');
	}
    
}
