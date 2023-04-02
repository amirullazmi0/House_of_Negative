<?php

namespace App\Models;

use App\Models\Release;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $guarded = ['id'];

    public function release()
    {
        return $this->hasMany(Release::class);
    }
}
