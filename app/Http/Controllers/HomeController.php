<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewModel;
use App\Models\CategoryModel;
use App\Models\PageModel;
use App\Models\ReviewCommentModel;
use Auth;

class HomeController extends Controller
{
    public function home()
    {
        $getPage = PageModel::getSlug('home');
        $data['meta_title']         = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_description']   = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keyword']       = !empty($getPage) ? $getPage->meta_keyword : '';
        $data['getRecord'] = ReviewModel::getRecordFront();
        return view('home', $data);
    }

    public function review()
    {
        $data['getRecord'] = ReviewModel::getRecordFront();
        $data['meta_title'] = 'Blogs';
        $data['getCategory'] = CategoryModel::getCategory();
        return view('review', $data);
    }

    public function reviewdetail($slug)
{
    $getCategory = CategoryModel::getSlug($slug);
    if (!empty($getCategory)) 
    {
        $data['meta_title'] = $getCategory->meta_title;
        $data['meta_description'] = $getCategory->meta_description;
        $data['meta_keyword'] = $getCategory->meta_keyword;
        $data['header_title'] = $getCategory->title;
        $data['getRecord'] = ReviewModel::getRecordFrontCategory($getCategory->id);
        $data['getCategory'] = CategoryModel::getCategory();
        return view('review', $data);
    } 
    else 
    {
        $getRecord = ReviewModel::getRecordSlug($slug);
        if (!empty($getRecord)) 
        {
            $data['getCategory'] = CategoryModel::getCategory();
            $data['getRecord'] = $getRecord;

            $data['meta_title'] = $getRecord->title;
            $data['meta_description'] = $getRecord->meta_description;
            $data['meta_keyword'] = $getRecord->meta_keyword;

            $data['user'] = Auth::check() ? Auth::user() : null;

            return view('review_detail', $data);
        } 
        else
        {
            abort(404);
        }
    }
}

    public function ReviewCommentSubmit(Request $request)
    {
        $save = new ReviewCommentModel;
        $save->user_id = Auth::user()->id;
        $save->review_id = $request->review_id;
        $save->comment = $request->comment;
        $save->save();

        return redirect()->back()->with('success', "Your comment successfully added");
    }


}
