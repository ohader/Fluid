<?php
declare(ENCODING = 'utf-8');
namespace F3::Beer3::ViewHelpers;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package 
 * @subpackage 
 * @version $Id:$
 */
/**
 * [Enter description here]
 *
 * @package
 * @subpackage
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 */
class LinkViewHelper extends F3::Beer3::Core::AbstractViewHelper {
	
	public function initializeArguments() {
		
	}
	public function render() {
		$uriHelper = $this->variableContainer->get('view')->getViewHelper('F3::FLOW3::MVC::View::Helper::URIHelper');
		return $uriHelper->linkTo($this->renderChildren(), $this->arguments['action'], $this->arguments['arguments']);
	}
}


?>