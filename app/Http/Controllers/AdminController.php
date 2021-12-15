<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\GuestBook;


class AdminController extends Controller
{
    public function index()
    {
        $r_prov = Http::get(route('api.prov'));
        $r_city = Http::get(route('api.city'));
        $prov   = collect(json_decode($r_prov))->pluck('nama','kode')->all();
        $city   = collect(json_decode($r_city))->pluck('nama','kode')->all();

        return view('admin',[
            'table' => GuestBook::all(),
            'prov'  => $prov,
            'city'  => $city
        ]);
    }

    public function login(Request $input)
    {
        return view('login');
    }

    public function logins(Request $input)
    {
        $user = [
            'username' => $input->post('user'),
            'password' => $input->post('pass')
        ];

        if (auth()->attempt($user)) {

            return redirect()->route('home');
        }

        return redirect('login');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('login');
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $in)
    {
        $db = new GuestBook;
        $db->first          = $in->post('name-f');
        $db->last           = $in->post('name-l');
        $db->organization   = $in->post('org');
        $db->address        = $in->post('address');
        $db->province       = $in->post('prov');
        $db->city           = $in->post('city');
        $db->save();

        return redirect()->route('home');
    }

    public function edit($item)
    {
        $r_prov = Http::get(route('api.prov'));
        $r_city = Http::get(route('api.city'));
        $prov   = collect(json_decode($r_prov))->pluck('nama','kode')->all();
        $city   = collect(json_decode($r_city))->pluck('nama','kode')->all();

        return view('edit',[
            'row'  => GuestBook::find($item),
            'prov' => $prov,
            'city' => $city
        ]);
    }

    public function update(Request $in, $id)
    {
        $db = GuestBook::find($id);
        $db->first          = $in->post('name-f');
        $db->last           = $in->post('name-l');
        $db->organization   = $in->post('org');
        $db->address        = $in->post('address');
        $db->province       = $in->post('prov');
        $db->city           = $in->post('city');
        $db->save();

        return redirect()->route('home');
    }

    public function del($item)
    {
        GuestBook::where('id', $item)->delete();

        return redirect()->route('home');
    }



    /*
        ------ API -------
    */
    public function apiProv()
    {
        $get = Http::get('https://d.kapanlaginetwork.com/banner/test/province.json');

        return response($get)->header('Content-Type','application/json');
    }

    public function apiCity()
    {
        $get = Http::get('https://d.kapanlaginetwork.com/banner/test/city.json');

        return response($get)->header('Content-Type','application/json');
    }
}
