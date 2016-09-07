双辉旅程内部使用
thinkphp 5

使用方法
***************************************************************
在配置文件config中增加
'mail' => [
		'accessKey' => 'gw9QdAXXXYjR1Uu', 
		'accessSecret' => 'dyOOXvXXXXXXXXAgr7hXJCr5wdBDd', 
		'accountName' => 'xxxxxxx@m.shsytour.cn', 
		'fromAlias' => '双辉旅程'
	]

use Sanyc\Aliyun\AliyunEmail;

$mail = new AliyunEmail(config('mail'));

$mail->send('123456@qq.com', '测试', '你好！这里是双辉旅程');