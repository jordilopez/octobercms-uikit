<?php namespace Sensecomentaris\Uikit\Components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Uikit extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Uikit',
            'description' => ''
        ];
    }    
    
    public function onRun()
    {
		$this->addCss('/plugins/sensecomentaris/uikit/assets/css/uikit.min.css');
        $this->addJs('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        $this->addJs('/plugins/sensecomentaris/uikit/assets/js/uikit.min.js');    
   	}
    
}
    