<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratKeterangan;
use App\Models\SuratKelahiran;
use App\Models\SuratKematian;
use App\Exports\ItemsExport;
use App\Exports\TransactionExport;
use App\Exports\TenTransactionExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function register()
    {
        return view('admin.register');
    }
        public function tes()
    {
        return view('admin.tes');
    }

    public function postRegister(Request $request)
    {
        $request->validate(User::$rules);
        $requests = $request->all();
        $requests['password']    = Hash::make($request->password);
        
        $user = User::create($requests);
        if($user){
            return redirect('register')->with('status', 'Berhasil mendaftar !');
        }

        return redirect('register')->with('status', 'Gagal Register Account !');
    }

    public function login()
    {
        return view('admin.login');

    }

    public function postLogin(Request $request)
    {
        $requests   = $request->all();
        $data       = User::where('email', $request['email'])->first();
        $cek        = Hash::check($requests['password'], $data->password);
        if($cek){
            Session::put('admin', $data->email);
            Session::put('admin_id', $data->id);
            return redirect('admin');
        }
        
            return redirect('login')->with('status', 'Gagal Login Admin !');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('status', 'Berhasil logout !');
    }

    public function kepala(Request $request)
    {   
        $m_chart1 = [
        'chart_title'           => 'Surat Kelahiran',
        'report_type'           => 'group_by_date',
        'group_by_period'       => 'month',
        'model'                 => 'App\Models\SuratKelahiran',
        'group_by_field'        => 'created_at',
        'aggregate_field'       => 'id_kelahiran',
        'chart_type' => 'line',
        'chart_color'           => '98,186,243',
        ];     
        $m_chart2 = [
        'chart_title'           => 'Surat Kematian',
        'report_type'           => 'group_by_date',
        'group_by_period'       => 'month',
        'model'                 => 'App\Models\SuratKematian',
        'group_by_field'        => 'created_at',
        'aggregate_field'       => 'id_kematian',
        'chart_type' => 'line',
        'chart_color'           => '221,82,76',
        ];     
        $m_chart3 = [
        'chart_title'           => 'Surat Keterangan',
        'report_type'           => 'group_by_date',
        'group_by_period'       => 'month',
        'model'                 => 'App\Models\SuratKeterangan',
        'group_by_field'        => 'created_at',
        'aggregate_field'       => 'id_keterangan',
        'chart_type' => 'line',
        'chart_color'           => '186,186,243',
        ];     
        $chart1 = new LaravelChart($m_chart1, $m_chart2, $m_chart3);
        return view('admin.home', compact('chart1'));

    }

    public function index(Request $request)
    {        
        return view('admin.dashboard');
    }
    public function export_items()
	{
		return Excel::download(new ItemsExport, 'barang.xlsx');
	}

    public function export_excel()
	{
		return Excel::download(new TransactionExport, 'transaksi.xlsx');
	}

    public function export_excel_ten()
	{
		return Excel::download(new TenTransactionExport, 'transaksi-10.xlsx');
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
            return redirect('user-data')->with('status', 'Berhasil mendaftar !');
        }

        return redirect('user-data')->with('status', 'Gagal Register Account !');
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
            return redirect('user-data/')->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        $data = User::find($id)->update($req);
        if($data){
            return redirect('user-data')->with('status', 'Data pengguna Berhasil diedit !');
        }

        return redirect('user-data/')->with('status', 'Gagal edit data pengguna!');
        
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
