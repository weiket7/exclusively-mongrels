<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Config;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class AdoptController extends Controller
{
  public function index() {
    $adopt_service = new Adopt();
    $data['adopts'] = $adopt_service->getAdoptAll();
    return view("admin.adopt-admin", $data);
  }

  public function createUpdate($adopt_id = null) {
    $adopt = Adopt::findOrNew($adopt_id);

    if (Request::isMethod('post')) {
      $adopt->saveAdopt(Input::all());
      $action = Request::segment(3);
      return redirect('admin/adopt/update/'.$adopt->adopt_id)->with('message', 'Adoption '.$action.'d');
    }
    $data['adopt'] = $adopt;
    return view("admin.adopt-form", $data);
  }
}