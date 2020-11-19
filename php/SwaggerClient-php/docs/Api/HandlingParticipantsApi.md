# Swagger\Client\HandlingParticipantsApi

All URIs are relative to *https://api.testingtime.com/{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersOrderIdParticipantsGet**](HandlingParticipantsApi.md#ordersorderidparticipantsget) | **GET** /orders/{orderId}/participants | Read all available &amp; matching participants of an order.
[**ordersOrderIdParticipantsParticipantIdPut**](HandlingParticipantsApi.md#ordersorderidparticipantsparticipantidput) | **PUT** /orders/{orderId}/participants/{participantId} | Assign and confirm a specific participant to a slot
[**ordersOrderIdParticipantsParticipantIdRatingPost**](HandlingParticipantsApi.md#ordersorderidparticipantsparticipantidratingpost) | **POST** /orders/{orderId}/participants/{participantId}/rating | Rate a participant

# **ordersOrderIdParticipantsGet**
> \Swagger\Client\Model\Participants ordersOrderIdParticipantsGet($order_id)

Read all available & matching participants of an order.

This resource is only available for moderated studies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HandlingParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | OrderId of the order you want to read the participants from.

try {
    $result = $apiInstance->ordersOrderIdParticipantsGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HandlingParticipantsApi->ordersOrderIdParticipantsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| OrderId of the order you want to read the participants from. |

### Return type

[**\Swagger\Client\Model\Participants**](../Model/Participants.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdParticipantsParticipantIdPut**
> ordersOrderIdParticipantsParticipantIdPut($order_id, $participant_id, $slot)

Assign and confirm a specific participant to a slot

This resource is only available for moderated studies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HandlingParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | OrderId of the order you want to assign a participant to.
$participant_id = "participant_id_example"; // string | ParticipantId of the user you want to assign.
$slot = 1.2; // float | Timestamp of the date you want to assign the user to.

try {
    $apiInstance->ordersOrderIdParticipantsParticipantIdPut($order_id, $participant_id, $slot);
} catch (Exception $e) {
    echo 'Exception when calling HandlingParticipantsApi->ordersOrderIdParticipantsParticipantIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| OrderId of the order you want to assign a participant to. |
 **participant_id** | **string**| ParticipantId of the user you want to assign. |
 **slot** | **float**| Timestamp of the date you want to assign the user to. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdParticipantsParticipantIdRatingPost**
> ordersOrderIdParticipantsParticipantIdRatingPost($body, $order_id, $participant_id)

Rate a participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HandlingParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Rating(); // \Swagger\Client\Model\Rating | Rating that should be added
$order_id = "order_id_example"; // string | OrderId of the order you want to rate a participant.
$participant_id = "participant_id_example"; // string | ParticipantId of the user you want to rate

try {
    $apiInstance->ordersOrderIdParticipantsParticipantIdRatingPost($body, $order_id, $participant_id);
} catch (Exception $e) {
    echo 'Exception when calling HandlingParticipantsApi->ordersOrderIdParticipantsParticipantIdRatingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Rating**](../Model/Rating.md)| Rating that should be added |
 **order_id** | **string**| OrderId of the order you want to rate a participant. |
 **participant_id** | **string**| ParticipantId of the user you want to rate |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

