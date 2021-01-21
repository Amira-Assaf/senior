<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use \App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB; 

class AdminUserController extends Controller
{
    public function __construct()
    {
        // create read update delete
        // $this->middleware(['permission:users-read'])->only('index');
        // $this->middleware(['permission:users-create'])->only('create');
        // $this->middleware(['permission:users-update'])->only('edit');
        // $this->middleware(['permission:users-delete'])->only('destroy');
        $this->middleware('auth');

    }//end of constructor

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $user = User::whereRoleIs('admin')->get();
        return view("admin.user.index")->with("user",$user);
        // return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  echo"create";
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        $request_data = $request->except(['password', 'password_confirmation', 'permissions']);
        $request_data['password'] = bcrypt($request->password);


        $user = User::create($request_data);
        $user->attachRole('admin');
        $permissions = [$request->permissions];
        foreach ($permissions as $p) {
            // code
            $user->permissions()->sync($p);
            }
        

        session()->flash('success', 'User Added Succsessfuly');
        // return redirect()->action('AdminUserController@index');/
        return redirect('/AdminUser');
        

    }//end of store


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
        //  echo"edit";
         $user =User::find($id);
         return view("admin.user.edit")->with("user",$user);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        $request_data = $request->except(['permissions']);
        // $user = User::whereId($id)->update($request_data);
        $user =User::find($id);
        $user->update($request_data);


        $permissions = [$request->permissions];
        foreach ($permissions as $p) {
            // code
            $user->permissions()->sync($p);
            }
        session()->flash('success', 'user Updated Succsessfuly');
        // return redirect()->action('AdminUserController@index');
        return redirect('/AdminUser');

    }//end of update


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if ($user->image != 'default.png') {

        //     Storage::disk('public_uploads')->delete('/user_images/' . $user->image);

        // }//end of if
        $user =user::find($id);
        $user->delete();
        session()->flash('success', 'User Deleted Successfully');
        // return redirect()->action('AdminUserController@index');
        return redirect('/AdminUser');

    }//end of destroy
}
