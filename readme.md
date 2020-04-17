# Blog

簡潔完整的部落格網站，使用Laravel將既有的view套版並整理調整，前端可瀏覽文章和留言，後端管理則透過關聯式資料庫實現文章、類別(categories)及標籤(tags)的CRUD功能，並有認證(authentication)及授權(authorization)機制，以防止他人對非本人新增之文章進行更新或刪除等操作。

### Website

http://blog.shinfu.website

### 說明

後台文章/類別/標籤管理頁面網址暫略，面試時將Demo展示。

前台主要頁面：首頁、文章列表頁及文章個頁

### 功能

* Read - 可瀏覽所有文章，或依文章類別或標籤檢視相關文章。

* Create comment - 訪客可於文章底下留言，會自動記錄內容及時間。

* Register/Login (backstage/admin)- 輸入帳號密碼進行註冊，之後便可使用該組帳密進行登入。

* Post/Category/Tag CRUD (backstage/admin) - 可新增/更新/刪除文章(含tags)，或新增/更新/刪除類別，且更新及刪除功能只能針對自己Create的文章才可操作



### 主要技術

* HTML/CSS/Javascript(jQuery)
* Laravel/PHP/MySQL
* Linux (ubuntu)

![image](https://github.com/sfwang20/blog/blob/master/blog.png)
