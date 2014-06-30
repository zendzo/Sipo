<?php

class Tasks extends \Eloquent {
	protected $fillable = ['name','duration','start','finish','summaries_id','user_id'];

    /**
     * @return mixed
     */
    public function summary()
    {
        return $this->belongsTo('Summaries');
    }

    public function user()
    {
        return $this->belongsTo('Users');
    }
}