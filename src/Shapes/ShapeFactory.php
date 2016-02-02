<?php

namespace Editor\Shapes;

use Exception;

class ShapeFactory
{
    /**
     * @param array $params
     * @return BaseShape
     * @throws Exception
     */
    public static function getShape(array $params)
    {
        switch($params['type']){
            case 'circle' : return new Circle();
            case 'square' : return new Square();
            default : throw new Exception('input type is wrong');
        }
    }
}