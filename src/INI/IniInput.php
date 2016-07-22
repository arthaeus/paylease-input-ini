<?php

namespace Input;

class IniInput extends AbstractInput implements IInput
{
    public function input( \stdClass $itput )
    {
        $settings = \Calculator\DI\CalculatorProvider::config();
        $mathProblem = new \stdClass();
        if( get_class( $this->getICalculator() ) == "Algorithm\Rpn" )
        {   
            $this->mathProblem->expression = $settings['dev']['application']['MathProblem'];
        }   
        else if( get_class( $this->getICalculator() ) == "Algorithm\Soap" )
        {   
            $this->mathProblem->x = $settings['dev']['application']['Soap']['addX'];
            $this->mathProblem->y = $settings['dev']['application']['Soap']['addY'];
        }   
        return $this;
    }
}
