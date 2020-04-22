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
        return $this->belongsToMany('App\Tag','article__tags','article_id','tag_id');
    }
}
 

