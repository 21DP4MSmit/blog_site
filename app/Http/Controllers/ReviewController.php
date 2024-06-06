<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ReviewModel;
use App\Models\ReviewTagsModel;
use Auth;
use Str;


class ReviewController extends Controller
{
    public function reviews()
    {
        $data['getRecord'] = ReviewModel::getRecord();
        return view('backend.reviews.list', $data);
    }

    public function add_review()
    {
        $data['getCategory'] = CategoryModel::getCategory();
        return view('backend.reviews.add', $data);
    }

    public function insert_review(Request $request)
    {
        $save = new ReviewModel;
        $save->user_id          = Auth::user()->id;
        $save->title            = trim($request->title);
        $save->category_id      = trim($request->category_id);
        $save->description      = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keyword     = trim($request->meta_keyword);
        $save->is_publish       = trim($request->is_publish);
        $save->status           = trim($request->status);
        $save->save();
        $slug = Str::slug($request->title);
        $checkSlug = ReviewModel::where('slug', '=', $slug)->first();
        if(!empty($checkSlug))
        {
            $dbslug = $slug.'-'.$save->id;
        }
        else
        {
            $dbslug = $slug;
        }

        $save->slug = $dbslug;

        if(!empty($request->file('image_file')))
        {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $dbslug.'.'.$ext;
            $file->move('upload/review/', $filename);
            $save->image_file = $filename;
        }
        $save->save();

        ReviewTagsModel::InsertDeleteTag($save->id, $request->tags);

        return redirect('panel/reviews/list')->with('success', 'Review successfully created');
    }

    public function edit_review($id)
    {
        $data['getCategory'] = CategoryModel::getCategory();
        $data['getRecord'] = ReviewModel::getSingle($id);
        return view('backend.reviews.edit', $data);
    }

    public function update_review($id, Request $request)
    {
        $save = ReviewModel::getSingle($id);
        $save->title            = trim($request->title);
        $save->category_id      = trim($request->category_id);
        $save->description      = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keyword     = trim($request->meta_keyword);
        $save->is_publish       = trim($request->is_publish);
        $save->status           = trim($request->status);

        if(!empty($request->file('image_file')))
        {
            if(!empty($save->getImage()))
            {
               unlink('upload/review/'.$save->image_file);
            }

            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $save->slug.'.'.$ext;
            $file->move('upload/review/', $filename);
            $save->image_file = $filename;
        }
        $save->save();

        ReviewTagsModel::InsertDeleteTag($save->id, $request->tags);

        return redirect('panel/reviews/list')->with('success', 'Review successfully updated');
    }

    public function delete_review($id)
    {
        $save = ReviewModel::getSingle($id);
        $save->is_deleted = 1;
        $save->save();

        return redirect()->back()->with('success', 'Review successfully deleted');
    }
}
