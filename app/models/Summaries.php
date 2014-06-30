<?php

class Summaries extends \Eloquent {
	protected $fillable = ['name','duration','start','finish','projects_id','user_id'];

    /**
     * @return mixed
     */
    public function task()
    {
        return $this->hasMany('Tasks');
    }

    public function user()
    {
        return $this->belongsTo('Users');
    }
}