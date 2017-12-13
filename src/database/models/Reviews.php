<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'reviews';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'country_id',
    'hotel_id'
  ];

  /**
   * Get Reviews for Countries by country_id
   */
  public function countries()
  {
    return $this->hasOne('App\Countries', 'id', 'country_id');
  }

  /**
   * Get Reviews for hotels by hotel_id
   */
  public function hotels()
  {
    return $this->hasOne('App\Hotels', 'id', 'hotel_id');
  }
}
