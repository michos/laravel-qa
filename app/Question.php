<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    protected $fillable =['title', 'body'];
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function setTitleAttributes($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value, '-');

    }
}
