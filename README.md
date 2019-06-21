# kingCardConfig
### 这是一个简单的共享配置服务端文件
#### 如何使用？
将项目中的kingCardConfig文件夹复制到服务器目录下，并将两个txt文件权限修改0666以上，即至少读写权限给满。
#### 设置及测试
放入服务器后打开链接http://你的域名/kingCardConfig/index.html
#### 配置获取方式
支持两种方式(通过id值区分)：

假设这些文件存放在 根目录/kingCardConfig/目录下，后同。

1.标准json输出：http://域名/kingCardConfig/get_config.php?id=1

将会得到如下格式：{"Time":"2019-06-16 11:52:50","Guid":"Guid值","Token":"Token值"}

2.以','为分隔符的字符串：http://域名/kingCardConfig/get_config.php?id=2

将会得到如下格式：Guid值,Token值

#### 配置上传方式
支持三种方式

1.标准json：http://域名/kingCardConfig/create_config.php?id=1 （配置助手脚本助手均为这种方式）

需要按照{"Time":"2019-06-16 11:52:50","Guid":"Guid值","Token":"Token值"}格式发送post请求

2.get参数：http://域名/kingCardConfig/create_config.php?id=2&Guid=Guid值&Token=Token值

3.从其他接口获取：http://域名/kingCardConfig/create_config.php?id=3

需要先设置api接口

#### 如何自动获取

1.如果支持crontab，可以直接使用crontab。(推荐)

2.通过网站监控，添加http://你的域名/kingCardConfig/create_config.php?id=3至监控

3.打开链接 http://你的域名/kingCardConfig/autoGet.php(不推荐，需要重启才能关闭)
