<?php namespace RyanNielson\Shareable\Buttons;

use View;

class Facebook extends Button {
  
    /**
     * An array of default options for the twitter button.
     * @var Array
     */
    protected $defaultOptions = array(
        'url' => '',
        'width' => 100,
        'type' => 'button_count'
    );
  
    /**
     * Called to render a social button.
     * @return string
     */
    public function render($options = array())
    {
        $options = array_merge($this->defaultOptions, $options);
        return $this->view->make('shareable::facebook', array('options' => $options));
    }
}