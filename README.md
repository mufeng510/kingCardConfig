# kingCardConfig
### 这是一个简单的共享配置服务端文件
####如何使用？
将项目中的文件复制到服务器目录下，并将两个txt文件权限修改0666以上，即至少读写权限给满。
####配置获取方式
支持两种方式(通过id值区分进行)：

假设这些文件存放在 wk.demo.com/demo/目录下，后同。

1.标准json输出：http://wk.demo.com/demo/get_config?id=1

将会得到如下格式：{"Time":"2019-06-16 11:52:50","Guid":"Guid值","Token":"Token值"}

2.以','为分隔符的字符串：http://wk.demo.com/demo/get_config?id=2

将会得到如下格式：Guid值,Token值

####配置上传方式
支持三种方式

1.标准json：http://wk.demo.com/demo/create_config?id=1 （配置助手脚本助手均为这种方式）

需要按照{"Time":"2019-06-16 11:52:50","Guid":"Guid值","Token":"Token值"}格式发送post请求

2.get参数：http://wk.demo.com/demo/create_config?id=2&Guid=Guid值&Token=Token值

3.从其他接口获取：http://wk.demo.com/demo/create_config?id=3

需要先设置api接口

####如何自动获取

1.如果支持crontab，可以直接使用crontab。(推荐)

2.