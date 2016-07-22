<?php

namespace Input;

class AbstractInput
{
    protected $mathProblem = null;

    public function setMathProblem( \stdClass $mathProblem )
    {
        $this->mathProblem = $mathProblem;
        return $this;
    }

    public function getMathProblem()
    {
        return $this->mathProblem;
    }

}
