# Swagger\Client\OrderingApi

All URIs are relative to *https://sandbox.api.testingtime.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersOrderIdGet**](OrderingApi.md#ordersorderidget) | **GET** /orders/{orderId} | Read an existing order.
[**ordersPost**](OrderingApi.md#orderspost) | **POST** /orders | Create a new order to recruit test users.

# **ordersOrderIdGet**
> \Swagger\Client\Model\Order ordersOrderIdGet($x_api_key, $order_id)

Read an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Partners API key - get this from the engineers of TestingTime
$order_id = "order_id_example"; // string | OrderId of the order you want to read.

try {
    $result = $apiInstance->ordersOrderIdGet($x_api_key, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderingApi->ordersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Partners API key - get this from the engineers of TestingTime |
 **order_id** | **string**| OrderId of the order you want to read. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> \Swagger\Client\Model\OrderCreated ordersPost($body, $x_api_key)

Create a new order to recruit test users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrderingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Order(); // \Swagger\Client\Model\Order | Order with all its properties to be created
$x_api_key = "x_api_key_example"; // string | Partners API key - get this from the engineers of TestingTime

try {
    $result = $apiInstance->ordersPost($body, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderingApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Order**](../Model/Order.md)| Order with all its properties to be created |
 **x_api_key** | **string**| Partners API key - get this from the engineers of TestingTime |

### Return type

[**\Swagger\Client\Model\OrderCreated**](../Model/OrderCreated.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

