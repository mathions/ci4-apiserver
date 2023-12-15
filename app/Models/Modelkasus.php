<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkasus extends Model
{
    protected $table            = 'kasus';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'id', 'kasus', 'waktukejadian', 'tempatkejadian', 'pelaku', 'korban', 'kronologi', 'waktupelaporan'
    ];

}
