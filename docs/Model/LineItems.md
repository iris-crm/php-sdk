# LineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**type** | **string** |  | [optional] 
**item_id** | **int** |  | [optional] 
**user** | [**\Swagger\Client\Model\LineItemsUser**](LineItemsUser.md) |  | [optional] 
**merchant** | [**\Swagger\Client\Model\LineItemsMerchant**](LineItemsMerchant.md) |  | [optional] 
**related_mid** | **int** |  | [optional] 
**related_dba** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**income** | **int** |  | [optional] 
**expense** | **int** |  | [optional] 
**percentage** | **int** |  | [optional] 
**agent_net** | **int** |  | [optional] 
**is_recurring** | **bool** |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Created date of line item | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Last update date of line item | [optional] 
**agents** | [**\Swagger\Client\Model\LineItemsAgents[]**](LineItemsAgents.md) |  | [optional] 
**recurring_start_date** | [**\DateTime**](\DateTime.md) | Date of start recurring line item | [optional] 
**recurring_payment_count** | **int** | Count of payments what was already done | [optional] 
**recurring_max_payment_count** | **int** | Count of payments which will be done (this will be null if there is no limit) | [optional] 
**recurring_period** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

