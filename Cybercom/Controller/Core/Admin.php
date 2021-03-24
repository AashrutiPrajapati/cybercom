<?php

namespace Controller\Core;
\Mage::loadFileByClassName('Controller\Core\Abstracts');

class Admin extends Abstracts
{
	// protected $request = NULL;
	// protected $layout = NULL;
	// protected $message = NULL;

	// public function __construct() {
	// 	$this->setRequest();
	// 	$this->setLayout();
	// 	$this->setMessage();
		
	// }
	// public function setRequest($request = null) {
	// 	$this->request = \Mage::getModel('Model\Core\Request');
	// 	return $this;
	// }
	// public function getRequest() {
	// 	if(!$this->request){
	// 		$this->setRequest();
	// 	}
	// 	return $this->request;
	// }

	public function setLayout(\Block\Admin\Layout $layout = null) {
		if (!$layout) {
			$layout = \Mage::getBlock('Block\Admin\Layout');
		}
		$this->layout = $layout;
		return $this;
	}

	// public function getLayout() {
	// 	if(!$this->layout){
	// 		$this->setLayout();
	// 	}
	// 	return $this->layout;
	// }

	// public function toHtmlLayout() {
	// 	echo $this->getLayout()->toHtml();
	// }

	public function setMessage($message = null)
	{
		$this->message = \Mage::getModel('Model\Admin\Message');
		return $this;
	}

	// public function getMessage()
	// {
	// 	if(!$this->message){
	// 		$this->setMessage();
	// 	}
	// 	return $this->message;
	// }

	// public function responseHtml($grid='', $left='')
	// {
	// 	$response = [
	// 		'status' => 'Success',
	// 		'message' => 'I am excellent',
	// 		'element' => [
	// 			[
	// 				'selector' => '#contentHtml',
	// 				'html' => $grid
	// 			],
	// 			/*[
	// 				'selector' => '#messageHtml',
	// 				'html' => Mage::getModel('Model_Admin_Message')->toHtml();  
	// 			],*/
	// 			[
	// 				'selector' => '#left',
	// 				'html' => $leftside 
	// 			]
	// 		]
	// 	];
	// 	header('Content-Type: application/json');
	// 	echo json_encode($response);
	// }

	// public function redirect($actionName = Null, $controllerName = Null, $params = Null, $resetParams = Null) {
	// 	if(actionName == Null) {
	// 		$actionName	= $_GET['a'];
	// 	}
	// 	if($controllerName == Null) {
	// 		$controllerName = $_GET['c'];
	// 	}
	// 	header("Location:{$this -> getUrl($actionName,$controllerName,$params,$resetParams)}");
	// 	exit(0);
	// }

	// public function getUrl($actionName = Null, $controllerName = Null, $params = Null, $resetParams = false) {
	// 	$final = $_GET;
	// 	if($resetParams) {
	// 		$final = [];
	// 	}
	// 	if($actionName == Null) {
	// 		$actionName	= $_GET['a'];
	// 	}
	// 	if($controllerName == Null) {
	// 		$controllerName = $_GET['c'];
	// 	}
	// 	if($params == Null) {
	// 		$params = [];
	// 	}

	// 	$final['c'] = $controllerName;
	// 	$final['a'] = $actionName;

	// 	$final = array_merge($final,$params);
	// 	$queryString = http_build_query($final);
	// 	unset($final);
	// 	return "http://localhost/Cybercom/index.php?{$queryString}";
	// }
}

?>