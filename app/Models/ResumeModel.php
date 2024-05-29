<?php

namespace App\Models;
use CodeIgniter\Model;

class ResumeModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'tanggal_lahir', 'alamat', 'hoby', 'email', 'phone'];
}