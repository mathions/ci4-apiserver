<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'mhsnim';
    protected $allowedFields    = [
        'mhsnim', 'mhsnama', 'mhskelas', 'mhsnohp', 'mhsalamat'
    ];

}
