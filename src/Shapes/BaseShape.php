<?php

namespace Editor\Shapes;

abstract class BaseShape
{
    protected $color;
    protected $width_line;
    protected $params;

    public function setParams($input_params)
    {
        $this->params = $input_params;
    }

    protected function setColor($color)
    {
        $this->color = $color;
    }

    protected function setWidthLine($width_line)
    {
        $this->width_line = $width_line;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getWidthLine()
    {
        return $this->width_line;
    }
}