<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
use Auth;

class ReviewModel extends Model
{
    use HasFactory;

    protected $table = 'review';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecordSlug($slug)
    {
        return self::select('review.*', 'users.name as user_name', 'category.name as category_name', 'category.slug as category_slug')
            ->join('users', 'users.id', '=', 'review.user_id')
            ->join('category', 'category.id', '=', 'review.category_id')
            ->where('review.status', '=', 1)
            ->where('review.is_publish', '=', 1)
            ->where('review.is_deleted', '=', 0)
            ->where('review.slug', '=', $slug)
            ->first();
    }

    static public function getRecordFront()
    {
        $return = self::select('review.*', 'users.name as user_name', 'category.name as category_name', 'category.slug as category_slug')
            ->join('users', 'users.id', '=', 'review.user_id')
            ->join('category', 'category.id', '=', 'review.category_id');

            if(!empty(Request::get('q')))
            {
                $return = $return->where('review.title', 'like', '%'.Request::get('q').'%');
            }

        $return = $return->where('review.status', '=', 1)
            ->where('review.is_publish', '=', 1)
            ->where('review.is_deleted', '=', 0)
            ->orderBy('review.id', 'desc')
            ->paginate(8);

        return $return;
    }

    static public function getRecordFrontCategory($category_id)
    {
        $return = self::select('review.*', 'users.name as user_name', 'category.name as category_name', 'category.slug as category_slug')
            ->join('users', 'users.id', '=', 'review.user_id')
            ->join('category', 'category.id', '=', 'review.category_id')
            ->where('review.category_id', '=', $category_id)
            ->where('review.status', '=', 1)
            ->where('review.is_publish', '=', 1)
            ->where('review.is_deleted', '=', 0)
            ->orderBy('review.id', 'desc')
            ->paginate(8);

        return $return;
    }

    static public function getRecord()
    {
        $return = self::select('review.*', 'users.name as user_name', 'category.name as category_name', 'category.slug as category_slug')
                ->join('users', 'users.id', '=', 'review.user_id')
                ->join('category', 'category.id', '=', 'review.category_id');

                if(!empty(Auth::check()) && Auth::user()->is_admin != 1)
                {
                    $return = $return->where('review.user_id', '=', Auth::user()->id);
                }

                if(!empty(Request::get('id')))
                {
                    $return = $return->where('review.id', '=', Request::get('id'));
                }

                if(!empty(Request::get('username')))
                {
                    $return = $return->where('users.name', 'like', '%'.Request::get('username').'%');
                }

                if(!empty(Request::get('title')))
                {
                    $return = $return->where('review.title', 'like', '%'.Request::get('title').'%');
                }

                if(!empty(Request::get('category')))
                {
                    $return = $return->where('category.name', 'like', '%'.Request::get('category').'%');
                }

                if(!empty(Request::get('is_publish')))
                {
                    $is_publish = Request::get('is_publish');
                    if($is_publish == 100)
                    {
                        $is_publish = 0;
                    }

                    $return = $return->where('review.is_publish', '=', $is_publish);
                }

                if(!empty(Request::get('status')))
                {
                    $status = Request::get('status');
                    if($status == 100)
                    {
                        $status = 0;
                    }

                    $return = $return->where('review.status', '=', $status);
                }

                if(!empty(Request::get('start_date')))
                {
                    $return = $return->whereDate('review.created_at', '>=', Request::get('start_date'));
                }

                if(!empty(Request::get('end_date')))
                {
                    $return = $return->whereDate('review.created_at', '<=', Request::get('end_date'));
                }


                $return = $return->where('review.is_deleted', '=', 0)
                ->orderBy('review.id', 'desc')
                ->paginate(30);
        return $return;
    }

    public function getImage()
    {
        $imagePath = 'upload/review/' . $this->image_file;

        if (!empty($this->image_file) && file_exists(public_path($imagePath))) {
            return url($imagePath);
        } else {
            // Return a placeholder image if the file doesn't exist
            return url('upload/review/placeholder.jpg'); // Ensure placeholder.jpg exists in this directory
        }
    }

    public function getTag()
    {
        return $this->hasMany(ReviewTagsModel::class, 'review_id');
    }


    public function getComment()
    {
        return $this->hasMany(ReviewCommentModel::class, 'review_id')->orderBy('review_comment.id', 'desc');
    }
}
