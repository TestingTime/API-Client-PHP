# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**min_age** | **float** |  | [optional] 
**max_age** | **float** |  | [optional] 
**users** | **float** |  | 
**method** | **string** |  | 
**venue** | **string** |  | 
**type** | **string** |  | [optional] 
**link** | **string** | The url where the participants are being sent to. Use {{PARTICIPANT_ID}} as a placeholder where we put a participants specific id if you need to different urls per user. | [optional] 
**minutes** | **float** |  | [optional] 
**title** | **string** | Give the study an optional title. This will be shown in the dashboard. | [optional] 
**location** | [**\Swagger\Client\Model\OrderLocation**](OrderLocation.md) |  | [optional] 
**countries** | **string[]** | 2 digits ISO country code in lowercase. e.g. us, ch, de | [optional] 
**languages** | **string[]** | Languages the test is conducted in or prototype language. 2 digits ISO language code in lowercase. e.g. en, de fr | [optional] 
**screening** | [**\Swagger\Client\Model\Screener[]**](Screener.md) | If you want additional screener questions to be answered. Put in here multiple questions/screener settings to filter the target group further. | [optional] 
**gender_mix** | **string** | If empty a random mix will be generated. Mixed means 50/50. FEMALE means female only. | [optional] 
**devices** | **string[]** |  | [optional] 
**platform** | **string** | Operating system on the selected devices. | [optional] 
**time_zone** | **string** | Time zone id, list can be found e.g. here: https://garygregory.wordpress.com/2013/06/18/what-are-the-java-timezone-ids/ | [optional] 
**slots** | **float[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

