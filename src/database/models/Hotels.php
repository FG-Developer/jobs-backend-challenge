<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'hotels';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'hotel_name'
  ];

  /**
   * Get Countries by hotel_id
   */
  public function countries()
  {
    return $this->hasOne('App\Countries', 'hotel_id', 'id');
  }
}
