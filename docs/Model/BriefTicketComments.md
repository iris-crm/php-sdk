# BriefTicketComments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Comment id | [optional] 
**ticket_id** | **int** | Ticket id | [optional] 
**comment** | **string** | Comment text | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Comment created date | [optional] 
**created_by** | **int** | Comment creator id | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Comment modified date | [optional] 
**modified_by** | **int** | Id of user who left comment | [optional] 
**files** | [**\Swagger\Client\Model\File[]**](File.md) |  | [optional] 
**preview_images** | [**\Swagger\Client\Model\File[]**](File.md) |  | [optional] 
**merchant_visible** | **bool** | Indicates if the comment is visible to Merchant users | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

