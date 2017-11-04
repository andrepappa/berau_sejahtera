<?php

namespace App\Http\Controllers\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Keluarga;
use App\DataTables\KeluargaDataTable;

class KeluargaController extends Controller
{

	public function index(KeluargaDataTable $ds)
	{
		return $ds->render('keluarga.lists');
	}
    
}
