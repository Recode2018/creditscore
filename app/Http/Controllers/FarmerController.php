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
use Keboola\Csv\CsvReader;
use Maatwebsite\Excel\Facades\Excel;

class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Farmer $farmer)
    {
        $farmers = $farmer->all();
//        dd($farmers);
        return view('farmers.index',compact('farmers'));
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
}