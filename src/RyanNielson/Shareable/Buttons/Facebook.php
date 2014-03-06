<?php namespace RyanNielson\Shareable\Buttons;

use View;

class Facebook extends Button {
  
    /**
     * Called to render a social button.
     * @return string
     */
    public function render()
    {
        return View::make('shareable::facebook');
    }
}