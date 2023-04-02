<?php

namespace App\Models;

use App\Models\Release;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Talent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'talents';

    public function release()
    {
        return $this->hasMany(Release::class);
    }
}
