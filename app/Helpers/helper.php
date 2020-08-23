<?php

if (! function_exists('findby')) :
    function findby($query)
    {
        return $query;     
    }
endif;

if (! function_exists('active_nav')) :
    function active_nav($routeName)
    {
        return request()->routeIs($routeName) ? 'active-nav-link' : '';
    }
endif;