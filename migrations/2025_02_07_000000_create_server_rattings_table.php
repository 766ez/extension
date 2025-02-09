<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;


return [
    'up' => function(Builder $schema) {
        $schema->create('server_section', function(Blueprint $table)) {
            $table->increments('id');
            $table->string('title');
        }
    }

    'down' =>  function() {
        
    }
]
