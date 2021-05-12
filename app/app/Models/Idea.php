<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory, Sluggable;

    const PAGINATION_COUNT = 10;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

   /* public function getStatusClasses()
    {
        $allStatuses = [
            'Open' => 'bg-gray',
            'Considering' => 'bg-purple text-white',
            'In progress' => 'bg-yellow text-white',
            'Implemented' => 'bg-green text-white',
            'Closed' => 'bg-red text-white',
        ];

//        if ($this->status->name === 'Open') {
//            return 'bg-gray';
//        } elseif ($this->status->name === 'Considering') {
//            return 'bg-purple text-white';
//        } elseif ($this->status->name === 'In progress') {
//            return 'bg-yellow text-white';
//        } elseif ($this->status->name === 'Implemented') {
//            return 'bg-green text-white';
//        } elseif ($this->status->name === 'Closed') {
//            return 'bg-red text-white';
//        }

        return $allStatuses[$this->status->name];
    }*/
}
