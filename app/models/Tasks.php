<?php

class Tasks extends \Eloquent {
	protected $fillable = ['name','duration','start','finish','summaries_id'];

    /**
     * @return mixed
     */
    public function summary()
    {
        return $this->belongsTo('Summaries');
    }
}