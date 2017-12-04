<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AdminController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminId = Session::get('adminId');
        if($adminId != Null){
            return Redirect::to('/dashboard')->send();
        }

        return view('admin.login');
    }

    public function admin_login_check(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $query_result = DB::table('admin_tbl')
                        ->where('admin_email', $admin_email)
                        ->where('admin_password', $admin_password)
                        ->first();
        if($query_result){
            Session::put('adminName', $query_result->admin_name);
            Session::put('adminId', $query_result->admin_id);

            return Redirect::to('/dashboard');
        }else{
            Session::put('exception', 'User email and password not match!!');
            return Redirect::to('admin');
        }
    }


    public function category_add(){

        $query_result = DB::table('tbl_category')->get();

        $sidemenu = view('admin.pages.sidemenu');
        $category_add = view('admin.category_add')
                        ->with('categorySelect', $query_result);
        return view('admin.index')
                ->with('sideMenu', $sidemenu)
                ->with('Content', $category_add);
    }




    public function blog_post_add(){

        $tbl_category = DB::table('tbl_category')
                        ->where('publication_status', 1)
                        ->orderBy('categoryName', 'asc')
                        ->get();
        $sidemenu = view('admin.pages.sidemenu');
        $blog_post = view('admin.pages.blog_post_add')
                    ->with('CategoryTable', $tbl_category);
        return view('admin.index')
                ->with('sideMenu', $sidemenu)
                ->with('Content', $blog_post);
    }



    public function login(){
        return view('admin.login');
    }

    public function register(){
        return view('admin.register');
    }

    public function user_register(Request $request){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
