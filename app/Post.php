<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{              
    public function getPaginateByLimit(int $limit_count = 5)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
