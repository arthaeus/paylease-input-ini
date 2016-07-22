<?php

namespace Input;

class AbstractInput
{
    protected $mathProblem = null;

    /**
     * we will need access to the calculator in case the user changes the algorithm at runtime
     */
    protected $ICalculator = null;

    public function getICalculator()
    {
        return $this->ICalculator;
    }

    public function setICalculator( $ICalculator )
    {
        $this->ICalculator = $ICalculator;
    }

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
