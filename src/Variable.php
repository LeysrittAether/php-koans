<?php


namespace koans;


class Variable
{

    /**
     * Variable constructor.
     */
    public function __construct()
    {
    }

    public function declareAnInt()
    {
        $intVariable = 1;
        return $intVariable;
    }

    public function declareABoolean()
    {
        $booleanVariable = true;
        return $booleanVariable;
    }

    public function declareAFloat()
    {
        $floatVariable = 1.0;
        return $floatVariable;
    }

    public function declareAnArray()
    {
        $arrayVariable = array("1", "2", "3");
        return $arrayVariable;
    }

    public function declareAnIntWithNullValue()
    {
        $nullIntVariable = NULL;
        return $nullIntVariable;
    }

    public function assignAVariableToAnotherVariable()
    {
        $nullIntVariable = NULL;
        return $nullIntVariable;
    }

}