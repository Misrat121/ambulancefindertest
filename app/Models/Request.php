<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ambulance;
use App\Models\User;

class Request extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function ambulance()
    {
        return $this->belongsTo(Ambulance::class,'ambulance_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function fromLocation()
    {
        return $this->belongsTo(Location::class,'from_location','id');
    }
    public function toLocation()
    {
        return $this->belongsTo(Location::class,'to_location','id');
    }
    
}
