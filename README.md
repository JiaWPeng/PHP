# PHP
###首页新建项目
###打开git bash
###命令git clone
###将项目复制到clone文件夹中
###命令git add .
###命令git commit  -m  "提交信息" （提交的信息是你的项目说明）（注：“提交信息”里面换成你需要，如“first commit”）
###命令git push -u origin master（此操作目的是把本地仓库push到github上面，此步骤需要你输入登录github上的帐号和密码）
####
上传：
1.先看自己身处的目录：git branch
2.在进入需要上传的目录:git checkout dsy
3.上传文件：git add .（用于把我们要提交的文件信息添加到索引库中）
4.备注：git commit -m "提交备注"
5.推：git push

上传下拉一般都是在自己的文件夹下，所以要检查位置，merge的时候才到上一级目录在进行操作

merge:
1.先切换到上级目录：git checkout dev
2.然后进行merge：git merge dsy
3.再次上传:
1.一定要看自己在哪个分支下：git branch
2.拉：git pull(在此上传的时候需要再次下拉别人的文件)
3.再次上传（git add ./git commit -m "XXX" /git push）
