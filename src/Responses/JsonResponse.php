<?php

namespace Editor\Responses;

use Editor\Shapes\BaseShape;

class JsonResponse implements iEditorResponse
{
    private $result = array();

    public function getResult()
    {
        /**
         * Example
         */
        $response = json_encode($this->result);
        return $response;
    }

    public function handleShape(BaseShape $shape)
    {
        /**
         * Example
         */
        $result['type'] = $shape->getTypeName();
        $result['color'] = $shape->getColor();
        $result['line'] = $shape->getWidthLine();

        $this->result[] = $result;
    }
}