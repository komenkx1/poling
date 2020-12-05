<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    function index()
    {
        return view('register2');
    }

    function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = User::select("nim", "name")
                ->where('nim', 'LIKE', "{$query}")
                ->get();
            $output = '<span>Mahasiswa : </span> <ul class="ids" style="display:block;width:100%;background-color:#f0f0f0;padding:5px;border-radius:5px;margin-bottom:10px;">';
            foreach ($data as $row) {
                $output .= '
                <li class="p-2"><a href="#" class="text-danger">' . $row->nim . " - " . $row->name . '</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {

        $this->validate($request, [
            'nim' => 'required',
            'password' => 'required|min:2|max:30',
            'file_url' => 'required|max:2000'
        ]);

        $kode_prodi = substr($request->nim, 4, -3);
        $prodi = Prodi::where('kode_prodi', $kode_prodi)->first();

        //buat dapetin user dari nim yang di input
        $user = User::where('nim', $request->nim)->first();

        $user->prodi_id = $prodi->id;
        $user->password = Hash::make($request->password);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->user_id = $user->id;

        $slug = Str::slug($request->nim);
        if ($request->file('file_url')) {
            $gambar = $request->file('file_url');
            $urlgambar = $gambar->storeAs("img/mahasiswa", "{$slug}.{$gambar->extension()}");
            $mahasiswa->file_url = $urlgambar;
        }

        if (
            $user->save() &&
            $mahasiswa->save()
        ) {
            echo 'berhasil';
            $credentials = $request->only('nim', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('home');
            }

            echo 'tapi login gagal';
        }
    }
}
