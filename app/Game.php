<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  
  // protected $table = 'table_name';

  protected $casts = [
    'addons' => 'array',
  ];

}
