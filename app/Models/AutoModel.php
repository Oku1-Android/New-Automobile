<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    use HasFactory;

    protected $table = 'auto_models';

    protected $primarykey = 'id';

    protected $timestamp = true;
    protected $date = 'h:m:s';

    protected $fillable = ['name','founded','description','image_path','condition',
    'modelNumber','price','agentNumber', 'user_id'];
}