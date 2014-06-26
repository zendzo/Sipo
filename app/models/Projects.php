<?php

class Projects extends \Eloquent {


    protected $table = 'projects';
    /**
     * @fillable array
     */
    protected $fillable = ['title','description','user_id','category_id','completed'];

    /**
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo('Categories');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}