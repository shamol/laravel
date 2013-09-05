<?php

class Comment extends Eloquent {
    protected $table = 'comments';

    protected function User() {
        return $this->hasOne('user','id');
    }

    protected function Post() {
        return $this->hasOne('posts','id');
    }
}