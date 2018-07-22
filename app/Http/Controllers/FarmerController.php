<?php
/**
 * Created by PhpStorm.
 * User: iemarjay
 * Date: 7/21/18
 * Time: 2:59 AM
 */

namespace App\Http\Controllers;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Classes\CreditScore;
use App\Farmer;
use Maatwebsite\Excel\Facades\Excel;

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

    public function create()
    {
        return view('farmers.create');
    }

    public function profile()
    {
        return view('farmers.profile', [
            'farmer' => $farmer = factory(Farmer::class)->make(),
            'creditScore' => new CreditScore($farmer),
        ]);
    }

    public function import()
    {
        return view('farmers.import');
    }

    public function uploadSheet(\App\Http\Requests\Farmer $request)
    {
        $path = $request->file('farmers')->store('farmers');

        Excel::load(storage_path('app/'.$path), function($reader) {
            dd($reader->get());
        })->get();
        dd($path);
    }

    public function export(PDF $pdf) {
        $date   = now()->toDateString();

        return view('farmers.pdf', [
            'farmer' => $farmer = factory(Farmer::class)->make(),
            'creditScore' => new CreditScore($farmer),
        ]);
    }
}