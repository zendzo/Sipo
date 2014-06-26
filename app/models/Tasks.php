<?php

class Tasks extends \Eloquent {
	protected $fillable = [];

    /**
     * @return mixed
     */
    public function summary()
    {
        return $this->belongsTo('Summaries');
    }
}