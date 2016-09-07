<?php
namespace Sanyc\Aliyun;

use Sanyc\Aliyun\DM\SingleSendMailRequest;
use Sanyc\Aliyun\SDK\DefaultAcsClient;
use Sanyc\Aliyun\SDK\Exception\ClientException;
use Sanyc\Aliyun\SDK\Exception\ServerException;
use Sanyc\Aliyun\SDK\Profile\DefaultProfile;

class AliyunEmail
{
    protected $client;
    protected $request;
    protected $accountName;

    public function __construct($configs)
    {
        $accessKey = $configs['accessKey'];
        $accessSecret = $configs['accessSecret'];
        $this->accountName = $configs['accountName'];
        $this->fromAlias = $configs['fromAlias'];

        //获取连接配置
        $iClientProfile = DefaultProfile::getProfile('cn-hangzhou', $accessKey, $accessSecret);

        $this->client = new DefaultAcsClient($iClientProfile);
        $this->request = new SingleSendMailRequest();
    }

    /**
     * @param $to string|array         邮件地址，一个或多个
     * @param $subject string          邮件标题
     * @param $body string             邮件内容
     * @param $tag string          控制台内创建的标签
     */
    public function send($to, $subject, $body,$tag = null)
    {
        //如果是数组则拆分
        if(is_array($to))$to = implode(',', $to);

        $this->request->setAccountName($this->accountName);                 //设置发信人账号
        $this->request->setFromAlias($this->fromAlias);                     //设置发信人名称
        $this->request->setAddressType(1);
        $this->request->setTagName($tag);                                   //控制台中配置的标签
        $this->request->setReplyToAddress('true');
        $this->request->setToAddress($to);                                  //收信人，一个或多个
        $this->request->setSubject($subject);                               //邮件标题
        $this->request->setHtmlBody($body);                                 //邮件地址

        //发送邮件
        try {
            $this->client->getAcsResponse($this->request);
            return true;
        }catch (ClientException  $e) {
            return ['code'=>$e->getCode(), 'msg'=>$e->getErrorMessage()];
        }catch (ServerException  $e) {
            return ['code'=>$e->getCode(), 'msg'=>$e->getErrorMessage()];
        }

    }

}