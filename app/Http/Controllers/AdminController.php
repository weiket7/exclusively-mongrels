<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Config;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index() {
    $config_service = new Config();
    $data['configs'] = $config_service->getConfigAll();
    return view("admin.admin", $data);
  }

  public function adopt() {
    $adopt_service = new Adopt();
    $data['adopts'] = $adopt_service->getAdoptAll();
    return view("admin.adopt-admin");
  }

  public function requestAdoptadog() {
    $client = new Client();
    $res = $client->request('GET', 'http://www.adoptadog.sg/adopt/api-feed/exclusivelymongrels');
    $json = $res->getBody();
    $arr = json_decode($json);
    var_dump($arr);
  }
}