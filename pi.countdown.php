<?php

class Plugin_countdown extends Plugin
{

    function index()
    {
        $date = strtotime($this->fetch_param('date'), time());

        $difference = $date - time() < 0 ? 0 : $date - time();

        $variables = array(
            'days'    => floor($difference/60/60/24),
            'hours'   => floor($difference/60/60),
            'minutes' => floor($difference/60),
            'seconds' => floor($difference) # kinda silly if it doesn't tick down.
        );

        return Parse::template($this->content, $variables);
    }

}