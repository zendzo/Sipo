<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 30/06/14
 * Time: 0:58
 */

namespace Gurindam\Forms;


use Laracasts\Validation\FormValidator;

class TasksForm extends FormValidator{
    protected $rules = [
        'name'=>'required',
        'duration'=>'required',
        'start'=>'required',
        'finish'=>'required',
        'summaries_id'=>'required'
    ];
} 