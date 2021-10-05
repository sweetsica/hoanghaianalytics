<?php

namespace App\Http\Controllers;

use App\Models\LinkManage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('back-end/login');
    }
    public function checkLogin(Request $request)
    {
        try{
            $info_user = User::where('email', $request->email)->first();
            if ($info_user) {
                if (Hash::check($request->password, $info_user->password)) {
                    $nameuser = $request->email;
                    $user_info = User::where('email', $nameuser)->first();
                    Session::flash('success', 'Đăng nhập thành công!');
                    Session::put('user_id', $user_info->id);
                    Auth::loginUsingId($user_info->id);
                    $link_datas = LinkManage::with('ShortLink')->latest()->get();
//                    return view('back-end/link/manage-link', compact('user_info','link_datas'));
                    return redirect()->route('shortlink')->with( ['user_info' => $user_info,'link_datas'=>$link_datas] );

                } else {
                    Session::flash('error', 'Đăng nhập thất bại MK!');
                    return view('back-end/login');
                }
            } else {
                Session::flash('error', 'Đăng nhập thất bại TK!');
                return view('back-end/login');
            }
        }catch (\Exception $error){
            Log::error($error);
            return redirect()->route('user.login.get');
        }
    }

    public function getRegister()
    {
        return view('back-end/register');
    }

    public function postRegister(Request $request)
    {
        $userdata['name']=$request->name;
        $userdata['email']=$request->email;
        $userdata['password']=bcrypt($request->password);
        User::create($userdata);
        return view('back-end/login');
    }

    public function userSessionClear()
    {
        Session::flush();
        return redirect()->route('user.login.get');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
