双辉旅程内部使用<br>
thinkphp 5<br>

使用方法<br>
在配置文件config中增加<br>
```php
'mail' => [
	'accessKey' => 'gw9QdAXXXYjR1Uu', 
	'accessSecret' => 'dyOOXvXXXXXXXXAgr7hXJCr5wdBDd', 
	'accountName' => 'xxxxxxx@m.shsytour.cn', 
	'fromAlias' => '双辉旅程'
	]

use Sanyc\Aliyun\AliyunEmail;

$mail = AliyunEmail::init(config('mail'))->send('123456@qq.com', '测试', '你好！这里是双辉旅程');
```
