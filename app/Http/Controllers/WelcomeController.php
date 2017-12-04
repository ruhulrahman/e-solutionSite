<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tbl_blog = DB::table('tbl_blog')
        //                 ->where('publication_status', 1)
        //                 ->get();
        $tbl_blog = DB::table('tbl_blog')
            ->join('tbl_category', 'tbl_blog.categoryId', '=', 'tbl_category.categoryId')
            ->join('admin_tbl', 'tbl_blog.authorId', '=', 'admin_tbl.admin_id')
            ->select('tbl_blog.*', 'tbl_category.categoryName', 'admin_tbl.admin_name')
            ->where('tbl_blog.publication_status', 1)
            ->orderBy('tbl_blog.blogId', 'desc')
            ->get();

        $recent_blog_tbl = DB::table('tbl_blog')
            ->where('publication_status', 1)
            ->orderBy('blogId', 'desc')
            ->limit(3)
            ->get();

        $home_content = view('pages.home_content')
                            ->with('BlogTable', $tbl_blog);
        $recent_blog = view("pages.recent_blog")
                            ->with('recentBlogTable', $recent_blog_tbl);
        $tbl_category = DB::table('tbl_category')
                            ->where('publication_status', 1)
                            ->orderby('categoryName', 'asc')
                            ->get();
        return view('home')->with('content', $home_content)
                            ->with('recent_blog', $recent_blog)
                            ->with('Category', $tbl_category);
    }


    public function blog_by_category($categoryId){
        $tbl_blog = DB::table('tbl_blog')
            ->join('tbl_category', 'tbl_blog.categoryId', '=', 'tbl_category.categoryId')
            ->join('admin_tbl', 'tbl_blog.authorId', '=', 'admin_tbl.admin_id')
            ->select('tbl_blog.*', 'tbl_category.categoryName', 'admin_tbl.admin_name')
            ->where('tbl_category.categoryId', $categoryId)
            ->orderBy('tbl_blog.blogId', 'desc')
            ->get();
        $home_content = view('pages.blog_by_category_page')
                            ->with('BlogTable', $tbl_blog);
        $recent_blog = view("pages.recent_blog");
        $tbl_category = DB::table('tbl_category')
                            ->where('publication_status', 1)
                            ->orderby('categoryName', 'asc')
                            ->get();
        return view('home')->with('content', $home_content)
                            ->with('recent_blog', $recent_blog)
                            ->with('Category', $tbl_category);
    }


    public function single_blogByBlogId($blogId){
        $tbl_blog = DB::table('tbl_blog')
            ->join('tbl_category', 'tbl_blog.categoryId', '=', 'tbl_category.categoryId')
            ->join('admin_tbl', 'tbl_blog.authorId', '=', 'admin_tbl.admin_id')
            ->select('tbl_blog.*', 'tbl_category.categoryName', 'admin_tbl.admin_name')
            ->where('tbl_blog.blogId', $blogId)
            ->get();

        $recent_blog_tbl = DB::table('tbl_blog')
            ->where('publication_status', 1)
            ->orderBy('blogId', 'desc')
            ->get();

        $home_content = view('pages.single_blog')
                            ->with('BlogTable', $tbl_blog);
        $recent_blog = view("pages.recent_blog")
                            ->with('recentBlogTable', $recent_blog_tbl);
        $tbl_category = DB::table('tbl_category')
                            ->where('publication_status', 1)
                            ->orderby('categoryName', 'asc')
                            ->get();
        return view('home')->with('content', $home_content)
                            ->with('recent_blog', $recent_blog)
                            ->with('Category', $tbl_category);
    }



    public function portfolio(){
        $portfolio = view('pages.portfolio');
        $recent_blog_tbl = DB::table('tbl_blog')
            ->where('publication_status', 1)
            ->orderBy('blogId', 'desc')
            ->get();
        $recent_blog = view("pages.recent_blog")
                            ->with('recentBlogTable', $recent_blog_tbl);
        return view('home')->with('content', $portfolio)
                            ->with('recent_blog', $recent_blog);
    }


    public function services(){
        $services = view('pages.services');
        $category = true;
        $recent_blog_tbl = DB::table('tbl_blog')
            ->where('publication_status', 1)
            ->orderBy('blogId', 'desc')
            ->get();
        $recent_blog = view("pages.recent_blog")
                            ->with('recentBlogTable', $recent_blog_tbl);
        return view('home')->with('content',$services)
                            ->with('category', $category)
                            ->with('recent_blog', $recent_blog);
    }

    public function contact(){
        $contact = view('pages.contact');
        return view('home')->with('content', $contact);
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
