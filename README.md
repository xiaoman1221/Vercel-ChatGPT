# Vercel-ChatGPT
在Vercel运行的ChatGPT

### 使用方法

	首先申请密钥：https://beta.openai.com/account/api-keys
	
	Clone 本项目
	
	更改：/api/index.php第二行的key
	
	**为了您的key安全，~~给个star就行~~，别fork这个项目，建议新建一个私人仓库**

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

**本程序使用GNU协议**
Vercel限制：Free版本function响应超时时间为10秒，也就是说答案过长会显示504，建议在本地部署

小声BB：要不要关注一下我的工作室(https://studio.yhdzz.cn)
