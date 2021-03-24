<?php
namespace Block\Core;


class Template 
{
    protected $template = NULL;
    protected $controller = NULL;
    protected $children = [];
    protected $message = NULL;
    protected $url = Null;
    protected $request = NULL;

    public function __construct()
    {
        $this->setUrlObject();
        $this->setRequest();
    }
    
    public function setTemplate($template = null) {
        $this->template = $template;
        return $this;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function toHtml(){
        ob_start();
        require_once $this->getTemplate();
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function setController(\Controller\Core\Admin $controller = null)
    {
        $this->controller = $controller;
        return $this;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setMessage($message = null)
	{
		$this->message = \Mage::getModel('Model\Admin\Message');
		return $this;
	}

	public function getMessage()
	{
		if(!$this->message){
			$this->setMessage();
		}
		return $this->message;
	}

    public function setUrlObject($url = null) {
        if(!$url) {
            $url = \Mage::getModel('Model\Core\Url');
        }
        $this->url = $url;
        return $this;
    }

    public function getUrlObject() {
        if(!$this->url) {
            $this->setUrlObject();
        }
        return $this->url;
    }

    public function setRequest($request = null)
    {
        $this->request = \Mage::getModel('Model\Core\Request');
        return $this;
    }

    public function getRequest() 
    {
        if(!$request){
            $this->setRequest();
        }
        return $this->request;
    }

    public function getUrl($actionName = null , $controllerName = null , $params = [] , $resetParams = false)
    {
        return $this->getUrlObject()->getUrl($actionName,$controllerName,$params,$resetParams);
    }

    public function setChildren(array $children = []) {
        $this->children = $children;
        return $this;
    }

    public function getChildren() {
        return $this->children;
    }

    public function addChild(\Block\Core\Template $child=null, $key = null) {
        if (!$key) {
            $key = get_class($child);
        }
        $this->children[$key] = $child;
        return $this;
    }

    public function getChild($key) {
        if (!array_key_exists($key, $this->children)) {
            return null;
        }
        return $this->children[$key];
    }

    public function removeChild() {
        if (array_key_exists($key, $this->children)) {
            unset($this->children[$key]);
        }
        return $this;
    }

    public function createBlock($className) {
        return \Mage::getBlock($className);
    }

    public function baseUrl($subUrl = null){
        return $this->getUrlObject()->baseUrl($subUrl);
    }

    public function setDefaultTab($defaultTab)
    {
        $this->defaultTab = $defaultTab;
        return $this;
    }
    public function getDefaultTab()
    {
        return $this->defaultTab;
    }
   
    public function setTabs(array $tabs = []) {
        $this->tabs = $tabs;
        return $this;
    }

    public function getTabs() {
        return $this->tabs;
    }

    public function addTab($key, $tab = []) {
       
        $this->tabs[$key] = $tab;
        return $this;
    }

    // public function getTab($key) {
    //     if (!array_key_exists($key, $this->tabs)) {
    //         return null;
    //     }
    //     return $this->tabs[$key];
    // }

    public function removeTab($key) {
        if (array_key_exists($key, $this->tabs)) {
            unset($this->tabs[$key]);
        }
        return $this;
    }
}