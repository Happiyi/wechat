<?php

/**
 * 消息控制器
 * @author guoyongrong
 *
 */

namespace Weixin\Wx\Manager;

use Weixin\Client;
use Weixin\Wx\Manager\Msg\Template;
use Weixin\Wx\Manager\Msg\Updatablemsg;
use Weixin\Wx\Manager\Msg\SubscribeMessage;

class Msg
{

    private $_client;

    public function __construct(Client $client)
    {
        $this->_client = $client;
    }

    /**
     * 获取小程序模板消息管理器
     *
     * @return \Weixin\Wx\Manager\Msg\Template
     */
    public function getTemplateSender()
    {
        return new Template($this->_client);
    }

    /**
     * 获取小程序模板消息管理器
     *
     * @return \Weixin\Wx\Manager\Msg\Updatablemsg
     */
    public function getUpdatablemsgSender()
    {
        return new Updatablemsg($this->_client);
    }

    /**
     * 获取小程序订阅消息管理器
     *
     * @return \Weixin\Wx\Manager\Msg\SubscribeMessage
     */
    public function getSubscribeMessageSender()
    {
        return new SubscribeMessage($this->_client);
    }
}
