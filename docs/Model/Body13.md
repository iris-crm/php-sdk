# Body13

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | Type id | 
**subject** | **string** | Ticket subject | 
**description** | **string** | Ticket description | [optional] 
**priority** | **int** | Priority (0 - Normal, 1 - Medium, 2 - Rush) | 
**assigned_users** | **int[]** |  | [optional] 
**files** | **string[]** |  | [optional] 
**attached_files** | **int[]** |  | [optional] 
**preview_images** | **string[]** |  | [optional] 
**assign_type** | **string** |  | 
**assign_to** | **int** |  | 
**group_id** | **int** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Ticket due datetime | [optional] 
**only_business_days** | **bool** | Calculate only business days | [optional] 
**notify_assigned_users** | **bool** | Notify assigned users | [optional] 
**merchant_visible** | **bool** | Indicates if the ticket is visible to Merchant users | [optional] 
**checklist** | [**\Swagger\Client\Model\CheckListRequest[]**](CheckListRequest.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

