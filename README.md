# [zhima](https://zmmcportal.zmxy.com.cn/index.htm) for Laravel 5.*



## Installation

- Run `composer require zmop/laravel-zhima`


- Run `php artisan vendor:publish`



## Usage

### 授权:

```
        //1:按照手机号进行授权 {"mobileNo":"15158657683"}
        //2:按照身份证+姓名进行授权 {"name":"张三","certType":"IDENTITY_CARD","certNo":"330100xxxxxxxxxxxx"}
        $request = new ZhimaAuthInfoAuthorizeRequest();
        $request->setChannel("app");
        $request->setPlatform("zmop");
        $req->setIdentityType("2");// 必要参数
        $req->setIdentityParam("{\"name\":\"张三\",\"certType\":\"IDENTITY_CARD\",\"certNo\":\"330100xxxxxxxxxxxx\"}");// 必要参数
        $req->setBizParams("{\"auth_code\":\"M_H5\",\"channelType\":\"app\",\"state\":\"商户自定义\"}");//
        $req->setChannel("app");
        $req->setPlatform("zmop");
        $url = Zmop::generatePageRedirectInvokeUrl($req)
```

### 信用评分:

```
         $request = new ZhimaCreditScoreGetRequest();
         $request->setChannel("apppc");
         $request->setPlatform("zmop");
         $request->setTransactionId("201512100936588040000000465158");// 必要参数
         $request->setProductCode("w1010100100000000001");// 必要参数
         $request->setOpenId("268810000007909449496");// 必要参数
         $response = Zmop::execute($request);
         echo json_encode($response);
```
## Config

set the options in **config/zmop.php** ,

