<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $translatedAttributes = ['name'];

    protected $guarded = [];

    protected $hidden = ['translations'];

    public function products()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }
}
