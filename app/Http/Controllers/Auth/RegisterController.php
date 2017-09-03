<?php

namespace App\Http\Controllers\Auth;

use App\Peserta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Events\RegistrasiPeserta;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:peserta',
            'password' => 'required|string|min:6',
            'phone' => 'required|numeric|min:10',
            'asal' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'instansi' => 'required',
            'tgl_lahir' => 'required'
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $jenis_lomba = ($request->lomba == 'itfest') ? $request->kategoriitf : $request->lomba;

        event(new RegistrasiPeserta($user, $jenis_lomba));

        $this->guard()->login($user);

        return redirect()->route('pembayaran');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Peserta
     */
    protected function create(array $data)
    {
        return Peserta::create([
            'nama'          => $data['nama'],
            'email'         => $data['email'],
            'password'      => $data['password'],
            'no_telp'       => $data['phone'],
            'asal'          => $data['asal'],
            'alamat_tinggal'=> $data['alamat'],
            'tempat_lahir'  => $data['tempat_lahir'],
            'instansi'      => $data['instansi'],
            'tgl_lahir'     => $data['tgl_lahir']
        ]);
    }

    public function registerTransition(Request $request)
    {
        $this->validator($request->all())->validate();

        // menyimpan ke session untuk ditampilkan ke halaman review
        Session::flash('lomba', $request->lomba);
        Session::flash('kategoriitf', $request->kategoriitf);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        Session::flash('nama', $request->nama);
        Session::flash('instansi', $request->instansi);
        Session::flash('tempat_lahir', $request->tempat_lahir);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('asal', $request->asal);
        Session::flash('alamat', $request->alamat);
        Session::flash('phone', $request->phone);

        return redirect()->route('form.review');
    }

}
