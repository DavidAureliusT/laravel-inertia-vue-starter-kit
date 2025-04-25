<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

abstract class WireframeControllerContract extends Controller {
    abstract public function home(): InertiaResponse;
    // abstract function kemitraan(): InertiaResponse;
    // abstract function news(): InertiaResponse;
    // abstract function aboutUs(): InertiaResponse;
    // abstract function products(): InertiaResponse;
    // abstract function workshop(): InertiaResponse;
}

class WireframeController extends WireframeControllerContract
{
    public function home(): InertiaResponse
    {
        return Inertia::render('wireframe/Home');
    }
}
