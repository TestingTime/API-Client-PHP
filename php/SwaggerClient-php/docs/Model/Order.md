# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** |  | 
**venue** | **string** |  | 
**minutes** | **float** |  | [optional] 
**title** | **string** | Give the study an optional title. This will be shown in the dashboard. Here you could also add an identifier for your internal orderId or customerId | [optional] 
**state** | **string** |  | 
**location** | [**\Swagger\Client\Model\OrderLocation**](OrderLocation.md) |  | [optional] 
**contact** | **object** |  | [optional] 
**billing** | **object** |  | [optional] 
**quote** | **string** |  | [optional] 
**incentive** | **object** |  | [optional] 
**team_id** | **string** |  | [optional] 
**paid_with** | **string** |  | [optional] 
**locale** | **string** |  | 
**slots** | [**\Swagger\Client\Model\OrderSlots[]**](OrderSlots.md) |  | [optional] 
**users** | **float** |  | 
**pool_secret** | **string** |  | [optional] 
**countries** | **string[]** | 2 digits ISO country code in lowercase. e.g. us, ch, de | [optional] 
**nda** | **object** |  | [optional] 
**languages** | **string[]** | Languages the test is conducted in or prototype language. 2 digits ISO language code in lowercase. e.g. en, de fr | 
**languages_op** | **string** |  | [optional] 
**min_age** | **float** |  | [optional] 
**max_age** | **float** |  | [optional] 
**gender_mix** | **string** | If empty a random mix will be generated. Mixed means 50/50. FEMALE means female only. | [optional] 
**platform** | **string** | Operating system on the selected devices. | [optional] 
**contact_via_type** | **string** |  | [optional] 
**contact_via_details** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**link** | **string** | The url where the participants are being sent to. Use {{PARTICIPANT_ID}} as a placeholder where we put a participants specific id if you need to different urls per user. | [optional] 
**tags** | **string** | An ID that identifies a customer ordering. This is important to exclude test users that were already with the same customer. | [optional] 
**devices** | **string[]** |  | [optional] 
**time_zone** | **string** | Time zone id, list can be found e.g. here: https://garygregory.wordpress.com/2013/06/18/what-are-the-java-timezone-ids/ | [optional] 
**screening** | [**\Swagger\Client\Model\Screener[]**](Screener.md) | If you want additional screener questions to be answered. Put in here multiple questions/screener settings to filter the target group further. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

