<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'name',
        'meaning',
        'synonyms',
        'mnemonics',
        'nepali_meaning',
        'sentences',
        'root_word',
        'extras'
    ];

    public function user() {
        $this->belongsTo('App\User', 'user_id', 'id');
    }
}
