<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class SuperAdminController extends Controller
{
    
    public function __construct(){
        $adminId = Session::get('adminId');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminId = Session::get('adminId');
        if($adminId == Null){
            return Redirect::to('/admin')->send();
        }
        

        $sidemenu = view('admin.pages.sidemenu');
        $index_page_content = view('admin.pages.page_content');
        return view('admin.index')
                ->with('sideMenu', $sidemenu)
                ->with('Content', $index_page_content);
    }



    public function category_create(Request $request){
        $categoryName = $request->categoryName;
        $publication_status = $request->publication_status;

        $query_result = DB::table('tbl_category')->insert(
                            [
                            'categoryName' => $categoryName, 
                            'publication_status' => $publication_status
                            ]
 
                        );

        if($query_result){
            Session::put('message', 'Category successfully created');  

            return Redirect::to('/admin/category_add');
        }else{
            Session::put('exception', 'Data not inserted!!');
        }
    }



    public function categoryEditById($categoryId){
        $query_result = DB::table('tbl_category')
                    ->where('categoryId', $categoryId)
                    ->get();
        $sidemenu = view('admin.pages.sidemenu');
        $category_manage = view('admin.category_update')
                            ->with('categorySelect', $query_result);
        return view('admin.index')
                    ->with('sideMenu', $sidemenu)
                    ->with('Content', $category_manage);

    }



    public function category_udpate(Request $request){
        $data = array();
        $data['categoryName'] = $request->categoryName;
        $data['publication_status'] = $request->publication_status;
        $categoryId = $request->categoryId;

        $query_result = DB::table('tbl_category')
                        ->where('categoryId', $categoryId)
                        ->update($data);

        if($query_result){
            Session::put('message', 'Category successfully updated');  

            return Redirect::to('/admin/category-edit/'.$categoryId);
        }else{
            Session::put('exception', 'Data not updated!!');
        }
    }


    public function unpublish_category($categoryId){
        $update = DB::table('tbl_category')
                    ->where('categoryId', $categoryId)
                    ->update(['publication_status' => 0]);
        if($update){
            return Redirect::to('/admin/category_manage');
        } 
    }


    public function publish_category($categoryId){
        $update = DB::table('tbl_category')
                    ->where('categoryId', $categoryId)
                    ->update(['publication_status' => 1]);
        if($update){
            return Redirect::to('/admin/category_manage');
        }
    }


    public function category_delete($categoryId){
        $delete = DB::table('tbl_category')
                    ->where('categoryId', $categoryId)->delete();
        if($delete){
            Session::put('message', 'Category deleted successfully!!');

            return Redirect::to('/admin/category_manage');
        }else{
            Session::put('message', 'Category not deleted!!');
        }
    }


    public function category_select(){

        $query_result = DB::table('tbl_category')->get();
        return $query_result;
    }


    public function category_manage(){
        $query_result = DB::table('tbl_category')->get();
        
        $sidemenu = view('admin.pages.sidemenu');
        $category_manage = view('admin.category_manage')
                            ->with('categorySelect', $query_result);
        return view('admin.index')
                    ->with('sideMenu', $sidemenu)
                    ->with('Content', $category_manage);
                   
    }



    public function blog_create(Request $request){

        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_description'] = $request->blog_description;
        $data['publication_status'] = $request->publication_status;
        $data['categoryId'] = $request->categoryId;
        $data['authorId'] = $request->authorId;
        $image = $request->file('blog_img');

        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path = 'uploads/';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path, $image_fullname);
            if($success){
                $data['blog_img'] = $image_url;
                $insert_query = DB::table('tbl_blog')->insert($data);
                if($insert_query){
                    Session::put('message', 'Blog created successfully!');
                    return Redirect::to('/admin/blog_post_add');
                }else{
                    Session::put('exception', 'Blog didn\'t created successfully!');
                    return Redirect::to('/admin/blog_post_add'); 
                }
            }
        }else{
            $insert_query = DB::table('tbl_blog')->insert($data);
            if($insert_query){
                Session::put('message', 'Blog created successfully!');
                return Redirect::to('/admin/blog_post_add');
            }else{
                Session::put('exception', 'Blog didn\'t created successfully!');
                return Redirect::to('/admin/blog_post_add'); 
            }
        }
    }




    public function blog_post_manage(){
        $tbl_blog = DB::table('tbl_blog')->get();
        $sidemenu = view('admin.pages.sidemenu');
        $blog_post_manage = view('admin.pages.blog_post_manage')
                    ->with('BlogTable', $tbl_blog);
        return view('admin.index')
                ->with('sideMenu', $sidemenu)
                ->with('Content', $blog_post_manage);
    }



    public function unpublish_blog($blog_id){
        $update = DB::table('tbl_blog')
                    ->where('blogId', $blog_id)
                    ->update(['publication_status' => 0]);
        if($update){
            return Redirect::to('/admin/blog_post_manage');
        } 
    }



    public function publish_blog($blog_id){
        $update = DB::table('tbl_blog')
                    ->where('blogId', $blog_id)
                    ->update(['publication_status' => 1]);
        if($update){
            return Redirect::to('/admin/blog_post_manage');
        } 
    }


    public function blog_delete($blog_id){
        $delete = DB::table('tbl_blog')
                    ->where('blogId', $blog_id)
                    ->delete();
        if($delete){
            Session::put('message', 'Blog deleted successfully!!');

            return Redirect::to('/admin/blog_post_manage');
        }else{
            Session::put('message', 'Blog not deleted!!');
        }
    }


    public function blog_edit($blogId){
        $tbl_category = DB::table('tbl_category')
                            ->orderby('categoryName', 'asc')
                            ->get();

        $BlogTable = DB::table('tbl_blog')
            ->join('tbl_category', 'tbl_blog.categoryId', '=', 'tbl_category.categoryId')
            ->join('admin_tbl', 'tbl_blog.authorId', '=', 'admin_tbl.admin_id')
            ->select('tbl_blog.*', 'tbl_category.categoryName', 'admin_tbl.admin_name')
            ->where('tbl_blog.blogId', $blogId)
            ->get();
        $sidemenu = view('admin.pages.sidemenu');
        $blog_update_page = view('admin.pages.blog_update')
                            ->with('BlogTable', $BlogTable)
                            ->with('CategoryTable', $tbl_category);
        return view('admin.index')
                    ->with('sideMenu', $sidemenu)
                    ->with('Content', $blog_update_page);
    }

    public function blog_update(Request $request){
        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_description'] = $request->blog_description;
        $data['publication_status'] = $request->publication_status;
        $data['categoryId'] = $request->categoryId;
        $image = $request->file('blog_img');
        $blogId = $request->blogId;

        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path = 'uploads/';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path, $image_fullname);
            if($success){
                $data['blog_img'] = $image_url;
                $update = DB::table('tbl_blog')
                            ->where('blogId', $blogId)
                            ->update($data);
                if($update){
                    Session::put('message', 'Blog updated successfully!');
                    return Redirect::to('/admin/blog-edit/'.$blogId);
                }else{
                    Session::put('exception', 'Blog didn\'t updated successfully!');
                    return Redirect::to('/admin/blog-edit/'.$blogId); 
                }
            }
        }else{
            $update = DB::table('tbl_blog')
                        ->where('blogId', $blogId)
                        ->update($data);
            if($update){
                Session::put('message', 'Blog updated successfully!');
                return Redirect::to('/admin/blog-edit/'.$blogId);
            }else{
                Session::put('exception', 'Blog didn\'t updated successfully!');
                return Redirect::to('/admin/blog-edit/'.$blogId);
            }
        }
    }



    public function logout(){
        Session::put('adminName', null);
        Session::put('adminId', null);
        Session::put('message', 'You are successfully logout');
        return Redirect::to('/admin');
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
