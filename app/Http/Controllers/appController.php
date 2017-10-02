<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
class appController extends Controller
{
    public function home()
    {
        return view('html.homepage');
    }
    public function circular()
    {
         return view('html.circular');
    }
    /*public function show($click)
    {
         return view('html.circular');
    }*/
    public function financeAnDaccountes()
    {
        return view('html.finance&accounts');
    }
    public function ProgrammingAnDTesting()
    {
        return view('html.Programming&testing');
    }
    public function GraphicsAnDDesign()
    {
        return view('html.Graphics&designing');
    }
    public function ManagementAnDHR()
    {
        return view('html.Management&HR');
    }
    public function PlanningAnDanalysis()
    {
        return view('html.Planning&analysis');
    }
}
