# Shopping Cart

模擬真實接案，打造一整個完整購物網站，透過Laravel之MVC架構及RESTful概念實作商品上下架及訂單管理系統之後台管理、購物車CRUD等功能。

### Website

http://shop.shinfu.website

### 說明

後台商品及訂單管理頁面網址暫略，面試時將Demo展示。

前台主要頁面:首頁、商品主頁及商品個頁(右上可看購物車)、購物車頁面、結帳後頁面

### 功能

* Register/Login - 輸入帳號密碼進行註冊，之後便可使用該組帳密進行登入。

* Read - 未登入時可瀏覽首頁，商品主頁及個頁。登入後在shop頁面右上角會讀取並顯示屬於您的購物車資料，或者也可至購物車頁面檢視。

* Create - 在商品主頁或個頁於商品下方點選"+ ADD CART"，即可新增商品至購物車。

* Update - 於購物車頁面，在商品數量輸入後，按下右邊重整按鈕，即可修改商品數量。

* Delete - 在右上角的購物車點選"x"，或在購物車頁面點選垃圾桶按鈕，確認後即可刪除。

* Product Management (backstage) - 可上下架商品或修改商品資訊(即product的CRUD)。

* Order Management (backstage) - 可檢視所有訂單、取消訂單、更改訂單狀態(status)，例如未付款(unpaid)、已出貨(Shipped)等。


### 主要技術

* HTML/CSS/Javascript(jQuery)
* Laravel/PHP/MySQL
* Linux (ubuntu)


