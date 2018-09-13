<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class ServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'PackageInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PackageInfoStruct',
      'ArrayOfPackageinfostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPackageinfostruct',
      'DoAddPackageInfoToPostBuyFormRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoAddPackageInfoToPostBuyFormRequest',
      'ArrayOfString' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfString',
      'PostBuyFormPackageInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormPackageInfoStruct',
      'doAddPackageInfoToPostBuyFormResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doAddPackageInfoToPostBuyFormResponse',
      'UserBlackListStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserBlackListStruct',
      'ArrayOfUserblackliststruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserblackliststruct',
      'DoAddToBlackListRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoAddToBlackListRequest',
      'UserBlackListAddResultStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserBlackListAddResultStruct',
      'ArrayOfUserblacklistaddresultstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserblacklistaddresultstruct',
      'doAddToBlackListResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doAddToBlackListResponse',
      'PharmacyRecipientDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PharmacyRecipientDataStruct',
      'DoBidItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoBidItemRequest',
      'doBidItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doBidItemResponse',
      'ArrayOfInt' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfInt',
      'DoCancelBidItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoCancelBidItemRequest',
      'doCancelBidItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doCancelBidItemResponse',
      'DoCancelRefundFormRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoCancelRefundFormRequest',
      'doCancelRefundFormResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doCancelRefundFormResponse',
      'DoCancelRefundWarningRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoCancelRefundWarningRequest',
      'doCancelRefundWarningResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doCancelRefundWarningResponse',
      'DoCancelTransactionRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoCancelTransactionRequest',
      'doCancelTransactionResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doCancelTransactionResponse',
      'RangeIntValueStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RangeIntValueStruct',
      'RangeFloatValueStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RangeFloatValueStruct',
      'RangeDateValueStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RangeDateValueStruct',
      'FieldsValue' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FieldsValue',
      'ArrayOfFieldsvalue' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFieldsvalue',
      'VariantQuantityStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\VariantQuantityStruct',
      'ArrayOfVariantquantitystruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfVariantquantitystruct',
      'VariantStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\VariantStruct',
      'ArrayOfVariantstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfVariantstruct',
      'TagNameStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\TagNameStruct',
      'ArrayOfTagnamestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfTagnamestruct',
      'AfterSalesServiceConditionsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AfterSalesServiceConditionsStruct',
      'DoChangeItemFieldsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoChangeItemFieldsRequest',
      'AmountStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AmountStruct',
      'ItemSurchargeStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemSurchargeStruct',
      'ArrayOfItemsurchargestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemsurchargestruct',
      'ChangedItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ChangedItemStruct',
      'doChangeItemFieldsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doChangeItemFieldsResponse',
      'DoChangePriceItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoChangePriceItemRequest',
      'doChangePriceItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doChangePriceItemResponse',
      'DoChangeQuantityItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoChangeQuantityItemRequest',
      'doChangeQuantityItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doChangeQuantityItemResponse',
      'DoCheckItemDescriptionRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoCheckItemDescriptionRequest',
      'ItemDescriptionStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemDescriptionStruct',
      'doCheckItemDescriptionResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doCheckItemDescriptionResponse',
      'DoCheckNewAuctionExtRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoCheckNewAuctionExtRequest',
      'doCheckNewAuctionExtResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doCheckNewAuctionExtResponse',
      'DoFinishItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoFinishItemRequest',
      'doFinishItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doFinishItemResponse',
      'FinishItemsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FinishItemsStruct',
      'ArrayOfFinishitemsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFinishitemsstruct',
      'DoFinishItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoFinishItemsRequest',
      'ArrayOfLong' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfLong',
      'FinishFailureStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FinishFailureStruct',
      'ArrayOfFinishfailurestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFinishfailurestruct',
      'doFinishItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doFinishItemsResponse',
      'DoGetArchiveRefundsListRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetArchiveRefundsListRequest',
      'ArchiveRefundsListTypeStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArchiveRefundsListTypeStruct',
      'ArrayOfArchiverefundslisttypestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfArchiverefundslisttypestruct',
      'doGetArchiveRefundsListResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetArchiveRefundsListResponse',
      'DoGetBidItem2Request' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetBidItem2Request',
      'BidListStruct2' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\BidListStruct2',
      'ArrayOfBidliststruct2' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfBidliststruct2',
      'doGetBidItem2Response' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetBidItem2Response',
      'DoGetBlackListUsersRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetBlackListUsersRequest',
      'BlackListStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\BlackListStruct',
      'ArrayOfBlackliststruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfBlackliststruct',
      'doGetBlackListUsersResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetBlackListUsersResponse',
      'DoGetCategoryPathRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetCategoryPathRequest',
      'CategoryData' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CategoryData',
      'ArrayOfCategorydata' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfCategorydata',
      'doGetCategoryPathResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetCategoryPathResponse',
      'DoGetCatsDataRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetCatsDataRequest',
      'CatInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CatInfoType',
      'ArrayOfCatinfotype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfCatinfotype',
      'doGetCatsDataResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetCatsDataResponse',
      'DoGetCatsDataCountRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetCatsDataCountRequest',
      'doGetCatsDataCountResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetCatsDataCountResponse',
      'DoGetCatsDataLimitRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetCatsDataLimitRequest',
      'doGetCatsDataLimitResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetCatsDataLimitResponse',
      'DoGetCountriesRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetCountriesRequest',
      'CountryInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CountryInfoType',
      'ArrayOfCountryinfotype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfCountryinfotype',
      'doGetCountriesResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetCountriesResponse',
      'DoGetDealsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetDealsRequest',
      'DealsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DealsStruct',
      'ArrayOfDealsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfDealsstruct',
      'doGetDealsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetDealsResponse',
      'DoGetFilledPostBuyFormsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetFilledPostBuyFormsRequest',
      'FilledPostBuyFormsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FilledPostBuyFormsStruct',
      'doGetFilledPostBuyFormsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetFilledPostBuyFormsResponse',
      'DoGetFreeDeliveryAmountRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetFreeDeliveryAmountRequest',
      'doGetFreeDeliveryAmountResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetFreeDeliveryAmountResponse',
      'DoGetItemFieldsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetItemFieldsRequest',
      'doGetItemFieldsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetItemFieldsResponse',
      'ItemGetImage' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemGetImage',
      'ArrayOfItemgetimage' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemgetimage',
      'DoGetItemsImagesRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetItemsImagesRequest',
      'ItemImageList' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemImageList',
      'ArrayOfItemimagelist' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemimagelist',
      'ItemImagesStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemImagesStruct',
      'ArrayOfItemimagesstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemimagesstruct',
      'doGetItemsImagesResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetItemsImagesResponse',
      'DoGetItemsInfoRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetItemsInfoRequest',
      'DurationInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DurationInfoStruct',
      'ItemInfo' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemInfo',
      'ItemCatList' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemCatList',
      'ArrayOfItemcatlist' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemcatlist',
      'AttribStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AttribStruct',
      'ArrayOfAttribstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfAttribstruct',
      'FulfillmentTimeStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FulfillmentTimeStruct',
      'PostageStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostageStruct',
      'ArrayOfPostagestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostagestruct',
      'ItemPaymentOptions' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemPaymentOptions',
      'CompanyInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CompanyInfoStruct',
      'ProductParametersStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ProductParametersStruct',
      'ArrayOfProductparametersstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfProductparametersstruct',
      'ProductParametersGroupStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ProductParametersGroupStruct',
      'ArrayOfProductparametersgroupstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfProductparametersgroupstruct',
      'ProductStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ProductStruct',
      'ItemInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemInfoStruct',
      'ArrayOfIteminfostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfIteminfostruct',
      'doGetItemsInfoResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetItemsInfoResponse',
      'RangeValueType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RangeValueType',
      'FilterOptionsType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FilterOptionsType',
      'ArrayOfFilteroptionstype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFilteroptionstype',
      'SortOptionsType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SortOptionsType',
      'DoGetItemsListRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetItemsListRequest',
      'UserInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserInfoType',
      'PriceInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PriceInfoType',
      'ArrayOfPriceinfotype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPriceinfotype',
      'PhotoInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PhotoInfoType',
      'ArrayOfPhotoinfotype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPhotoinfotype',
      'ParameterInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ParameterInfoType',
      'ArrayOfParameterinfotype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfParameterinfotype',
      'AdvertInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AdvertInfoType',
      'ItemsListType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemsListType',
      'ArrayOfItemslisttype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemslisttype',
      'CategoryTreeType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CategoryTreeType',
      'ArrayOfCategorytreetype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfCategorytreetype',
      'CategoryPathType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CategoryPathType',
      'ArrayOfCategorypathtype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfCategorypathtype',
      'CategoriesListType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CategoriesListType',
      'FilterValueType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FilterValueType',
      'ArrayOfFiltervaluetype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFiltervaluetype',
      'FilterRelationType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FilterRelationType',
      'FiltersListType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FiltersListType',
      'ArrayOfFilterslisttype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFilterslisttype',
      'doGetItemsListResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetItemsListResponse',
      'DoGetMyAddressesRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyAddressesRequest',
      'AddressUserDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AddressUserDataStruct',
      'AddressInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AddressInfoStruct',
      'ArrayOfAddressinfostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfAddressinfostruct',
      'doGetMyAddressesResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyAddressesResponse',
      'SortOptionsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SortOptionsStruct',
      'DoGetMyBidItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyBidItemsRequest',
      'ItemPriceStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemPriceStruct',
      'ArrayOfItempricestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItempricestruct',
      'UserInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserInfoStruct',
      'BidItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\BidItemStruct',
      'ArrayOfBiditemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfBiditemstruct',
      'doGetMyBidItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyBidItemsResponse',
      'DoGetMyCurrentShipmentPriceTypeRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyCurrentShipmentPriceTypeRequest',
      'doGetMyCurrentShipmentPriceTypeResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyCurrentShipmentPriceTypeResponse',
      'DoGetMyDataRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyDataRequest',
      'UserDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserDataStruct',
      'InvoiceDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\InvoiceDataStruct',
      'CompanyExtraDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CompanyExtraDataStruct',
      'CompanySecondAddressStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\CompanySecondAddressStruct',
      'PharmacyDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PharmacyDataStruct',
      'AlcoholDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\AlcoholDataStruct',
      'RelatedPersonsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RelatedPersonsStruct',
      'doGetMyDataResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyDataResponse',
      'FutureFilterOptionsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FutureFilterOptionsStruct',
      'DoGetMyFutureItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyFutureItemsRequest',
      'FutureItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FutureItemStruct',
      'ArrayOfFutureitemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfFutureitemstruct',
      'doGetMyFutureItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyFutureItemsResponse',
      'DoGetMyIncomingPaymentsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyIncomingPaymentsRequest',
      'PaymentDetailsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentDetailsStruct',
      'ArrayOfPaymentdetailsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentdetailsstruct',
      'UserIncomingPaymentStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserIncomingPaymentStruct',
      'ArrayOfUserincomingpaymentstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserincomingpaymentstruct',
      'doGetMyIncomingPaymentsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyIncomingPaymentsResponse',
      'DoGetMyIncomingPaymentsRefundsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyIncomingPaymentsRefundsRequest',
      'UserIncomingPaymentRefundsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserIncomingPaymentRefundsStruct',
      'ArrayOfUserincomingpaymentrefundsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserincomingpaymentrefundsstruct',
      'doGetMyIncomingPaymentsRefundsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyIncomingPaymentsRefundsResponse',
      'FilterPriceStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\FilterPriceStruct',
      'NotSoldFilterOptionsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\NotSoldFilterOptionsStruct',
      'DoGetMyNotSoldItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyNotSoldItemsRequest',
      'NotSoldItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\NotSoldItemStruct',
      'ArrayOfNotsolditemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfNotsolditemstruct',
      'doGetMyNotSoldItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyNotSoldItemsResponse',
      'DoGetMyNotWonItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyNotWonItemsRequest',
      'NotWonItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\NotWonItemStruct',
      'ArrayOfNotwonitemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfNotwonitemstruct',
      'doGetMyNotWonItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyNotWonItemsResponse',
      'DoGetMyPaymentsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyPaymentsRequest',
      'PaymentItemsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentItemsStruct',
      'ArrayOfPaymentitemsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentitemsstruct',
      'PaymentSellersStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentSellersStruct',
      'ArrayOfPaymentsellersstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentsellersstruct',
      'UserPaymentStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserPaymentStruct',
      'ArrayOfUserpaymentstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpaymentstruct',
      'doGetMyPaymentsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyPaymentsResponse',
      'DoGetMyPaymentsInfoRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyPaymentsInfoRequest',
      'PaymentsUserDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentsUserDataStruct',
      'PayoutAutoFrequencyStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PayoutAutoFrequencyStruct',
      'PayoutAutoSettingsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PayoutAutoSettingsStruct',
      'PaymentsPayoutStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentsPayoutStruct',
      'PaymentsInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentsInfoStruct',
      'doGetMyPaymentsInfoResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyPaymentsInfoResponse',
      'DoGetMyPaymentsRefundsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyPaymentsRefundsRequest',
      'UserPaymentRefundsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserPaymentRefundsStruct',
      'ArrayOfUserpaymentrefundsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpaymentrefundsstruct',
      'doGetMyPaymentsRefundsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyPaymentsRefundsResponse',
      'DoGetMyPayoutsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyPayoutsRequest',
      'UserPayoutStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserPayoutStruct',
      'ArrayOfUserpayoutstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpayoutstruct',
      'doGetMyPayoutsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyPayoutsResponse',
      'DoGetMyPayoutsDetailsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyPayoutsDetailsRequest',
      'PayoutPaymentsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PayoutPaymentsStruct',
      'ArrayOfPayoutpaymentsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPayoutpaymentsstruct',
      'PayoutRefundFromStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PayoutRefundFromStruct',
      'ArrayOfPayoutrefundfromstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPayoutrefundfromstruct',
      'PayoutRefundToStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PayoutRefundToStruct',
      'ArrayOfPayoutrefundtostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPayoutrefundtostruct',
      'doGetMyPayoutsDetailsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyPayoutsDetailsResponse',
      'SellFilterOptionsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellFilterOptionsStruct',
      'DoGetMySellItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMySellItemsRequest',
      'SellItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellItemStruct',
      'ArrayOfSellitemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellitemstruct',
      'doGetMySellItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMySellItemsResponse',
      'SoldFilterOptionsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SoldFilterOptionsStruct',
      'DoGetMySoldItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMySoldItemsRequest',
      'SoldItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SoldItemStruct',
      'ArrayOfSolditemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSolditemstruct',
      'doGetMySoldItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMySoldItemsResponse',
      'DoGetMyWonItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetMyWonItemsRequest',
      'WonItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\WonItemStruct',
      'ArrayOfWonitemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfWonitemstruct',
      'doGetMyWonItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetMyWonItemsResponse',
      'DoGetPaymentMethodsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetPaymentMethodsRequest',
      'PaymentMethodStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PaymentMethodStruct',
      'ArrayOfPaymentmethodstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentmethodstruct',
      'doGetPaymentMethodsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetPaymentMethodsResponse',
      'DoGetPostBuyDataRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyDataRequest',
      'UserSentToDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserSentToDataStruct',
      'UserPostBuyDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\UserPostBuyDataStruct',
      'ArrayOfUserpostbuydatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpostbuydatastruct',
      'ItemPostBuyDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemPostBuyDataStruct',
      'ArrayOfItempostbuydatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItempostbuydatastruct',
      'doGetPostBuyDataResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyDataResponse',
      'DoGetPostBuyFormsDataForBuyersRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyFormsDataForBuyersRequest',
      'PostBuyFormItemDealsVariantStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemDealsVariantStruct',
      'PostBuyFormItemDealsAdditionalServiceStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemDealsAdditionalServiceStruct',
      'ArrayOfPostbuyformitemdealsadditionalservicestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformitemdealsadditionalservicestruct',
      'PostBuyFormItemDealsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemDealsStruct',
      'ArrayOfPostbuyformitemdealsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformitemdealsstruct',
      'PostBuyFormItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemStruct',
      'ArrayOfPostbuyformitemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformitemstruct',
      'PostBuyFormShipmentTrackingStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormShipmentTrackingStruct',
      'ArrayOfPostbuyformshipmenttrackingstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformshipmenttrackingstruct',
      'PostBuyFormAddressStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormAddressStruct',
      'PostBuyFormSellersStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormSellersStruct',
      'ArrayOfPostbuyformsellersstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformsellersstruct',
      'PostBuyFormForBuyersDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormForBuyersDataStruct',
      'ArrayOfPostbuyformforbuyersdatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformforbuyersdatastruct',
      'doGetPostBuyFormsDataForBuyersResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyFormsDataForBuyersResponse',
      'DoGetPostBuyFormsDataForSellersRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyFormsDataForSellersRequest',
      'PostBuyFormDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormDataStruct',
      'ArrayOfPostbuyformdatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformdatastruct',
      'doGetPostBuyFormsDataForSellersResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyFormsDataForSellersResponse',
      'DoGetPostBuyFormsIdsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyFormsIdsRequest',
      'doGetPostBuyFormsIdsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyFormsIdsResponse',
      'DoGetPostBuyItemInfoRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyItemInfoRequest',
      'PostBuyItemInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyItemInfoStruct',
      'ArrayOfPostbuyiteminfostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyiteminfostruct',
      'doGetPostBuyItemInfoResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyItemInfoResponse',
      'DoGetRefundsDealsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetRefundsDealsRequest',
      'RefundsDealsListType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RefundsDealsListType',
      'ArrayOfRefundsdealslisttype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfRefundsdealslisttype',
      'doGetRefundsDealsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetRefundsDealsResponse',
      'DoGetRefundsListRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetRefundsListRequest',
      'RefundDetailsType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RefundDetailsType',
      'RefundListType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RefundListType',
      'ArrayOfRefundlisttype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfRefundlisttype',
      'doGetRefundsListResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetRefundsListResponse',
      'DoGetRefundsReasonsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetRefundsReasonsRequest',
      'ReasonInfoType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ReasonInfoType',
      'ArrayOfReasoninfotype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfReasoninfotype',
      'doGetRefundsReasonsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetRefundsReasonsResponse',
      'DoGetRelatedItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetRelatedItemsRequest',
      'RelatedItemStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RelatedItemStruct',
      'ArrayOfRelateditemstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfRelateditemstruct',
      'RelatedItemsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RelatedItemsStruct',
      'doGetRelatedItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetRelatedItemsResponse',
      'DoGetSellFormFieldsForCategoryRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSellFormFieldsForCategoryRequest',
      'SellFormType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellFormType',
      'ArrayOfSellformtype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellformtype',
      'SellFormFieldsForCategoryStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellFormFieldsForCategoryStruct',
      'doGetSellFormFieldsForCategoryResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSellFormFieldsForCategoryResponse',
      'DoGetSessionHandleForWidgetRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSessionHandleForWidgetRequest',
      'doGetSessionHandleForWidgetResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSessionHandleForWidgetResponse',
      'DoGetShipmentDataRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetShipmentDataRequest',
      'ShipmentTimeStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ShipmentTimeStruct',
      'ShipmentDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ShipmentDataStruct',
      'ArrayOfShipmentdatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfShipmentdatastruct',
      'doGetShipmentDataResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetShipmentDataResponse',
      'DoGetShipmentDataForRelatedItemsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetShipmentDataForRelatedItemsRequest',
      'ShipmentPaymentInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ShipmentPaymentInfoStruct',
      'ArrayOfShipmentpaymentinfostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfShipmentpaymentinfostruct',
      'SellerPaymentInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellerPaymentInfoStruct',
      'SellerShipmentDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellerShipmentDataStruct',
      'ArrayOfSellershipmentdatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellershipmentdatastruct',
      'RelatedItemsShipmentDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RelatedItemsShipmentDataStruct',
      'doGetShipmentDataForRelatedItemsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetShipmentDataForRelatedItemsResponse',
      'DoGetShipmentPriceTypesRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetShipmentPriceTypesRequest',
      'ShipmentPriceTypeStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ShipmentPriceTypeStruct',
      'ArrayOfShipmentpricetypestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfShipmentpricetypestruct',
      'doGetShipmentPriceTypesResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetShipmentPriceTypesResponse',
      'DoGetSiteJournalRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalRequest',
      'SiteJournal' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SiteJournal',
      'ArrayOfSitejournal' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSitejournal',
      'doGetSiteJournalResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalResponse',
      'DoGetSiteJournalDealsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalDealsRequest',
      'SiteJournalDealsStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SiteJournalDealsStruct',
      'ArrayOfSitejournaldealsstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSitejournaldealsstruct',
      'doGetSiteJournalDealsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalDealsResponse',
      'DoGetSiteJournalDealsInfoRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalDealsInfoRequest',
      'SiteJournalDealsInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SiteJournalDealsInfoStruct',
      'doGetSiteJournalDealsInfoResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalDealsInfoResponse',
      'DoGetSiteJournalInfoRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalInfoRequest',
      'SiteJournalInfo' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SiteJournalInfo',
      'doGetSiteJournalInfoResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalInfoResponse',
      'DoGetStatesInfoRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetStatesInfoRequest',
      'StateInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\StateInfoStruct',
      'ArrayOfStateinfostruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfStateinfostruct',
      'doGetStatesInfoResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetStatesInfoResponse',
      'DoGetSystemTimeRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetSystemTimeRequest',
      'doGetSystemTimeResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetSystemTimeResponse',
      'DoGetTransactionsIDsRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetTransactionsIDsRequest',
      'doGetTransactionsIDsResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetTransactionsIDsResponse',
      'DoGetUserIDRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetUserIDRequest',
      'doGetUserIDResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetUserIDResponse',
      'DoGetUserLoginRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoGetUserLoginRequest',
      'doGetUserLoginResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doGetUserLoginResponse',
      'DoLoginRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoLoginRequest',
      'doLoginResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doLoginResponse',
      'DoLoginEncRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoLoginEncRequest',
      'doLoginEncResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doLoginEncResponse',
      'DoLoginWithAccessTokenRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoLoginWithAccessTokenRequest',
      'doLoginWithAccessTokenResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doLoginWithAccessTokenResponse',
      'DoMyAccount2Request' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoMyAccount2Request',
      'MyAccountStruct2' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\MyAccountStruct2',
      'ArrayOfMyaccountstruct2' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfMyaccountstruct2',
      'doMyAccount2Response' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doMyAccount2Response',
      'DoMyAccountItemsCountRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoMyAccountItemsCountRequest',
      'doMyAccountItemsCountResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doMyAccountItemsCountResponse',
      'DoMyBillingRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoMyBillingRequest',
      'doMyBillingResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doMyBillingResponse',
      'DoMyBillingItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoMyBillingItemRequest',
      'ItemBilling' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemBilling',
      'ArrayOfItembilling' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfItembilling',
      'doMyBillingItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doMyBillingItemResponse',
      'DoMyContactRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoMyContactRequest',
      'MyContactList' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\MyContactList',
      'ArrayOfMycontactlist' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfMycontactlist',
      'doMyContactResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doMyContactResponse',
      'ItemTemplateCreateStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemTemplateCreateStruct',
      'DoNewAuctionExtRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoNewAuctionExtRequest',
      'doNewAuctionExtResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doNewAuctionExtResponse',
      'DoQueryAllSysStatusRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoQueryAllSysStatusRequest',
      'SysStatusType' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SysStatusType',
      'ArrayOfSysstatustype' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSysstatustype',
      'doQueryAllSysStatusResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doQueryAllSysStatusResponse',
      'DoQuerySysStatusRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoQuerySysStatusRequest',
      'doQuerySysStatusResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doQuerySysStatusResponse',
      'DoRemoveFromBlackListRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoRemoveFromBlackListRequest',
      'BlackListResStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\BlackListResStruct',
      'ArrayOfBlacklistresstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfBlacklistresstruct',
      'doRemoveFromBlackListResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doRemoveFromBlackListResponse',
      'DoRequestCancelBidRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoRequestCancelBidRequest',
      'doRequestCancelBidResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doRequestCancelBidResponse',
      'DoRequestPayoutRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoRequestPayoutRequest',
      'RequestPayoutStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\RequestPayoutStruct',
      'doRequestPayoutResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doRequestPayoutResponse',
      'DoRequestSurchargeRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoRequestSurchargeRequest',
      'doRequestSurchargeResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doRequestSurchargeResponse',
      'DoSellSomeAgainRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSellSomeAgainRequest',
      'StructSellAgain' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\StructSellAgain',
      'ArrayOfStructsellagain' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfStructsellagain',
      'StructSellFailed' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\StructSellFailed',
      'ArrayOfStructsellfailed' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfStructsellfailed',
      'doSellSomeAgainResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSellSomeAgainResponse',
      'DoSellSomeAgainInShopRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSellSomeAgainInShopRequest',
      'doSellSomeAgainInShopResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSellSomeAgainInShopResponse',
      'DoSendEmailToUserRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSendEmailToUserRequest',
      'doSendEmailToUserResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSendEmailToUserResponse',
      'NewPostBuyFormSellerStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\NewPostBuyFormSellerStruct',
      'ArrayOfNewpostbuyformsellerstruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfNewpostbuyformsellerstruct',
      'InvoiceInfoStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\InvoiceInfoStruct',
      'NewPostBuyFormCommonStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\NewPostBuyFormCommonStruct',
      'DoSendPostBuyFormRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSendPostBuyFormRequest',
      'ActionDataStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ActionDataStruct',
      'ArrayOfActiondatastruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfActiondatastruct',
      'TransactionPayByLinkStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\TransactionPayByLinkStruct',
      'PostBuyFormStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\PostBuyFormStruct',
      'doSendPostBuyFormResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSendPostBuyFormResponse',
      'DoSendRefundFormRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSendRefundFormRequest',
      'doSendRefundFormResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSendRefundFormResponse',
      'DoSetFreeDeliveryAmountRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSetFreeDeliveryAmountRequest',
      'doSetFreeDeliveryAmountResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSetFreeDeliveryAmountResponse',
      'DoSetShipmentPriceTypeRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoSetShipmentPriceTypeRequest',
      'doSetShipmentPriceTypeResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doSetShipmentPriceTypeResponse',
      'DoShowItemInfoExtRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoShowItemInfoExtRequest',
      'ItemInfoExt' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ItemInfoExt',
      'doShowItemInfoExtResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doShowItemInfoExtResponse',
      'DoShowUserRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoShowUserRequest',
      'ShowUserFeedbacks' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ShowUserFeedbacks',
      'SellRatingAverageStruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\SellRatingAverageStruct',
      'ArrayOfSellratingaveragestruct' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellratingaveragestruct',
      'doShowUserResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doShowUserResponse',
      'DoVerifyItemRequest' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\DoVerifyItemRequest',
      'doVerifyItemResponse' => 'mcrock\\AllegroApi\\Soap\\Wsdl\\doVerifyItemResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://webapi.allegro.pl/service.php?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param DoAddPackageInfoToPostBuyFormRequest $parameters
     * @return doAddPackageInfoToPostBuyFormResponse
     */
    public function doAddPackageInfoToPostBuyForm(DoAddPackageInfoToPostBuyFormRequest $parameters)
    {
      return $this->__soapCall('doAddPackageInfoToPostBuyForm', array($parameters));
    }

    /**
     * @param DoAddToBlackListRequest $parameters
     * @return doAddToBlackListResponse
     */
    public function doAddToBlackList(DoAddToBlackListRequest $parameters)
    {
      return $this->__soapCall('doAddToBlackList', array($parameters));
    }

    /**
     * @param DoBidItemRequest $parameters
     * @return doBidItemResponse
     */
    public function doBidItem(DoBidItemRequest $parameters)
    {
      return $this->__soapCall('doBidItem', array($parameters));
    }

    /**
     * @param DoCancelBidItemRequest $parameters
     * @return doCancelBidItemResponse
     */
    public function doCancelBidItem(DoCancelBidItemRequest $parameters)
    {
      return $this->__soapCall('doCancelBidItem', array($parameters));
    }

    /**
     * @param DoCancelRefundFormRequest $parameters
     * @return doCancelRefundFormResponse
     */
    public function doCancelRefundForm(DoCancelRefundFormRequest $parameters)
    {
      return $this->__soapCall('doCancelRefundForm', array($parameters));
    }

    /**
     * @param DoCancelRefundWarningRequest $parameters
     * @return doCancelRefundWarningResponse
     */
    public function doCancelRefundWarning(DoCancelRefundWarningRequest $parameters)
    {
      return $this->__soapCall('doCancelRefundWarning', array($parameters));
    }

    /**
     * @param DoCancelTransactionRequest $parameters
     * @return doCancelTransactionResponse
     */
    public function doCancelTransaction(DoCancelTransactionRequest $parameters)
    {
      return $this->__soapCall('doCancelTransaction', array($parameters));
    }

    /**
     * @param DoChangeItemFieldsRequest $parameters
     * @return doChangeItemFieldsResponse
     */
    public function doChangeItemFields(DoChangeItemFieldsRequest $parameters)
    {
      return $this->__soapCall('doChangeItemFields', array($parameters));
    }

    /**
     * @param DoChangePriceItemRequest $parameters
     * @return doChangePriceItemResponse
     */
    public function doChangePriceItem(DoChangePriceItemRequest $parameters)
    {
      return $this->__soapCall('doChangePriceItem', array($parameters));
    }

    /**
     * @param DoChangeQuantityItemRequest $parameters
     * @return doChangeQuantityItemResponse
     */
    public function doChangeQuantityItem(DoChangeQuantityItemRequest $parameters)
    {
      return $this->__soapCall('doChangeQuantityItem', array($parameters));
    }

    /**
     * @param DoCheckItemDescriptionRequest $parameters
     * @return doCheckItemDescriptionResponse
     */
    public function doCheckItemDescription(DoCheckItemDescriptionRequest $parameters)
    {
      return $this->__soapCall('doCheckItemDescription', array($parameters));
    }

    /**
     * @param DoCheckNewAuctionExtRequest $parameters
     * @return doCheckNewAuctionExtResponse
     */
    public function doCheckNewAuctionExt(DoCheckNewAuctionExtRequest $parameters)
    {
      return $this->__soapCall('doCheckNewAuctionExt', array($parameters));
    }

    /**
     * @param DoFinishItemRequest $parameters
     * @return doFinishItemResponse
     */
    public function doFinishItem(DoFinishItemRequest $parameters)
    {
      return $this->__soapCall('doFinishItem', array($parameters));
    }

    /**
     * @param DoFinishItemsRequest $parameters
     * @return doFinishItemsResponse
     */
    public function doFinishItems(DoFinishItemsRequest $parameters)
    {
      return $this->__soapCall('doFinishItems', array($parameters));
    }

    /**
     * @param DoGetArchiveRefundsListRequest $parameters
     * @return doGetArchiveRefundsListResponse
     */
    public function doGetArchiveRefundsList(DoGetArchiveRefundsListRequest $parameters)
    {
      return $this->__soapCall('doGetArchiveRefundsList', array($parameters));
    }

    /**
     * @param DoGetBidItem2Request $parameters
     * @return doGetBidItem2Response
     */
    public function doGetBidItem2(DoGetBidItem2Request $parameters)
    {
      return $this->__soapCall('doGetBidItem2', array($parameters));
    }

    /**
     * @param DoGetBlackListUsersRequest $parameters
     * @return doGetBlackListUsersResponse
     */
    public function doGetBlackListUsers(DoGetBlackListUsersRequest $parameters)
    {
      return $this->__soapCall('doGetBlackListUsers', array($parameters));
    }

    /**
     * @param DoGetCategoryPathRequest $parameters
     * @return doGetCategoryPathResponse
     */
    public function doGetCategoryPath(DoGetCategoryPathRequest $parameters)
    {
      return $this->__soapCall('doGetCategoryPath', array($parameters));
    }

    /**
     * @param DoGetCatsDataRequest $parameters
     * @return doGetCatsDataResponse
     */
    public function doGetCatsData(DoGetCatsDataRequest $parameters)
    {
      return $this->__soapCall('doGetCatsData', array($parameters));
    }

    /**
     * @param DoGetCatsDataCountRequest $parameters
     * @return doGetCatsDataCountResponse
     */
    public function doGetCatsDataCount(DoGetCatsDataCountRequest $parameters)
    {
      return $this->__soapCall('doGetCatsDataCount', array($parameters));
    }

    /**
     * @param DoGetCatsDataLimitRequest $parameters
     * @return doGetCatsDataLimitResponse
     */
    public function doGetCatsDataLimit(DoGetCatsDataLimitRequest $parameters)
    {
      return $this->__soapCall('doGetCatsDataLimit', array($parameters));
    }

    /**
     * @param DoGetCountriesRequest $parameters
     * @return doGetCountriesResponse
     */
    public function doGetCountries(DoGetCountriesRequest $parameters)
    {
      return $this->__soapCall('doGetCountries', array($parameters));
    }

    /**
     * @param DoGetDealsRequest $parameters
     * @return doGetDealsResponse
     */
    public function doGetDeals(DoGetDealsRequest $parameters)
    {
      return $this->__soapCall('doGetDeals', array($parameters));
    }

    /**
     * @param DoGetFilledPostBuyFormsRequest $parameters
     * @return doGetFilledPostBuyFormsResponse
     */
    public function doGetFilledPostBuyForms(DoGetFilledPostBuyFormsRequest $parameters)
    {
      return $this->__soapCall('doGetFilledPostBuyForms', array($parameters));
    }

    /**
     * @param DoGetFreeDeliveryAmountRequest $parameters
     * @return doGetFreeDeliveryAmountResponse
     */
    public function doGetFreeDeliveryAmount(DoGetFreeDeliveryAmountRequest $parameters)
    {
      return $this->__soapCall('doGetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoGetItemFieldsRequest $parameters
     * @return doGetItemFieldsResponse
     */
    public function doGetItemFields(DoGetItemFieldsRequest $parameters)
    {
      return $this->__soapCall('doGetItemFields', array($parameters));
    }

    /**
     * @param DoGetItemsImagesRequest $parameters
     * @return doGetItemsImagesResponse
     */
    public function doGetItemsImages(DoGetItemsImagesRequest $parameters)
    {
      return $this->__soapCall('doGetItemsImages', array($parameters));
    }

    /**
     * @param DoGetItemsInfoRequest $parameters
     * @return doGetItemsInfoResponse
     */
    public function doGetItemsInfo(DoGetItemsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetItemsInfo', array($parameters));
    }

    /**
     * @param DoGetItemsListRequest $parameters
     * @return doGetItemsListResponse
     */
    public function doGetItemsList(DoGetItemsListRequest $parameters)
    {
      return $this->__soapCall('doGetItemsList', array($parameters));
    }

    /**
     * @param DoGetMyAddressesRequest $parameters
     * @return doGetMyAddressesResponse
     */
    public function doGetMyAddresses(DoGetMyAddressesRequest $parameters)
    {
      return $this->__soapCall('doGetMyAddresses', array($parameters));
    }

    /**
     * @param DoGetMyBidItemsRequest $parameters
     * @return doGetMyBidItemsResponse
     */
    public function doGetMyBidItems(DoGetMyBidItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyBidItems', array($parameters));
    }

    /**
     * @param DoGetMyCurrentShipmentPriceTypeRequest $parameters
     * @return doGetMyCurrentShipmentPriceTypeResponse
     */
    public function doGetMyCurrentShipmentPriceType(DoGetMyCurrentShipmentPriceTypeRequest $parameters)
    {
      return $this->__soapCall('doGetMyCurrentShipmentPriceType', array($parameters));
    }

    /**
     * @param DoGetMyDataRequest $parameters
     * @return doGetMyDataResponse
     */
    public function doGetMyData(DoGetMyDataRequest $parameters)
    {
      return $this->__soapCall('doGetMyData', array($parameters));
    }

    /**
     * @param DoGetMyFutureItemsRequest $parameters
     * @return doGetMyFutureItemsResponse
     */
    public function doGetMyFutureItems(DoGetMyFutureItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyFutureItems', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRequest $parameters
     * @return doGetMyIncomingPaymentsResponse
     */
    public function doGetMyIncomingPayments(DoGetMyIncomingPaymentsRequest $parameters)
    {
      return $this->__soapCall('doGetMyIncomingPayments', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRefundsRequest $parameters
     * @return doGetMyIncomingPaymentsRefundsResponse
     */
    public function doGetMyIncomingPaymentsRefunds(DoGetMyIncomingPaymentsRefundsRequest $parameters)
    {
      return $this->__soapCall('doGetMyIncomingPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyNotSoldItemsRequest $parameters
     * @return doGetMyNotSoldItemsResponse
     */
    public function doGetMyNotSoldItems(DoGetMyNotSoldItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyNotSoldItems', array($parameters));
    }

    /**
     * @param DoGetMyNotWonItemsRequest $parameters
     * @return doGetMyNotWonItemsResponse
     */
    public function doGetMyNotWonItems(DoGetMyNotWonItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyNotWonItems', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsRequest $parameters
     * @return doGetMyPaymentsResponse
     */
    public function doGetMyPayments(DoGetMyPaymentsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayments', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsInfoRequest $parameters
     * @return doGetMyPaymentsInfoResponse
     */
    public function doGetMyPaymentsInfo(DoGetMyPaymentsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetMyPaymentsInfo', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsRefundsRequest $parameters
     * @return doGetMyPaymentsRefundsResponse
     */
    public function doGetMyPaymentsRefunds(DoGetMyPaymentsRefundsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsRequest $parameters
     * @return doGetMyPayoutsResponse
     */
    public function doGetMyPayouts(DoGetMyPayoutsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayouts', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsDetailsRequest $parameters
     * @return doGetMyPayoutsDetailsResponse
     */
    public function doGetMyPayoutsDetails(DoGetMyPayoutsDetailsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayoutsDetails', array($parameters));
    }

    /**
     * @param DoGetMySellItemsRequest $parameters
     * @return doGetMySellItemsResponse
     */
    public function doGetMySellItems(DoGetMySellItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMySellItems', array($parameters));
    }

    /**
     * @param DoGetMySoldItemsRequest $parameters
     * @return doGetMySoldItemsResponse
     */
    public function doGetMySoldItems(DoGetMySoldItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMySoldItems', array($parameters));
    }

    /**
     * @param DoGetMyWonItemsRequest $parameters
     * @return doGetMyWonItemsResponse
     */
    public function doGetMyWonItems(DoGetMyWonItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyWonItems', array($parameters));
    }

    /**
     * @param DoGetPaymentMethodsRequest $parameters
     * @return doGetPaymentMethodsResponse
     */
    public function doGetPaymentMethods(DoGetPaymentMethodsRequest $parameters)
    {
      return $this->__soapCall('doGetPaymentMethods', array($parameters));
    }

    /**
     * @param DoGetPostBuyDataRequest $parameters
     * @return doGetPostBuyDataResponse
     */
    public function doGetPostBuyData(DoGetPostBuyDataRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyData', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForBuyersRequest $parameters
     * @return doGetPostBuyFormsDataForBuyersResponse
     */
    public function doGetPostBuyFormsDataForBuyers(DoGetPostBuyFormsDataForBuyersRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsDataForBuyers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForSellersRequest $parameters
     * @return doGetPostBuyFormsDataForSellersResponse
     */
    public function doGetPostBuyFormsDataForSellers(DoGetPostBuyFormsDataForSellersRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsDataForSellers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsIdsRequest $parameters
     * @return doGetPostBuyFormsIdsResponse
     */
    public function doGetPostBuyFormsIds(DoGetPostBuyFormsIdsRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsIds', array($parameters));
    }

    /**
     * @param DoGetPostBuyItemInfoRequest $parameters
     * @return doGetPostBuyItemInfoResponse
     */
    public function doGetPostBuyItemInfo(DoGetPostBuyItemInfoRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyItemInfo', array($parameters));
    }

    /**
     * @param DoGetRefundsDealsRequest $parameters
     * @return doGetRefundsDealsResponse
     */
    public function doGetRefundsDeals(DoGetRefundsDealsRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsDeals', array($parameters));
    }

    /**
     * @param DoGetRefundsListRequest $parameters
     * @return doGetRefundsListResponse
     */
    public function doGetRefundsList(DoGetRefundsListRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsList', array($parameters));
    }

    /**
     * @param DoGetRefundsReasonsRequest $parameters
     * @return doGetRefundsReasonsResponse
     */
    public function doGetRefundsReasons(DoGetRefundsReasonsRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsReasons', array($parameters));
    }

    /**
     * @param DoGetRelatedItemsRequest $parameters
     * @return doGetRelatedItemsResponse
     */
    public function doGetRelatedItems(DoGetRelatedItemsRequest $parameters)
    {
      return $this->__soapCall('doGetRelatedItems', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsForCategoryRequest $parameters
     * @return doGetSellFormFieldsForCategoryResponse
     */
    public function doGetSellFormFieldsForCategory(DoGetSellFormFieldsForCategoryRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFieldsForCategory', array($parameters));
    }

    /**
     * @param DoGetSessionHandleForWidgetRequest $parameters
     * @return doGetSessionHandleForWidgetResponse
     */
    public function doGetSessionHandleForWidget(DoGetSessionHandleForWidgetRequest $parameters)
    {
      return $this->__soapCall('doGetSessionHandleForWidget', array($parameters));
    }

    /**
     * @param DoGetShipmentDataRequest $parameters
     * @return doGetShipmentDataResponse
     */
    public function doGetShipmentData(DoGetShipmentDataRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentData', array($parameters));
    }

    /**
     * @param DoGetShipmentDataForRelatedItemsRequest $parameters
     * @return doGetShipmentDataForRelatedItemsResponse
     */
    public function doGetShipmentDataForRelatedItems(DoGetShipmentDataForRelatedItemsRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentDataForRelatedItems', array($parameters));
    }

    /**
     * @param DoGetShipmentPriceTypesRequest $parameters
     * @return doGetShipmentPriceTypesResponse
     */
    public function doGetShipmentPriceTypes(DoGetShipmentPriceTypesRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentPriceTypes', array($parameters));
    }

    /**
     * @param DoGetSiteJournalRequest $parameters
     * @return doGetSiteJournalResponse
     */
    public function doGetSiteJournal(DoGetSiteJournalRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournal', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsRequest $parameters
     * @return doGetSiteJournalDealsResponse
     */
    public function doGetSiteJournalDeals(DoGetSiteJournalDealsRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalDeals', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsInfoRequest $parameters
     * @return doGetSiteJournalDealsInfoResponse
     */
    public function doGetSiteJournalDealsInfo(DoGetSiteJournalDealsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalDealsInfo', array($parameters));
    }

    /**
     * @param DoGetSiteJournalInfoRequest $parameters
     * @return doGetSiteJournalInfoResponse
     */
    public function doGetSiteJournalInfo(DoGetSiteJournalInfoRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalInfo', array($parameters));
    }

    /**
     * @param DoGetStatesInfoRequest $parameters
     * @return doGetStatesInfoResponse
     */
    public function doGetStatesInfo(DoGetStatesInfoRequest $parameters)
    {
      return $this->__soapCall('doGetStatesInfo', array($parameters));
    }

    /**
     * @param DoGetSystemTimeRequest $parameters
     * @return doGetSystemTimeResponse
     */
    public function doGetSystemTime(DoGetSystemTimeRequest $parameters)
    {
      return $this->__soapCall('doGetSystemTime', array($parameters));
    }

    /**
     * @param DoGetTransactionsIDsRequest $parameters
     * @return doGetTransactionsIDsResponse
     */
    public function doGetTransactionsIDs(DoGetTransactionsIDsRequest $parameters)
    {
      return $this->__soapCall('doGetTransactionsIDs', array($parameters));
    }

    /**
     * @param DoGetUserIDRequest $parameters
     * @return doGetUserIDResponse
     */
    public function doGetUserID(DoGetUserIDRequest $parameters)
    {
      return $this->__soapCall('doGetUserID', array($parameters));
    }

    /**
     * @param DoGetUserLoginRequest $parameters
     * @return doGetUserLoginResponse
     */
    public function doGetUserLogin(DoGetUserLoginRequest $parameters)
    {
      return $this->__soapCall('doGetUserLogin', array($parameters));
    }

    /**
     * @param DoLoginRequest $parameters
     * @return doLoginResponse
     */
    public function doLogin(DoLoginRequest $parameters)
    {
      return $this->__soapCall('doLogin', array($parameters));
    }

    /**
     * @param DoLoginEncRequest $parameters
     * @return doLoginEncResponse
     */
    public function doLoginEnc(DoLoginEncRequest $parameters)
    {
      return $this->__soapCall('doLoginEnc', array($parameters));
    }

    /**
     * @param DoLoginWithAccessTokenRequest $parameters
     * @return doLoginWithAccessTokenResponse
     */
    public function doLoginWithAccessToken(DoLoginWithAccessTokenRequest $parameters)
    {
      return $this->__soapCall('doLoginWithAccessToken', array($parameters));
    }

    /**
     * @param DoMyAccount2Request $parameters
     * @return doMyAccount2Response
     */
    public function doMyAccount2(DoMyAccount2Request $parameters)
    {
      return $this->__soapCall('doMyAccount2', array($parameters));
    }

    /**
     * @param DoMyAccountItemsCountRequest $parameters
     * @return doMyAccountItemsCountResponse
     */
    public function doMyAccountItemsCount(DoMyAccountItemsCountRequest $parameters)
    {
      return $this->__soapCall('doMyAccountItemsCount', array($parameters));
    }

    /**
     * @param DoMyBillingRequest $parameters
     * @return doMyBillingResponse
     */
    public function doMyBilling(DoMyBillingRequest $parameters)
    {
      return $this->__soapCall('doMyBilling', array($parameters));
    }

    /**
     * @param DoMyBillingItemRequest $parameters
     * @return doMyBillingItemResponse
     */
    public function doMyBillingItem(DoMyBillingItemRequest $parameters)
    {
      return $this->__soapCall('doMyBillingItem', array($parameters));
    }

    /**
     * @param DoMyContactRequest $parameters
     * @return doMyContactResponse
     */
    public function doMyContact(DoMyContactRequest $parameters)
    {
      return $this->__soapCall('doMyContact', array($parameters));
    }

    /**
     * @param DoNewAuctionExtRequest $parameters
     * @return doNewAuctionExtResponse
     */
    public function doNewAuctionExt(DoNewAuctionExtRequest $parameters)
    {
      return $this->__soapCall('doNewAuctionExt', array($parameters));
    }

    /**
     * @param DoQueryAllSysStatusRequest $parameters
     * @return doQueryAllSysStatusResponse
     */
    public function doQueryAllSysStatus(DoQueryAllSysStatusRequest $parameters)
    {
      return $this->__soapCall('doQueryAllSysStatus', array($parameters));
    }

    /**
     * @param DoQuerySysStatusRequest $parameters
     * @return doQuerySysStatusResponse
     */
    public function doQuerySysStatus(DoQuerySysStatusRequest $parameters)
    {
      return $this->__soapCall('doQuerySysStatus', array($parameters));
    }

    /**
     * @param DoRemoveFromBlackListRequest $parameters
     * @return doRemoveFromBlackListResponse
     */
    public function doRemoveFromBlackList(DoRemoveFromBlackListRequest $parameters)
    {
      return $this->__soapCall('doRemoveFromBlackList', array($parameters));
    }

    /**
     * @param DoRequestCancelBidRequest $parameters
     * @return doRequestCancelBidResponse
     */
    public function doRequestCancelBid(DoRequestCancelBidRequest $parameters)
    {
      return $this->__soapCall('doRequestCancelBid', array($parameters));
    }

    /**
     * @param DoRequestPayoutRequest $parameters
     * @return doRequestPayoutResponse
     */
    public function doRequestPayout(DoRequestPayoutRequest $parameters)
    {
      return $this->__soapCall('doRequestPayout', array($parameters));
    }

    /**
     * @param DoRequestSurchargeRequest $parameters
     * @return doRequestSurchargeResponse
     */
    public function doRequestSurcharge(DoRequestSurchargeRequest $parameters)
    {
      return $this->__soapCall('doRequestSurcharge', array($parameters));
    }

    /**
     * @param DoSellSomeAgainRequest $parameters
     * @return doSellSomeAgainResponse
     */
    public function doSellSomeAgain(DoSellSomeAgainRequest $parameters)
    {
      return $this->__soapCall('doSellSomeAgain', array($parameters));
    }

    /**
     * @param DoSellSomeAgainInShopRequest $parameters
     * @return doSellSomeAgainInShopResponse
     */
    public function doSellSomeAgainInShop(DoSellSomeAgainInShopRequest $parameters)
    {
      return $this->__soapCall('doSellSomeAgainInShop', array($parameters));
    }

    /**
     * @param DoSendEmailToUserRequest $parameters
     * @return doSendEmailToUserResponse
     */
    public function doSendEmailToUser(DoSendEmailToUserRequest $parameters)
    {
      return $this->__soapCall('doSendEmailToUser', array($parameters));
    }

    /**
     * @param DoSendPostBuyFormRequest $parameters
     * @return doSendPostBuyFormResponse
     */
    public function doSendPostBuyForm(DoSendPostBuyFormRequest $parameters)
    {
      return $this->__soapCall('doSendPostBuyForm', array($parameters));
    }

    /**
     * @param DoSendRefundFormRequest $parameters
     * @return doSendRefundFormResponse
     */
    public function doSendRefundForm(DoSendRefundFormRequest $parameters)
    {
      return $this->__soapCall('doSendRefundForm', array($parameters));
    }

    /**
     * @param DoSetFreeDeliveryAmountRequest $parameters
     * @return doSetFreeDeliveryAmountResponse
     */
    public function doSetFreeDeliveryAmount(DoSetFreeDeliveryAmountRequest $parameters)
    {
      return $this->__soapCall('doSetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoSetShipmentPriceTypeRequest $parameters
     * @return doSetShipmentPriceTypeResponse
     */
    public function doSetShipmentPriceType(DoSetShipmentPriceTypeRequest $parameters)
    {
      return $this->__soapCall('doSetShipmentPriceType', array($parameters));
    }

    /**
     * @param DoShowItemInfoExtRequest $parameters
     * @return doShowItemInfoExtResponse
     */
    public function doShowItemInfoExt(DoShowItemInfoExtRequest $parameters)
    {
      return $this->__soapCall('doShowItemInfoExt', array($parameters));
    }

    /**
     * @param DoShowUserRequest $parameters
     * @return doShowUserResponse
     */
    public function doShowUser(DoShowUserRequest $parameters)
    {
      return $this->__soapCall('doShowUser', array($parameters));
    }

    /**
     * @param DoVerifyItemRequest $parameters
     * @return doVerifyItemResponse
     */
    public function doVerifyItem(DoVerifyItemRequest $parameters)
    {
      return $this->__soapCall('doVerifyItem', array($parameters));
    }

}
