<?php
/**
 * Created by PhpStorm.
 * User: iemarjay
 * Date: 7/21/18
 * Time: 2:59 AM
 */

namespace App\Http\Controllers;


class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('farmers.index');
    }

    public function profile()
    {
        return view('farmers.profile');
    }
}