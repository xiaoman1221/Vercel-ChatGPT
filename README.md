# Vercel-ChatGPT
在Vercel运行的ChatGPT
# 一键部署
<a href="https://vercel.com/new/project?template=https://github.com/xiaoman1221/Vercel-ChatGPT"><img src="https://vercel.com/button"></a>

### 使用方法

​	首先申请密钥：https://beta.openai.com/account/api-keys

​	Clone 本项目

​	更改：/api/index.php第二行的key

​	**为了您的key安全，~~给个star就行~~，别fork这个项目，建议新建一个私人仓库**

```bash
git clone https://github.com/xiaoman1221/Vercel-ChatGPT.git
cd Vercel-ChatGPT
vim /app/index.php
rm -rf ./.git
git init
git branch -M main
git add -A	
git commit -m "Update Key"
git remote add origin <你的GitHub地址>
git push -u origin main
```

### 本程序使用GNU协议

### 关注一下我的工作室（？

