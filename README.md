# Hello Extension

这是一个演示扩展，用于展示如何创建和使用Sixshop扩展。

## 功能说明

该扩展提供一个简单的API端点，返回欢迎信息。

## 安装

```shell
composer require six-shop/hello
```

## API接口

### 获取欢迎信息
- **URL**: `https://sixshop.ddev.site/api/hello`
- **方法**: GET
- **描述**: 返回简单的欢迎信息

## 响应示例

```json
{
    "code": 0,
    "status": "ok",
    "msg": "success",
    "data": "hello world"
}
```
    