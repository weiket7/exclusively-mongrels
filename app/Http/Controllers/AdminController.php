<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Config;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller
{
  public function index() {
    $config_service = new Config();
    if (Request::isMethod('post')) {
      $input = Input::all();
      $config_service->updateConfigAll($input);
      return redirect()->back()->with('message', 'Updated');
    }
    $data['configs'] = $config_service->getConfigAll();
    return view("admin.admin", $data);
  }

  public function requestAdoptadog() {
    $client = new Client();
    $res = $client->request('GET', 'http://www.adoptadog.sg/adopt/api-feed/exclusivelymongrels');
    $adopts_json = $res->getBody();
    $adopts_arr= json_decode($adopts_json);
    var_dump($adopts_arr);

    $adopt_service = new Adopt();
    $adopt_service->requestAdoptadog($adopts_arr);

  }
}