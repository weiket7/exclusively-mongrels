<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Config;

class SiteController extends Controller
{
  public function index() {
    $adopt_service = new Adopt();
    $data["adopts"] = $adopt_service->getAdoptAvailable();
    $config_service = new Config();
    $data["configs"] = $config_service->getConfigAllSimple();
    return view("index", $data);
  }
}