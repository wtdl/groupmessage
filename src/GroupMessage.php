<?php
/**
 * 深圳网通动力网络技术有限格式
 * User: pengjian(szpengjian@gmail.com)
 * Date: 19-1-24
 * Time: 下午4:16
 */

namespace Wtdl\GroupMessage;

use Hanson\Vbot\Extension\AbstractMessageHandler;
use Hanson\Vbot\Message\Text;
use Illuminate\Support\Collection;

class GroupMessage extends AbstractMessageHandler
{
    public $author = 'pengjian';

    public $name = 'GroupMessage';

    public $zhName = '定制群消息回复';

    public $version = '1.0';

    public function register()
    {
        echo $this->author;
    }


    public function handler(Collection $message)
    {
        if ($message['type'] === 'text' && $message['from']['NickName'] == '相亲相爱一家人') {
            return Text::send($message['from']['UserName'], 'welcome 我们来做朋友吧!');
        }
    }
}