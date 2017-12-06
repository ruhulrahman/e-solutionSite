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
        // $adminId = Session::get('adminId');
        // if($adminId != Null){
        //     return Redirect::to('/dashboard')->send();
        // }
        $index_page_content = view('admin.pages.index_page_content');
        return view('admin.index')
                ->with('Content', $index_page_content);
    } 

    function index2(){
        $index_page_content = view('admin.index2');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function index3(){
        $index_page_content = view('admin.index3');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function form_page(){
        $index_page_content = view('admin.form_page');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function form_advanced(){
        $index_page_content = view('admin.form_advanced');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function form_validation(){
        $index_page_content = view('admin.form_validation');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function form_wizards(){
        $index_page_content = view('admin.form_wizards');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function form_upload(){
        $index_page_content = view('admin.form_upload');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function form_buttons(){
        $index_page_content = view('admin.form_buttons');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function general_elements(){
        $index_page_content = view('admin.general_elements');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function media_gallery(){
        $index_page_content = view('admin.media_gallery');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function typography(){
        $index_page_content = view('admin.typography');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function icons(){
        $index_page_content = view('admin.icons');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function glyphicons(){
        $index_page_content = view('admin.glyphicons');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function widgets(){
        $index_page_content = view('admin.widgets');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function invoice(){
        $index_page_content = view('admin.invoice');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function inbox(){
        $index_page_content = view('admin.inbox');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function calendar(){
        $index_page_content = view('admin.calendar');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function tables(){
        $index_page_content = view('admin.tables');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function tables_dynamic(){
        $index_page_content = view('admin.tables_dynamic');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function chartjs(){
        $index_page_content = view('admin.chartjs');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function chartjs2(){
        $index_page_content = view('admin.chartjs2');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function morisjs(){
        $index_page_content = view('admin.morisjs');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function echarts(){
        $index_page_content = view('admin.echarts');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function other_charts(){
        $index_page_content = view('admin.other_charts');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function fixed_sidebar(){
        $index_page_content = view('admin.fixed_sidebar');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function fixed_footer(){
        $index_page_content = view('admin.fixed_footer');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function e_commerce(){
        $index_page_content = view('admin.e_commerce');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function projects(){
        $index_page_content = view('admin.projects');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function project_detail(){
        $index_page_content = view('admin.project_detail');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function contacts(){
        $index_page_content = view('admin.contacts');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function profile(){
        $index_page_content = view('admin.profile');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function page_403(){
        $index_page_content = view('admin.page_403');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function page_404(){
        $index_page_content = view('admin.page_404');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function page_500(){
        $index_page_content = view('admin.page_500');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function plain_page(){
        $index_page_content = view('admin.plain_page');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function pricing_tables(){
        $index_page_content = view('admin.pricing_tables');
        return view('admin.index')
                ->with('Content', $index_page_content);
    }

    function level2(){
        $index_page_content = view('admin.level2');
        return view('admin.index')
                ->with('Content', $index_page_content);
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
