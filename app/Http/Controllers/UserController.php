<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\Items;
use App\Exports\ItemsExport;
use App\Exports\TransactionExport;
use App\Exports\TenTransactionExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {        
        return view('admin.dashboard');
    }
    
    public function all(Request $request)
    {
        
        $pagination     = 2;
        $data           = User::join('level_akses', 'level_akses.id', '=', 'users.level','LEFT')
        ->select('users.*', 'level_akses.name_level')
        ->orderBy('level_akses.name_level', 'ASC')
        ->get();
        return view('admin.user.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function add()
    {
        return view('admin.user.create');
    }

    public function tambah(Request $request)
    {
        $request->validate(User::$rules);
        $requests = $request->all();
        $requests['password']    = Hash::make($request->password);
        
        $user = User::create($requests);
        if($user){
            return redirect('user')->with('status', 'Berhasil mendaftar !');
        }

        return redirect('user')->with('status', 'Gagal Register Account !');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.user.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $d = User::find($id);
        if ($d == null){
            return redirect('admin/user/'. $id)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        $data = User::find($id)->update($req);
        if($data){
            return redirect('admin/user/'. $id)->with('status', 'Data pengguna Berhasil diedit !');
        }

        return redirect('admin/user/'. $id)->with('status', 'Gagal edit data pengguna!');
        
    }

    public function delete($id)
    {
        $data = User::find($id);
        if ($data == null) {
            return redirect('user')->with('status', 'Data tidak ditemukan !');
        }
        
        $delete = $data->delete();
        if ($delete) {
            return redirect('user')->with('status', 'Berhasil hapus Data Pengguna !');
        }
        return redirect('user')->with('status', 'Gagal hapus Data Pengguna !');
    }
}
