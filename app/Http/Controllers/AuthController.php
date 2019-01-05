<?php

namespace App\Http\Controllers;

use App\Model\File;
use App\Model\Roles;
use App\Model\UserAccount;
use App\Model\UserDetail;
use App\Model\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.auth.login');
    }

    public function storelogin(Request $request) {

            $data = [
                'username' => $request['username'],
                'password' => $request['password']
            ];
            if (auth()->guard('UserAccount')->attempt($data)) {
                $user = UserAccount::where('username', $data['username'])->first();
                $roles = UserRole::with('Roles')->where('userAccount_id', $user['id'])->first();

                if ($roles['Roles']['nama_role'] == 'pengusaha') {
                    return redirect()->route('pengusaha.index');
                } else {
                    return redirect()->route('pemasok.index');
                }

            }else {
                return redirect()->back()->with('error', 'Username dan Password Salah !');
            }
    }

    public function register() {
        return view('admin.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRegister(Request $request)
    {
        DB::beginTransaction();
        try {
          if ($request->hasFile('photo')) {
                $imageFile = $request->file('photo');
                $imageName = str_random(5) . '.' . $imageFile->getClientOriginalExtension();
                $request['photo'] = $imageName;
                $file = Image::make($imageFile)->resize(300, 200, function($constraint) {
                    $constraint->aspectRatio();
                })->encode('jpg')->save($imageName);
                Storage::put('public/User/'.$imageName, $file);
          }
          $userDetail = UserDetail::create([
            'nama_user' => $request['nama_user'],
            'nama_perusahaan' => $request['nama_perusahaan'],
            'alamat_perusahaan' => $request['alamat_perusahaan'],
            'bidang_perusahaan' => $request['bidang_perusahaan'],
            'deskripsi_perusahaan' => $request['deskripsi_perusahaan'],
            'email' => $request['email'],
            'photo' => $imageName,
            'no_telp' => $request['no_telp'],
          ]);
          $userAccount = UserAccount::create([
            'userDetail_id' => $userDetail->id,
            'username' => $request['username'],
            'password' => bcrypt($request['password'])
          ]);
            File::create([
                'nama_file' => $imageName,
                'type_file' => 'profile',
                'userAccount_id' => $userAccount->id
            ]);
          if ($request['level'] == 'pengusaha') {
            $role = Roles::where('nama_role', 'pengusaha')->first()->id;
          } else {
            $role = Roles::where('nama_role', 'pemasok')->first()->id;
          }
          $userRole = UserRole::create([
            'role_id' => $role,
            'userAccount_id' => $userAccount->id
          ]);
          DB::commit();

            if ($request['level'] == 'pengusaha') {
                Auth::guard('UserAccount')->loginUsingId($userAccount->id);
                dd('pengusaha');
            } else {
                Auth::guard('UserAccount')->loginUsingId($userAccount->id);
                dd('pemasok');
            }
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
        }
    }

    public function logout() {
        auth()->guard('UserAccount')->logout();
        return redirect()->route('auth.login');
    }
}
