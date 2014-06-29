<?php

class Summaries extends \Eloquent {
	protected $fillable = ['name','duration','start','finish','projects_id'];

    /**
     * @return mixed
     */
    public function task()
    {
        return $this->hasMany('Tasks');
    }
}