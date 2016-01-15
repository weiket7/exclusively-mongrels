<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Config;

class AdminController extends Controller
{
  public function index() {
    $config_service = new Config();
    $data['configs'] = $config_service->getConfigAll();
    return view("admin.index", $data);
  }

  public function adopt() {
    $adopt_service = new Adopt();
    $data['adopts'] = $adopt_service->getAdoptAll();
    return view("admin.adopt-index");
  }
}