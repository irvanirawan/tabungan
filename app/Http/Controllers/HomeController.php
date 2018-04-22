<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use App\Role;
use App\Permission;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Zizaco\Entrust\EntrustPermission;
use Auth;
use DB;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function datapetugas()
    {
        $data = DB::table('petugas')->get();
        return view('datapetugas',['data' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahdatapetugas(Request $req)
    {
        $iduser = DB::table('users')->insertGetId([
                                        'name'      => $req['nama'],
                                        'email'     => $req['username'],
                                        'password'  => bcrypt($req['pass'])
            ]);
        DB::table('role_user')->insert([
                                        'user_id'   => $iduser,
                                        'role_id'   => 1
            ]);
        DB::table('petugas')->insert([
                                        'id_user'    => $iduser,
                                        'id_petugas' => $req['idpetugas'],
                                        'nama'       => $req['nama'],
                                        'alamat'     => $req['alamat'],
                                        'telp'       => $req['telp']
            ]);
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletedatapetugas($id)
    {
        $petugas = DB::table('petugas')->where('id','=',$id)->first();        
        DB::table('role_user')->where('user_id','=',$petugas->id_user)->delete();
        DB::table('users')->where('id','=',$petugas->id_user)->delete();
        DB::table('petugas')->where('id','=',$id)->delete();
        Session::flash('deletepetugas','Data Berhasil Dihapus');
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editdatapetugas($id)
    {
        $data = DB::table('petugas')->where('id','=',$id)->first();
        $user = DB::table('users')->where('id','=',$data->id_user)->first();
        return view('editdatapetugas',['data'=>$data,'user'=>$user]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function simpandatapetugas(Request $req)
    {
        $petugas = DB::table('petugas')->where('id','=',$req['id'])->first();
        // dd($petugas);
        DB::table('petugas')->where('id','=',$req['id'])->update([
                                        'id_petugas' => $req['idpetugas'],
                                        'nama'       => $req['nama'],
                                        'alamat'     => $req['alamat'],
                                        'telp'       => $req['telp'],
            ]);
        if ($req['pass'] == null) {
            DB::table('users')->where('id','=',$petugas->id_user)->update([
                                        'name'      => $req['nama'],
                                        'email'     => $req['username']
            ]);
        } else {
            DB::table('users')->where('id','=',$petugas->id_user)->update([
                                        'name'      => $req['nama'],
                                        'email'     => $req['username'],
                                        'password'  => bcrypt($req['pass'])
            ]);
        }
                
        Session::flash('editpetugas','Data Berhasil Diedit');
        return redirect()->back();  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function datakelas()
    {
        $data = DB::table('kelas')->get();
        return view('datakelas',['data'=>$data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahkelas(Request $req)
    {
        DB::table('kelas')->insert([
                                        'id_kelas'  => $req['id_kelas'],
                                        'nama'      => $req['nama']
            ]);        
        Session::flash('tambahkelas','Data Berhasil Ditambah');
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletekelas($id)
    {
        DB::table('kelas')->where('id','=',$id)->delete();
        Session::flash('deletekelas','Data Berhasil Dihapus');
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editkelas($id)
    {
        $data = DB::table('kelas')->where('id','=',$id)->first();
        return view('editkelas',['data'=>$data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function simpankelas(Request $req)
    {
        DB::table('kelas')->where('id','=',$req['id'])->update([
                                        'id_kelas'  => $req['id_kelas'],
                                        'nama'      => $req['nama']
            ]);
                
        Session::flash('simpankelas','Data Berhasil Diedit');
        return redirect()->back();  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function nasabah()
    {
        $data = DB::table('nasabah')->get();
        return view('datanasabah',['data'=>$data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahnasabah(Request $req)
    {
        $iduser = DB::table('users')->insertGetId([
                                        'name'      => $req['nama'],
                                        'email'     => $req['username'],
                                        'password'  => bcrypt($req['pass'])
            ]);
        DB::table('role_user')->insert([
                                        'user_id'   => $iduser,
                                        'role_id'   => 1
            ]);
        DB::table('petugas')->insert([
                                        'id_user'    => $iduser,
                                        'id_petugas' => $req['idpetugas'],
                                        'nama'       => $req['nama'],
                                        'alamat'     => $req['alamat'],
                                        'telp'       => $req['telp']
            ]);
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletenasabah($id)
    {
        $petugas = DB::table('petugas')->where('id','=',$id)->first();        
        DB::table('role_user')->where('user_id','=',$petugas->id_user)->delete();
        DB::table('users')->where('id','=',$petugas->id_user)->delete();
        DB::table('petugas')->where('id','=',$id)->delete();
        Session::flash('deletepetugas','Data Berhasil Dihapus');
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editnasabah($id)
    {
        $data = DB::table('petugas')->where('id','=',$id)->first();
        $user = DB::table('users')->where('id','=',$data->id_user)->first();
        return view('editdatapetugas',['data'=>$data,'user'=>$user]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function simpannasabah(Request $req)
    {
        $petugas = DB::table('petugas')->where('id','=',$req['id'])->first();
        // dd($petugas);
        DB::table('petugas')->where('id','=',$req['id'])->update([
                                        'id_petugas' => $req['idpetugas'],
                                        'nama'       => $req['nama'],
                                        'alamat'     => $req['alamat'],
                                        'telp'       => $req['telp'],
            ]);
        if ($req['pass'] == null) {
            DB::table('users')->where('id','=',$petugas->id_user)->update([
                                        'name'      => $req['nama'],
                                        'email'     => $req['username']
            ]);
        } else {
            DB::table('users')->where('id','=',$petugas->id_user)->update([
                                        'name'      => $req['nama'],
                                        'email'     => $req['username'],
                                        'password'  => bcrypt($req['pass'])
            ]);
        }
                
        Session::flash('editnasabah','Data Berhasil Diedit');
        return redirect()->back();  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaksi()
    {
        $user = Auth::User()->email;
        return view('transaksi',['user' => $user]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporannasabah()
    {
        return view('laporanpernasabah');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporanperiode()
    {
        return view('laporanperperiode');
    }
}
