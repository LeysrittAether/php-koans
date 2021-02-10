<?php

namespace Deg540\koans\Test;

use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase
{
    /**
     * @test
     **/
    public function declaresAnInt()
    {
        $variable = new Variable();
        $integerValue = $variable->declareAnInt();

        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     **/
    public function declaresABoolean()
    {
        $variable = new Variable();
        $booleanValue = $variable->declareABoolean();

        $this->assertIsBool($booleanValue);
    }

    /**
     * @test
     **/
    public function declaresAFloat()
    {
        $variable = new Variable();
        $floatValue = $variable->declareAFloat();

        $this->assertIsFloat($floatValue);
    }

    /**
     * @test
     **/
    public function declaresAnArray()
    {
        $variable = new Variable();
        $arrayValue = $variable->declareAnArray();

        $this->assertIsArray($arrayValue);
    }

    /**
     * @test
     **/
    public function declaresAnIntWithNullValue()
    {
        $variable = new Variable();
        $nullIntegerValue = $variable->declareAnIntWithNullValue();

        $this->assertEmpty($nullIntegerValue);
    }

    /**
     * @test
     **/
    public function assignsAVariableToAnotherVariable()
    {
        $variable1 = new Variable();
        $intValue1 = $variable1->declareAnInt();

        $this->assertEmpty($intValue1);

        $variable2 = newVariable();
        $intValue2 = $variable2->assignAVariableToAnotherVariable(intValue1);


    }

}
