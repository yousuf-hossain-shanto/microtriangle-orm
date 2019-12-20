<?php

namespace Microtriangle\ORM\WP;


use Microtriangle\ORM\Eloquent\Model;

class UserMeta extends Model
{
    protected $primaryKey = 'umeta_id';

    public $timestamps    = false;

    public function getTable()
    {
        return $this->getConnection()->db->prefix . 'usermeta';
    }
}