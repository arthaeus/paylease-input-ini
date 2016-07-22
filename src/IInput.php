<?php

namespace Input;

interface IInput
{
    /**
     * grabs input to pass to an algorithm from different sources.  maybe an ini file, maybe from the web, or other places in the future.
     */
    public function input( \stdClass $input );
}
