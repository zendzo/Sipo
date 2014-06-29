<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 29/06/14
 * Time: 22:44
 */

namespace Gurindam\Forms;


use Laracasts\Validation\FormValidator;

class SummariesForm extends FormValidator{

    protected $rules = [
        'name'=>'required',
        'duration'=>'required',
        'start'=>'required',
        'finish'=>'required',
        'project_id'=>'required'
    ];

} 