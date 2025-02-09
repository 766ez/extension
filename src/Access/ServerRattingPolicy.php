<?php

namespace Zen\Test\Access;

use Zen\Test\ServerRatting;
use Flarum\User\Access\AbstractPolicy;
use Flarum\User\User;

class ServerRattingPolicy extends AbstractPolicy
{
    public function can(User $actor, string $ability, ServerRatting $model)
    {
        // See https://docs.flarum.org/2.x/extend/authorization.html#custom-policies for more information.
    }
}
