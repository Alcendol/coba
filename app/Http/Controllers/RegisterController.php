<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function register(Request $request){

        $incomingFields = $request->validate([
            'NIK' => ['required', Rule::unique('registers', 'name')],
            'email' => ['required', 'email'],
            'name' => ['required', 'min:6', 'max:50'],
            'tempat-lahir' => ['required', 'min:4'],
            'tanggal-lahir' => ['required', 'date'],
            'jenis-kelamin' => 'required',
            'status-pernikahan' => 'required',
            'nomor-hp' => 'required',
            'alamat' => ['required', 'min:10']
        ]);

        //$incomingFields['tanggal-lahir'] = Carbon::parse($incomingFields['tanggal-lahir'])->format('D-M-Y');

        Register::create($incomingFields);
        return redirect()->route('upload-foto')->with('NIK', $incomingFields['NIK']);
    }

}
