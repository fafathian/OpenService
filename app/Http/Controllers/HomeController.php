<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_service = Service::where('name', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('alamat', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('kategory', 'LIKE', '%' . $request->cari . '%')
                ->get();
        } else {
            $data_service = Service::all();
        }


        return view('home', ['data_service' => $data_service]);
    }
    public function detail($id)
    {

        $data_service = Service::find($id);
        return view('detail', ['data_services' => $data_service]);
    }
}
