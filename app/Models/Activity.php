<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Activity extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    // protected $table = 'activities';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
       protected $fillable = [
        'name',
        'type_activity_id',
        'picture_1',
        'picture_2',
        'age_min',
        'age_max',
        'day',
        'description',
        'status',
        'hour_start',
        'hour_end',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/ 
    public function type_activity(){
        return $this->belongsTo('App\Models\Types_activity');
    }

    public function member_activities()
    {
        return $this->belongsToMany('App\Models\Person', 'member_activities','activity_id','person_id');
        // return $this->belongsToMany('App\Models\Person');
    }

    public function teachers_activities()
    {
        return $this->belongsToMany('App\Models\Person', 'teachers_activities','activity_id','person_id');
        // return $this->belongsToMany('App\Models\Person');
    }

    public function setPicture1Attribute($value)
    {
        $attribute_name = "picture_1";
        $disk = "uploads";
        $destination_path = "activity";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setPicture2Attribute($value)
    {
        $attribute_name = "picture_2";
        $disk = "uploads";
        $destination_path = "activity";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
