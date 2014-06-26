<?php

class Categories extends \Eloquent {

    protected $table = 'categories';
	protected $fillable = ['name','user_id'];

    public function project()
    {
        return $this->hasMany('Projects');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}