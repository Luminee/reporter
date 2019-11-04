<?php

namespace Luminee\Reporter\Models;

use Luminee\Base\Models\BaseModel;

class Log extends BaseModel
{
    protected $table = 'reporter_log';

    protected $fillable = ['scope_id', 'account_id', 'action_id', 'object_type', 'object_id', 'content'];

    public function scope()
    {
        return $this->belongsTo('Luminee\Reporter\Models\Scope', 'scope_id', 'id');
    }

    public function action()
    {
        return $this->belongsTo('Luminee\Reporter\Models\Action', 'action_id', 'id');
    }
}