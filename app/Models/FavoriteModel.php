<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteModel extends Model
{
    protected $table = 'favorite';
    protected $primaryKey = 'null';
    protected $useAutoIncrement = false;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_user', 'id_recipe'];
}