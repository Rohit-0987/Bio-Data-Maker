<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
class biodata extends Model
{
    use HasFactory;
    protected $table="biodatas";
    protected $primaryKey="biodata_id";
    function getid(){
        return $this->hasMany('App\Models\user','id','id');
    }
}
