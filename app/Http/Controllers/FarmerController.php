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
use Keboola\Csv\CsvReader;

class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Farmer $farmer)
    {
        $farmers = $farmer->all();

        return view('farmers.index',compact('farmers'));
    }

    public function create()
    {
        return view('farmers.create');
    }

    public function profile(Farmer $farmer)
    {
        return view('farmers.profile', [
            'farmer' => $farmer,
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

        $farmers = new CsvReader(storage_path('app/'.$path));

        $fields = $farmers->getHeader();

        foreach($farmers as $key => $row) {
            if($key === 0) continue;
            Farmer::create(array_combine($fields,$row));
        }

        @unlink(storage_path('app/'.$path));

        return redirect()->route('farmers')->with('info','Successfully imported farmers data');
    }

    public function export(Farmer $farmer) {
        return view('farmers.pdf', [
            'farmer' => $farmer,
            'creditScore' => new CreditScore($farmer),
        ]);
    }

    public function search(Request $request,Farmer $farmer)
    {
        $type = $request->get('type');
        $term = $request->get('term');

        $farmer = $farmer->where($type,$term)->first();

        if(!$farmer) return redirect()->route('farmers')->with('info','No match found');

        return view('farmers.profile', [
            'farmer' => $farmer,
            'creditScore' => new CreditScore($farmer),
        ]);
    }

    public function edit(Farmer $farmer)
    {
        return view('farmers.edit',compact('farmer'));
    }
}