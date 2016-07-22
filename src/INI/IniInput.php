<?php

namespace Input;

class IniInput extends AbstractInput implements IInput
{
    public function input( \stdClass $itput )
    {
        $settings = \Calculator\DI\CalculatorProvider::config();
        $mathProblem = new \stdClass();
        if( $settings['dev']['application']['IAlgorithm'] == "Rpn" )
        {   
            $this->mathProblem->expression = $settings['dev']['application']['MathProblem'];
        }   
        else if( $settings['dev']['application']['IAlgorithm'] == "Soap" )
        {   
            $this->mathProblem->x = $settings['dev']['application']['Soap']['addX'];
            $this->mathProblem->y = $settings['dev']['application']['Soap']['addY'];
        }   
        return $this;
    }
}
