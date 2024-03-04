<?php namespace App\Models;
use CodeIgniter\Model;

class Users extends Model
{
   protected $DBGroup = 'default';

   protected $table = 'tbluseraccount';
   protected $primaryKey = 'useraccountid';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['password','date_created'];

}