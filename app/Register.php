<?php
/**
 * Created by PhpStorm.
 * User: raskin
 * Date: 9/21/15
 * Time: 11:47 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Register extends Eloquent
{
    protected $guarded = array();
    protected $table = 'users'; // table name
    public $timestamps = 'false'; // to disable default timestamp fields

    // model function to store form data to database
    public static function saveFormData($data)
    {
        DB::table('users')->insert($data);
    }

}