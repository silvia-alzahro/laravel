<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //memberi perintah model ini akan digunakan oleh
    //table tersebut
    //protected $tabel Post;{post sesuaikan dengan nama tabelnya}
}
