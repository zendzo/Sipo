<?php

class Summaries extends \Eloquent {
	protected $fillable = [];

    /**
     * @return mixed
     */
    public function task()
    {
        return $this->hasMany('Tasks');
    }
}