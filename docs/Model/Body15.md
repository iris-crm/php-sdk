# Body15

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | Type id | [optional] 
**subject** | **string** | Ticket subject | [optional] 
**description** | **string** | Ticket description | [optional] 
**status** | **string** | Ticket status | [optional] 
**priority** | **int** | Priority (0 - Normal, 1 - Medium, 2 - Rush) | [optional] 
**assigned_users** | **int[]** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Ticket due datetime | [optional] 
**only_business_days** | **bool** | Calculate only business days | [optional] 
**assign_type** | **string** |  | [optional] 
**assign_to** | **int** |  | [optional] 
**files** | **string[]** |  | [optional] 
**attached_files** | **int[]** |  | [optional] 
**preview_images** | **string[]** |  | [optional] 
**group_id** | **int** |  | [optional] 
**merchant_visible** | **bool** | Indicates if the ticket is visible to Merchant users | [optional] 
**checklist** | [**\Swagger\Client\Model\AllOfbody15ChecklistItems[]**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

