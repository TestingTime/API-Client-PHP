# Swagger\Client\RatingApi

All URIs are relative to *https://sandbox.api.testingtime.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersOrderIdParticipantsUserIdRatingPost**](RatingApi.md#ordersorderidparticipantsuseridratingpost) | **POST** /orders/{orderId}/participants/{userId}/rating | Rate a test participant.

# **ordersOrderIdParticipantsUserIdRatingPost**
> ordersOrderIdParticipantsUserIdRatingPost($body, $x_api_key, $order_id, $user_id)

Rate a test participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Rating(); // \Swagger\Client\Model\Rating | Rating with all its properties to be created
$x_api_key = "x_api_key_example"; // string | Partners API key - get this from the engineers of TestingTime
$order_id = "order_id_example"; // string | Id of the order for which to rate a user
$user_id = "user_id_example"; // string | Id of the participant

try {
    $apiInstance->ordersOrderIdParticipantsUserIdRatingPost($body, $x_api_key, $order_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling RatingApi->ordersOrderIdParticipantsUserIdRatingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Rating**](../Model/Rating.md)| Rating with all its properties to be created |
 **x_api_key** | **string**| Partners API key - get this from the engineers of TestingTime |
 **order_id** | **string**| Id of the order for which to rate a user |
 **user_id** | **string**| Id of the participant |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

