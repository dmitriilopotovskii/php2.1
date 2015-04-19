<?php

abstract class AbstractController
{
    abstract protected function GetTemplatePatch();

   /* protected function render($template, $data)
    {
        extract( $data);
        require $this->GetTemplatePatch() . '/' . $template . '.php';
    }*/
}