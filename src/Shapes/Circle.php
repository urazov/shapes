<?php

namespace Editor\Shapes;

class Circle extends BaseShape
{
    public function setParams($input_params)
    {
        /**
         * Example
         */
        $this->setColor($input_params['color']);
        $this->setWidthLine($input_params['line']);

        parent::setParams($input_params);
    }
}