<?php

namespace CrystalCode\Php\Common\Templates;

interface TemplateContextInterface
{

    /**
     * 
     * @return string
     */
    function getRendered(): string;

    /**
     * 
     * @param string $rendered
     * @return TemplateContextInterface
     */
    function withRendered(string $rendered = null): TemplateContextInterface;

    /**
     * 
     * @return bool
     */
    function hasTemplate(): bool;

    /**
     * 
     * @param TemplateInterface $template
     * @return void
     */
    function addTemplate(TemplateInterface $template): void;

    /**
     * 
     * @return TemplateInterface
     */
    function popTemplate(): TemplateInterface;

    /**
     * 
     * @param string $name
     * @return mixed
     */
    function getValue(string $name);

    /**
     * 
     * @param string $name
     * @param mixed $value
     * @return TemplateContextInterface
     */
    function withValue(string $name, $value): TemplateContextInterface;

    /**
     * 
     * @param iterable $values
     * @return TemplateContextInterface
     */
    function withValues(iterable $values): TemplateContextInterface;
}