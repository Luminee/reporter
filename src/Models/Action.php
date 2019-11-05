<?php

namespace Luminee\Reporter\Models;

use Luminee\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Action extends BaseModel
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'reporter_action';

    protected $fillable = ['name', 'code', 'parent_id', 'sort', 'is_leaf', 'is_available'];
    
}