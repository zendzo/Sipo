<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 16/06/14
 * Time: 12:25
 */

namespace Gurindam\Forms;


use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator{

    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];
} 