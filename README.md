> 实际工作中，经常要用到数据字典。在项目初期维护数据字典很容易，但随着项目的推进，数据库结构的改动，这项维护工作变得越来越困难。如果你的数据库结构中的备注写的够全，那么直接将sql语句导出成为markdown表格肯定会让数据字典维护工作变得更加轻松。导出的markdown可以在markdown编辑器中显示成优美的markdown格式，然后拷贝到文档中心，轻而易举。

所以，我使用php写了一个小工具，可以将dump出来的sql建表语句直接转成markdown。
直接上项目地址：https://github.com/wowo-zZ/sql2markdown

### 使用方法
1. clone项目到本地，进入项目，新建sql（输入用到的sql文件）、output（markdown输出文件）目录；
2. 导出sql建表语句到文件，保存到sql文件夹中，样例如下所示：
```sql
CREATE TABLE `blog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  `content` text NOT NULL,
  `abstract` varchar(256) NOT NULL DEFAULT '',
  `tags` varchar(60) DEFAULT '',
  `gmt_create` int(10) NOT NULL,
  `gmt_modified` int(10) NOT NULL,
  `author` varchar(60) NOT NULL DEFAULT '路人甲',
  `visit_times` int(11) DEFAULT '0' COMMENT '访问次数',
  `des` varchar(128) NOT NULL DEFAULT '该文暂无简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;
...
```
3. 修改convert.php，将其中的sql目录和output目录的文件名换成你的：
![在这里插入图片描述](https://img-blog.csdnimg.cn/20190418154105770.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9pZGlvdC5ibG9nLmNzZG4ubmV0,size_16,color_FFFFFF,t_70)
4. 在项目目录运行`php convert.php`，即可在output文件夹下看到输出的markdown文件，拿去用吧~
