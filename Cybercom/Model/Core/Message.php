<?php
namespace Model\Core;

\Mage::loadFileByClassName('Model\Core\Session');

class Message extends Session
{
    public function setSuccess($message)
    {
        $this->success = $message;
        return $this;
    }

    public function getSuccess($message)
    {
        return $this->success;
    }
    
    public function setFailure($message)
    {
        $this->failure = $message;
        return $this;
    }

    public function getFailure($message)
    {
        return $this->failure;
    }
}
