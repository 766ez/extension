<?php

/*
 * This file is part of zen/test.
 *
 * Copyright (c) 2025 Zenichou.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Zen\Test;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less')
        ->route("/test", "test"),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),
    new Extend\ApiResource(Api\Resource\ServerRattingResource::class),
    (new Extend\Policy())
        ->modelPolicy(ServerRatting::class, Access\ServerRattingPolicy::class),

];
