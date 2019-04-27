<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Lista;

class HomeController extends Controller {

	public function home() {
		
		$lista = Lista::all();

		$array = array('lista'=>$lista);

		return view('home', $array);

	}

	public function add(Request $req) {
		if($req->has('item')) {   // se ele tem o campo item
			$item = $req->input('item');

			$lista = new Lista;
			$lista->item = $item;
			$lista->save();

			}

			 //caso não tenha o item
			return redirect('/'); //vai redirecionar pra página inicial
	}

	public function del($id) {
		Lista::find($id)->delete();

		return redirect('/');
	}


}


