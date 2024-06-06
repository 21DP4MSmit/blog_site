<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewTagsModel extends Model
{
    use HasFactory;

    protected $table = 'review_tags';

    static public function InsertDeleteTag($review_id, $tags)
    {
        ReviewTagsModel::where('review_id', '=', $review_id)->delete();

        if(!empty($tags))
        {
            $tagsarray = explode(",", $tags);
            foreach($tagsarray as $tag)
            {
                $save = new ReviewTagsModel;
                $save->review_id = $review_id;
                $save->name = trim($tag);
                $save->save();
            }
        }
    }
}
