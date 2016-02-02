<?php

namespace Editor\Responses;

use Editor\Shapes\BaseShape;

interface iEditorResponse
{
    public function getResult();

    /**
     * Converting shape object to convenient response format
     * @param BaseShape $shape
     */
    public function handleShape(BaseShape $shape);
}