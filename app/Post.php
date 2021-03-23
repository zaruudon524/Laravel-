<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{              
    public function getByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
}