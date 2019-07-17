<?php

interface RenderInterface
{
    public function render();
}

class Form implements RenderInterface
{
    private $elements;

    public function addElement(RenderInterface $element)
    {
        $this->elements[] = $element;
    }

    public function render()
    {
        $html = '';

        $html = '<form>';

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }

        $html .= '</form>';

        return $html;
    }
}

class Label implements RenderInterface
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return '<label>' . $this->text . '</label><br>';
    }
}

class InputText implements RenderInterface
{
    private $name;
    private $type;

    public function __construct($name, $type = 'text')
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function render()
    {
        return '<input type="' . $this->type . '" name="' . $this->name . '" /><br>';
    }
}
