<?php

namespace App\Models;

use App\Models\Talent;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Expr\FuncCall;

class Release extends Model
{
    use HasFactory;

    protected $table = 'releases';

    protected $guarded = ['id'];

    protected $with = ['category', 'talent'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return $query->where('talent_name', 'like', '%' . $keyword . '%')
                ->orWhere('title', 'like', '%' . $keyword . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }
}
