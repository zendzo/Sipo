<?php

class Summaries extends \Eloquent {
	protected $fillable = ['name','duration','start','finish','project_id'];

    /**
     * @return mixed
     */
    public function task()
    {
        return $this->hasMany('Tasks');
    }
}