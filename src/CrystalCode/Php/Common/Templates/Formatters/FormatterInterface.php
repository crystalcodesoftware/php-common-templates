<?php

namespace CrystalCode\Php\Common\Templates\Formatters;

interface FormatterInterface
{

    /**
     * 
     * @param string $input
     * @return string
     */
    function format(string $input): string;

}
