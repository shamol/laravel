<?php

class Post extends Eloquent {
    protected $table = 'posts';

    public function user() {
        return $this->belongsTo('User');
    }

    public function comments() {
        return $this->belongsTo('Comment', 'post_id');
    }

}