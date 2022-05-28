<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

class DefaultController extends Controller
{
    public $config;

    public function __construct()
    {
        $this->config = Config::get('constants');
    }

    /**
     * @param Request request
     * @return View
     */
    public function index(Request $request) :View
    {
        $data = $request->all();
        return view('index', $data);
    }
}
