<?php

namespace App\Http\Controllers;

use App\Models\All;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\User;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\DB;

class AllController extends Controller
{
    public function index()
    {

        if (!Auth::check()) {
            return redirect('login');
        } 

        $data = All::get();
        
        $data = [
            'data' => $data
        ];

        return view('all.index', $data);

    }

    public function create()
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('all.create');
    }

    public function edit($id)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $selected_data = All::where('id', $id)->first();

        $data = [
            'data' => $selected_data
        ];

        return view('all.edit', $data);
    }

    public function update(Request $request, $id)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $input = $request->all();


        All::where('id', $id)->update([
            'name' => $request->input('name'),
            'id_siswa' => $request->input('id_siswa'),
            'kelas' => $request->input('kelas')
        ]);

        return redirect('home');
    }

    public function store(Request $request) {

        if (!Auth::check()) {
            return redirect('login');
        }

        // $name = $request->input('name');
        // $id_siswa = $request->input('id_siswa');
        // $kelas = $request->input('kelas');

        All::create([
            'name' => $request->input('name'),
            'id_siswa' => $request->input('id_siswa'),
            'kelas' => $request->input('kelas')
        ]);

        return redirect('home');
    }

    public function destroy($id)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        All::where('id', $id)->delete();

        return redirect('home');
    }

    public function profile()
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('all.profile');
    }

}
