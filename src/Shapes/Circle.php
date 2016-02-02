<?php

namespace Editor\Shapes;

class Circle extends BaseShape
{
    const TYPE_NAME = 'circle';

    public function setParams($input_params)
    {
        /**
         * Example
         */
        $this->setColor($input_params['params']['color']);
        $this->setWidthLine($input_params['params']['line']);

        parent::setParams($input_params);
    }
}