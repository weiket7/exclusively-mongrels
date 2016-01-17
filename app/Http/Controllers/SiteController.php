<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class SiteController extends Controller
{
  public function index() {

    $adopt_service = new Adopt();
    $data["adopts"] = $adopt_service->getAdoptAvailable();
    $config_service = new Config();
    $data["configs"] = $config_service->getConfigAllSimple();
    return view("index", $data);
  }

  public function contact() {
    if (Request::isMethod('post')) {
      $input = Input::all();

      $data = [
        'name'=>$input['name'],
        'email'=>$input['email'],
        'content'=>$input['content'],
        'mobile'=>$input['mobile']
      ];
      Mail::send('contact-email', $data, function ($message) use ($data) {
        $message->from($data['email'], $data['name'])->to('adoptadogsg7@gmail.com')->subject(substr($data["content"],0,50));
      });
    }

  }
}