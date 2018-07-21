<?php
/**
 * Created by PhpStorm.
 * User: iemarjay
 * Date: 7/21/18
 * Time: 2:59 AM
 */

namespace App\Http\Controllers;


use App\Classes\CreditScore;
use App\Farmer;

class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('farmers.index',  [
            'farmers' => factory(Farmer::class, 5)->make()
        ]);
    }

    public function profile()
    {
        return view('farmers.profile', [
            'farmer' => $farmer = factory(Farmer::class)->make(),
            'creditScore' => new CreditScore($farmer),
        ]);
    }
}