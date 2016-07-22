<?php

namespace Input;

class AbstractInput implements IInput
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

    abstract public function input( \stdClass $itput );
}
