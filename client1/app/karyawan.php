<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class karyawan extends Model
{


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
      'nama', 'Nip', 'alamat', 'HP', 'email',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
}
