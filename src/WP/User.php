<?php

namespace Microtriangle\ORM\WP;


use Microtriangle\ORM\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('Microtriangle\ORM\WP\UserMeta', 'user_id');
    }
}