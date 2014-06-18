<?php

App::missing(function($exception)
{
    return Response::make(
        View::make('errors/404')
    , 404);
});
