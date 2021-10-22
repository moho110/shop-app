<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::prefix('admin')
    ->middleware('auth:admin')  //直接用admin 来区分后台登录的用户才能查看
    ->name('admin.')->group(function () {
    Route::prefix('login')->name('login.')->group(function (){
        Route::get('login','Admin\LoginController@show');
    });

});

//前台路由集合
Route::prefix('index')
    ->middleware('auth:web') //直接用web 来区分前台登录的用户才能查看
    ->name('index.')->group(function () {
        Route::prefix('login')->name('login.')->group(function (){
            Route::get('login','Index\LoginController@index');
        });

});

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    //获取路由
    $router->get('catalog/category', 'OcApiController@index');
    $router->get('catalog/category', 'OcAddressController@index');
    $router->get('catalog/category', 'OcApiIpController@index');
    $router->get('catalog/category', 'OcApiSessionController@index');
    $router->get('catalog/category', 'OcAttributeController@index');
    $router->get('catalog/category', 'OcAttributeDescriptionController@index');
    $router->get('catalog/category', 'OcAttributeGroupController@index');
    $router->get('catalog/category', 'OcAttributeGroupDescriptionController@index');
    $router->get('catalog/category', 'OcBannerController@index');
    $router->get('catalog/category', 'OcBannerImageController@index');
    $router->get('catalog/category', 'OcCartController@index');
    $router->get('catalog/category', 'OcCategoryController@index');
    $router->get('catalog/category', 'OcCategoryDescriptionController@index');
    $router->get('catalog/category', 'OcCategoryFilterController@index');
    $router->get('catalog/category', 'OcCategoryPathController@index');
    $router->get('catalog/category', 'OcCategoryToLayoutController@index');
    $router->get('catalog/category', 'OcCategoryToStoreController@index');
    $router->get('catalog/category', 'OcCountryController@index');
    $router->get('catalog/category', 'OcCouponCategoryController@index');
    $router->get('catalog/category', 'OcCouponController@index');
    $router->get('catalog/category', 'OcCouponHistoryController@index');
    $router->get('catalog/category', 'OcCouponProductController@index');
    $router->get('catalog/category', 'OcCurrencyController@index');
    $router->get('catalog/category', 'OcCustomerActivityController@index');
    $router->get('catalog/category', 'OcCustomerAffiliateController@index');
    $router->get('catalog/category', 'OcCustomerApprovalController@index');
    $router->get('catalog/category', 'OcCustomerController@index');
    $router->get('catalog/category', 'OcCustomerGroupController@index');
    $router->get('catalog/category', 'OcCustomerGroupDescriptionController@index');
    $router->get('catalog/category', 'OcCustomerHistoryController@index');
    $router->get('catalog/category', 'OcCustomerIpController@index');
    $router->get('catalog/category', 'OcCustomerLoginController@index');
    $router->get('catalog/category', 'OcCustomerOnlineController@index');
    $router->get('catalog/category', 'OcCustomerRewardController@index');
    $router->get('catalog/category', 'OcCustomerSearchController@index');
    $router->get('catalog/category', 'OcCustomerTransactionController@index');
    $router->get('catalog/category', 'OcCustomerWishlistController@index');
    $router->get('catalog/category', 'OcCustomFieldController@index');
    $router->get('catalog/category', 'OcCustomFieldCustomerGroupController@index');
    $router->get('catalog/category', 'OcCustomFieldDescriptionController@index');
    $router->get('catalog/category', 'OcCustomFieldValueController@index');
    $router->get('catalog/category', 'OcCustomFieldValueDescriptionController@index');
    $router->get('catalog/category', 'OcDownloadController@index');
    $router->get('catalog/category', 'OcDownloadDescriptionController@index');
    $router->get('catalog/category', 'OcEventController@index');
    $router->get('catalog/category', 'OcExtensionController@index');
    $router->get('catalog/category', 'OcExtensionInstallController@index');
    $router->get('catalog/category', 'OcExtensionPathController@index');
    $router->get('catalog/category', 'OcFilterController@index');
    $router->get('catalog/category', 'OcFilterDescriptionController@index');
    $router->get('catalog/category', 'OcFilterGroupController@index');
    $router->get('catalog/category', 'OcFilterGroupDescriptionController@index');
    $router->get('catalog/category', 'OcGeoZoneController@index');
    $router->get('catalog/category', 'OcGoogleshoppingCategoryController@index');
    $router->get('catalog/category', 'OcGoogleshoppingProductController@index');
    $router->get('catalog/category', 'OcGoogleshoppingProductStatusController@index');
    $router->get('catalog/category', 'OcGoogleshoppingProductTargetController@index');
    $router->get('catalog/category', 'OcGoogleshoppingTargetController@index');
    $router->get('catalog/category', 'OcInformationController@index');
    $router->get('catalog/category', 'OcInformationDescriptionController@index');
    $router->get('catalog/category', 'OcInformationToLayoutController@index');
    $router->get('catalog/category', 'OcInformationToStoreController@index');
    $router->get('catalog/category', 'OcLanguageController@index');
    $router->get('catalog/category', 'OcLayoutController@index');
    $router->get('catalog/category', 'OcLayoutModuleController@index');
    $router->get('catalog/category', 'OcLayoutRouteController@index');
    $router->get('catalog/category', 'OcLengthClassController@index');
    $router->get('catalog/category', 'OcLengthClassDescriptionController@index');
    $router->get('catalog/category', 'OcLocationController@index');
    $router->get('catalog/category', 'OcManufacturerController@index');
    $router->get('catalog/category', 'OcManufacturerToStoreController@index');
    $router->get('catalog/category', 'OcMarketingController@index');
    $router->get('catalog/category', 'OcModificationController@index');
    $router->get('catalog/category', 'OcModuleController@index');
    $router->get('catalog/category', 'OcOptionController@index');
    $router->get('catalog/category', 'OcOptionDescriptionController@index');
    $router->get('catalog/category', 'OcOptionValueController@index');
    $router->get('catalog/category', 'OcOptionValueDescriptionController@index');
    $router->get('catalog/category', 'OcOrderController@index');
    $router->get('catalog/category', 'OcOrderHistoryController@index');
    $router->get('catalog/category', 'OcOrderOptionController@index');
    $router->get('catalog/category', 'OcOrderProductController@index');
    $router->get('catalog/category', 'OcOrderRecurringController@index');
    $router->get('catalog/category', 'OcOrderRecurringTransactionController@index');
    $router->get('catalog/category', 'OcOrderShipmentController@index');
    $router->get('catalog/category', 'OcOrderStatusController@index');
    $router->get('catalog/category', 'OcOrderTotalController@index');
    $router->get('catalog/category', 'OcOrderVoucherController@index');
    $router->get('catalog/category', 'OcProductAttributeController@index');
    $router->get('catalog/category', 'OcProductController@index');
    $router->get('catalog/category', 'OcProductDescriptionController@index');
    $router->get('catalog/category', 'OcProductDiscountController@index');
    $router->get('catalog/category', 'OcProductFilterController@index');
    $router->get('catalog/category', 'OcProductImageController@index');
    $router->get('catalog/category', 'OcProductOptionController@index');
    $router->get('catalog/category', 'OcProductOptionValueController@index');
    $router->get('catalog/category', 'OcProductRecurringController@index');
    $router->get('catalog/category', 'OcProductRelatedController@index');
    $router->get('catalog/category', 'OcProductRewardController@index');
    $router->get('catalog/category', 'OcProductSpecialController@index');
    $router->get('catalog/category', 'OcProductToCategoryController@index');
    $router->get('catalog/category', 'OcProductToDownloadController@index');
    $router->get('catalog/category', 'OcProductToLayoutController@index');
    $router->get('catalog/category', 'OcProductToStoreController@index');
    $router->get('catalog/category', 'OcRecurringController@index');
    $router->get('catalog/category', 'OcRecurringDescriptionController@index');
    $router->get('catalog/category', 'OcReturnActionController@index');
    $router->get('catalog/category', 'OcReturnController@index');
    $router->get('catalog/category', 'OcReturnHistoryController@index');
    $router->get('catalog/category', 'OcReturnReasonController@index');
    $router->get('catalog/category', 'OcReturnStatusController@index');
    $router->get('catalog/category', 'OcReviewController@index');
    $router->get('catalog/category', 'OcSeoUrlController@index');
    $router->get('catalog/category', 'OcSessionController@index');
    $router->get('catalog/category', 'OcSettingController@index');
    $router->get('catalog/category', 'OcShippingCourierController@index');
    $router->get('catalog/category', 'OcStatisticsController@index');
    $router->get('catalog/category', 'OcStockStatusController@index');
    $router->get('catalog/category', 'OcStoreController@index');
    $router->get('catalog/category', 'OcTaxClassController@index');
    $router->get('catalog/category', 'OcTaxRateController@index');
    $router->get('catalog/category', 'OcTaxRateToCustomerGroupController@index');
    $router->get('catalog/category', 'OcTaxRuleController@index');
    $router->get('catalog/category', 'OcThemeController@index');
    $router->get('catalog/category', 'OcTranslationController@index');
    $router->get('catalog/category', 'OcUploadController@index');
    $router->get('catalog/category', 'OcUserController@index');
    $router->get('catalog/category', 'OcUserGroupController@index');
    $router->get('catalog/category', 'OcVoucherController@index');
    $router->get('catalog/category', 'OcVoucherHistoryController@index');
    $router->get('catalog/category', 'OcVoucherThemeController@index');
    $router->get('catalog/category', 'OcVoucherThemeDescriptionController@index');
    $router->get('catalog/category', 'OcWeightClassController@index');
    $router->get('catalog/category', 'OcWeightClassDescriptionController@index');
    $router->get('catalog/category', 'OcZoneController@index');
    $router->get('catalog/category', 'OcZoneToGeoZoneController@index');
    //获取资源
    $router->resource('catalog/category',OcAddressController::class);
    $router->resource('catalog/category',OcApiController::class);
    $router->resource('catalog/category',OcApiIpController::class);
    $router->resource('catalog/category',OcApiSessionController::class);
    $router->resource('catalog/category',OcAttributeController::class);
    $router->resource('catalog/category',OcAttributeDescriptionController::class);
    $router->resource('catalog/category',OcAttributeGroupController::class);
    $router->resource('catalog/category',OcAttributeGroupDescriptionController::class);
    $router->resource('catalog/category',OcBannerController::class);
    $router->resource('catalog/category',OcBannerImageController::class);
    $router->resource('catalog/category',OcCartController::class);
    $router->resource('catalog/category',OcCategoryController::class);
    $router->resource('catalog/category',OcCategoryDescriptionController::class);
    $router->resource('catalog/category',OcCategoryFilterController::class);
    $router->resource('catalog/category',OcCategoryPathController::class);
    $router->resource('catalog/category',OcCategoryToLayoutController::class);
    $router->resource('catalog/category',OcCategoryToStoreController::class);
    $router->resource('catalog/category',OcCountryController::class);
    $router->resource('catalog/category',OcCouponCategoryController::class);
    $router->resource('catalog/category',OcCouponController::class);
    $router->resource('catalog/category',OcCouponHistoryController::class);
    $router->resource('catalog/category',OcCouponProductController::class);
    $router->resource('catalog/category',OcCurrencyController::class);
    $router->resource('catalog/category',OcCustomerActivityController::class);
    $router->resource('catalog/category',OcCustomerAffiliateController::class);
    $router->resource('catalog/category',OcCustomerApprovalController::class);
    $router->resource('catalog/category',OcCustomerController::class);
    $router->resource('catalog/category',OcCustomerGroupController::class);
    $router->resource('catalog/category',OcCustomerGroupDescriptionController::class);
    $router->resource('catalog/category',OcCustomerHistoryController::class);
    $router->resource('catalog/category',OcCustomerIpController::class);
    $router->resource('catalog/category',OcCustomerLoginController::class);
    $router->resource('catalog/category',OcCustomerOnlineController::class);
    $router->resource('catalog/category',OcCustomerRewardController::class);
    $router->resource('catalog/category',OcCustomerSearchController::class);
    $router->resource('catalog/category',OcCustomerTransactionController::class);
    $router->resource('catalog/category',OcCustomerWishlistController::class);
    $router->resource('catalog/category',OcCustomFieldController::class);
    $router->resource('catalog/category',OcCustomFieldCustomerGroupController::class);
    $router->resource('catalog/category',OcCustomFieldDescriptionController::class);
    $router->resource('catalog/category',OcCustomFieldValueController::class);
    $router->resource('catalog/category',OcCustomFieldValueDescriptionController::class);
    $router->resource('catalog/category',OcDownloadController::class);
    $router->resource('catalog/category',OcDownloadDescriptionController::class);
    $router->resource('catalog/category',OcEventController::class);
    $router->resource('catalog/category',OcExtensionController::class);
    $router->resource('catalog/category',OcExtensionInstallController::class);
    $router->resource('catalog/category',OcExtensionPathController::class);
    $router->resource('catalog/category',OcFilterController::class);
    $router->resource('catalog/category',OcFilterDescriptionController::class);
    $router->resource('catalog/category',OcFilterGroupController::class);
    $router->resource('catalog/category',OcFilterGroupDescriptionController::class);
    $router->resource('catalog/category',OcGeoZoneController::class);
    $router->resource('catalog/category',OcGoogleshoppingCategoryController::class);
    $router->resource('catalog/category',OcGoogleshoppingProductController::class);
    $router->resource('catalog/category',OcGoogleshoppingProductStatusController::class);
    $router->resource('catalog/category',OcGoogleshoppingProductTargetController::class);
    $router->resource('catalog/category',OcGoogleshoppingTargetController::class);
    $router->resource('catalog/category',OcInformationController::class);
    $router->resource('catalog/category',OcInformationDescriptionController::class);
    $router->resource('catalog/category',OcInformationToLayoutController::class);
    $router->resource('catalog/category',OcInformationToStoreController::class);
    $router->resource('catalog/category',OcLanguageController::class);
    $router->resource('catalog/category',OcLayoutController::class);
    $router->resource('catalog/category',OcLayoutModuleController::class);
    $router->resource('catalog/category',OcLayoutRouteController::class);
    $router->resource('catalog/category',OcLengthClassController::class);
    $router->resource('catalog/category',OcLengthClassDescriptionController::class);
    $router->resource('catalog/category',OcLocationController::class);
    $router->resource('catalog/category',OcManufacturerController::class);
    $router->resource('catalog/category',OcManufacturerToStoreController::class);
    $router->resource('catalog/category',OcMarketingController::class);
    $router->resource('catalog/category',OcModificationController::class);
    $router->resource('catalog/category',OcModuleController::class);
    $router->resource('catalog/category',OcOptionController::class);
    $router->resource('catalog/category',OcOptionDescriptionController::class);
    $router->resource('catalog/category',OcOptionValueController::class);
    $router->resource('catalog/category',OcOptionValueDescriptionController::class);
    $router->resource('catalog/category',OcOrderController::class);
    $router->resource('catalog/category',OcOrderHistoryController::class);
    $router->resource('catalog/category',OcOrderOptionController::class);
    $router->resource('catalog/category',OcOrderProductController::class);
    $router->resource('catalog/category',OcOrderRecurringController::class);
    $router->resource('catalog/category',OcOrderRecurringTransactionController::class);
    $router->resource('catalog/category',OcOrderShipmentController::class);
    $router->resource('catalog/category',OcOrderStatusController::class);
    $router->resource('catalog/category',OcOrderTotalController::class);
    $router->resource('catalog/category',OcOrderVoucherController::class);
    $router->resource('catalog/category',OcProductAttributeController::class);
    $router->resource('catalog/category',OcProductController::class);
    $router->resource('catalog/category',OcProductDescriptionController::class);
    $router->resource('catalog/category',OcProductDiscountController::class);
    $router->resource('catalog/category',OcProductFilterController::class);
    $router->resource('catalog/category',OcProductImageController::class);
    $router->resource('catalog/category',OcProductOptionController::class);
    $router->resource('catalog/category',OcProductOptionValueController::class);
    $router->resource('catalog/category',OcProductRecurringController::class);
    $router->resource('catalog/category',OcProductRelatedController::class);
    $router->resource('catalog/category',OcProductRewardController::class);
    $router->resource('catalog/category',OcProductSpecialController::class);
    $router->resource('catalog/category',OcProductToCategoryController::class);
    $router->resource('catalog/category',OcProductToDownloadController::class);
    $router->resource('catalog/category',OcProductToLayoutController::class);
    $router->resource('catalog/category',OcProductToStoreController::class);
    $router->resource('catalog/category',OcRecurringController::class);
    $router->resource('catalog/category',OcRecurringDescriptionController::class);
    $router->resource('catalog/category',OcReturnActionController::class);
    $router->resource('catalog/category',OcReturnController::class);
    $router->resource('catalog/category',OcReturnHistoryController::class);
    $router->resource('catalog/category',OcReturnReasonController::class);
    $router->resource('catalog/category',OcReturnStatusController::class);
    $router->resource('catalog/category',OcReviewController::class);
    $router->resource('catalog/category',OcSeoUrlController::class);
    $router->resource('catalog/category',OcSessionController::class);
    $router->resource('catalog/category',OcSettingController::class);
    $router->resource('catalog/category',OcShippingCourierController::class);
    $router->resource('catalog/category',OcStatisticsController::class);
    $router->resource('catalog/category',OcStockStatusController::class);
    $router->resource('catalog/category',OcProductOptionController::class);
    $router->resource('catalog/category',OcStoreController::class);
    $router->resource('catalog/category',OcTaxClassController::class);
    $router->resource('catalog/category',OcTaxRateController::class);
    $router->resource('catalog/category',OcTaxRateToCustomerGroupController::class);
    $router->resource('catalog/category',OcTaxRuleController::class);
    $router->resource('catalog/category',OcThemeController::class);
    $router->resource('catalog/category',OcTranslationController::class);
    $router->resource('catalog/category',OcUploadController::class);
    $router->resource('catalog/category',OcUserController::class);
    $router->resource('catalog/category',OcUserGroupController::class);
    $router->resource('catalog/category',OcVoucherController::class);
    $router->resource('catalog/category',OcVoucherHistoryController::class);
    $router->resource('catalog/category',OcVoucherThemeController::class);
    $router->resource('catalog/category',OcVoucherThemeDescriptionController::class);
    $router->resource('catalog/category',OcWeightClassController::class);
    $router->resource('catalog/category',OcWeightClassDescriptionController::class);
    $router->resource('catalog/category',OcZoneController::class);
    $router->resource('catalog/category',OcZoneToGeoZoneController::class);

});
