<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostApi extends Model
{

    use HasFactory;

    protected $table = "post_api"; //Tabela posts

    protected $fillable = ['title','description']; // Campos de preenchimento
}
