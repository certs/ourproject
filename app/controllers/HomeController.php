<?php
/**
 *
 * @author    Igor Chepurnoy <Chepurnoy@zfort.com>
 * @link      http://www.zfort.com/
 * @copyright Copyright &copy; 2000-2013 Zfort Group
 * @license   http://www.zfort.com/terms-of-use
 */
class HomeController extends BaseController {

	protected $layout = "layouts.main";
        
        /**
         * @author Igor Chepurnoy <Chepurnoy@zfort.com>
         * Main Index
         */
	public function index()
	{
		$this->layout->content =  View::make('index');
	}

}