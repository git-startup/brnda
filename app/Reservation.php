<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $table = 'reservation';
  protected $fillable = [
    'agar_id',
    'user_id',
    'start_date',
    'end_date',
    'status'
  ];

  public function user(){
      return $this->belongsTo(User::class,'user_id');
  }

  public function agar(){
      return $this->belongsTo(Agar::class,'agar_id');
  }

}
