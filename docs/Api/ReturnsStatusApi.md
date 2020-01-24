# EzzeSiftuz\ReturnsV2\ReturnsStatusApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPositionItemsForUsingGET**](ReturnsStatusApi.md#getpositionitemsforusingget) | **GET** /v2/returns | Get all the items filtered on return status
[**receiveAcceptedReturnsV2UsingPOST**](ReturnsStatusApi.md#receiveacceptedreturnsv2usingpost) | **POST** /v2/returns/acceptance | Accept the return for a sent position item (up to 200 items per request)
[**receiveRejectedReturnsV2UsingPOST**](ReturnsStatusApi.md#receiverejectedreturnsv2usingpost) | **POST** /v2/returns/rejection | Reject the return for a sent position item (up to 200 items per request)

# **getPositionItemsForUsingGET**
> \EzzeSiftuz\ReturnsV2\Model\PositionItemList getPositionItemsForUsingGET($authorization, $status, $limit, $name, $page)

Get all the items filtered on return status

The items will be sorted on status modified time in reverse chronological order. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 50 results per page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ReturnsV2\Api\ReturnsStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Access Token
$status = "status_example"; // string | Return status for which items are being queried for
$limit = 56; // int | Page size to limit the number of items returned in the response. Maximum value for limit can 10
$name = "name_example"; // string | 
$page = 56; // int | Page number to fetch. This parameter is required to fetch data for specific page number

try {
    $result = $apiInstance->getPositionItemsForUsingGET($authorization, $status, $limit, $name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsStatusApi->getPositionItemsForUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **status** | **string**| Return status for which items are being queried for |
 **limit** | **int**| Page size to limit the number of items returned in the response. Maximum value for limit can 10 | [optional]
 **name** | **string**|  | [optional]
 **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional]

### Return type

[**\EzzeSiftuz\ReturnsV2\Model\PositionItemList**](../Model/PositionItemList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receiveAcceptedReturnsV2UsingPOST**
> object receiveAcceptedReturnsV2UsingPOST($body, $authorization, $name)

Accept the return for a sent position item (up to 200 items per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ReturnsV2\Api\ReturnsStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EzzeSiftuz\ReturnsV2\Model\AcceptedPartnerReturnV2(); // \EzzeSiftuz\ReturnsV2\Model\AcceptedPartnerReturnV2 | acceptedPartnerReturn
$authorization = "authorization_example"; // string | Access Token
$name = "name_example"; // string | 

try {
    $result = $apiInstance->receiveAcceptedReturnsV2UsingPOST($body, $authorization, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsStatusApi->receiveAcceptedReturnsV2UsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\ReturnsV2\Model\AcceptedPartnerReturnV2**](../Model/AcceptedPartnerReturnV2.md)| acceptedPartnerReturn |
 **authorization** | **string**| Access Token |
 **name** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receiveRejectedReturnsV2UsingPOST**
> object receiveRejectedReturnsV2UsingPOST($body, $authorization, $name)

Reject the return for a sent position item (up to 200 items per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ReturnsV2\Api\ReturnsStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EzzeSiftuz\ReturnsV2\Model\RejectedPartnerReturnV2(); // \EzzeSiftuz\ReturnsV2\Model\RejectedPartnerReturnV2 | rejectedPartnerReturn
$authorization = "authorization_example"; // string | Access Token
$name = "name_example"; // string | 

try {
    $result = $apiInstance->receiveRejectedReturnsV2UsingPOST($body, $authorization, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsStatusApi->receiveRejectedReturnsV2UsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\ReturnsV2\Model\RejectedPartnerReturnV2**](../Model/RejectedPartnerReturnV2.md)| rejectedPartnerReturn |
 **authorization** | **string**| Access Token |
 **name** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

