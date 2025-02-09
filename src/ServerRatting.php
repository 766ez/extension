<?php

namespace Zen\Test;

use Flarum\Database\AbstractModel;
use Flarum\Database\ScopeVisibilityTrait;
use Flarum\Foundation\EventGeneratorTrait;

class ServerRatting extends AbstractModel
{
    // See https://docs.flarum.org/2.x/extend/models.html#backend-models for more information.
    
    protected $table = 'server_rattings';
}
