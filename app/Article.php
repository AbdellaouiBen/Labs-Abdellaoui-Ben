<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categorie(){
       return $this->belongsTo('App\Categorie','categorie_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag','article_tag','article_id','tag_id');
    }
    public function comments(){
        return $this->hasMany('App\Commentaire','article_id');
    }
}
  

 