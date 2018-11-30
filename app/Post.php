<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{

  protected $fillable=['body','title','user_id','categorie_id'];
    public function comments(){
      
      return  $this->hasMany("App\Comment");


    }
    public function user(){
      
        return  $this->belongsTo("App\User");
  
  
      }
      public function categorie(){
      
        return  $this->belongsTo("App\Categorie");
  
  
      }
}
