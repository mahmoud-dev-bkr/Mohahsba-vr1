<?php
//commit
use App\DataTables\SalaryDataTable;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\bondsController;
use App\Http\Controllers\ClientbondController;
use App\Http\Controllers\SupplierbondController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DailyAccountingEntriesController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DropController;
use App\Http\Controllers\EasyRestrictionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ManutOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\purchase_ordersController;
use App\Http\Controllers\PurchaseInvoiceController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\sales_invoicesController;
use App\Http\Controllers\SettingSalaryController;
use App\Http\Controllers\SupplierController;
use App\SettingSalary;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;



Auth::routes();
// 'middleware' => 'auth',
// Route::get('/test', [SalaryDataTable::class, 'query']);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth',  'namespace' => 'Dashboard'], function () {

    Route::get('/client',               [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/create',        [ClientController::class, 'create'])->name('client.create');
    Route::get('/client/update/{id}',        [ClientController::class, 'edit'])->name('client.update');
    Route::post('/client/edit/{id}',        [ClientController::class, 'update'])->name('client.edit');
    Route::post('/client/create/post',  [ClientController::class, 'store'])->name('client.create.post');
    Route::get('/client/data',          [ClientController::class, 'getClients'])->name('getClientsData');
    Route::post('/client/destroy/{id}',   [ClientController::class, 'destroy'])->name('client.destroy');

    Route::get('/Quotation',               [QuotationController::class, 'index'])->name('Quotation.index');
    Route::get('/Quotation/create',        [QuotationController::class, 'create'])->name('Quotation.create');
    Route::get('/Quotation/update/{id}',        [QuotationController::class, 'edit'])->name('Quotation.update');
    Route::post('/Quotation/edit/{id}',        [QuotationController::class, 'update'])->name('Quotation.edit');
    Route::post('/Quotation/create/post',  [QuotationController::class, 'store'])->name('Quotation.create.post');
    Route::get('/Quotation/data',          [QuotationController::class, 'getQuotations'])->name('getQuotationsData');
    Route::post('/Quotation/destroy/{id}',   [QuotationController::class, 'destroy'])->name('Quotation.destroy');
    // ------------------------------------------------< Start Supplier >-----------------
    Route::get('/Supplier',              [ SupplierController::class, 'index'])->name('Supplier.index');
    Route::get('/Supplier/create',        [SupplierController::class, 'create'])->name('Supplier.create');
    Route::get('/Supplier/update/{id}',        [SupplierController::class, 'edit'])->name('Supplier.update');
    Route::post('/Supplier/edit/{id}',        [SupplierController::class, 'update'])->name('Supplier.edit');
    Route::post('/Supplier/create/post',  [SupplierController::class, 'store'])->name('Supplier.create.post');
    Route::get('/Supplier/data',          [SupplierController::class, 'getSuppliers'])->name('getSuppliersData');
    Route::post('/Supplier/destroy/{id}',   [SupplierController::class, 'destroy'])->name('Supplier.destroy');
    // -------------------------------------------------< End Supplier >--------------------------------

    // ----------------------------------------------< Start Purchase orders >--------------------------
    Route::get('/Purchase_orders',              [ purchase_ordersController::class, 'index'])->name('Purchase_orders.index');
    Route::get('/Purchase_orders/create',        [Purchase_ordersController::class, 'create'])->name('Purchase_orders.create');
    Route::get('/Purchase_orders/update/{id}',        [Purchase_ordersController::class, 'edit'])->name('Purchase_orders.update');
    Route::post('/Purchase_orders/edit/{id}',        [Purchase_ordersController::class, 'update'])->name('Purchase_orders.edit');
    Route::post('/Purchase_orders/create/post',  [Purchase_ordersController::class, 'store'])->name('Purchase_orders.create.post');
    Route::get('/Purchase_orders/data',          [Purchase_ordersController::class, 'getPurchase_orderss'])->name('getPurchase_orderssData');
    Route::post('/Purchase_orders/destroy/{id}',   [Purchase_ordersController::class, 'destroy'])->name('Purchase_orders.destroy');
    // ---------------------------------------------< End Purchase orders >----------------------------------------
    // ----------------------------------------------< Start Purchase orders >--------------------------
    Route::get('/Purchase_Invoices',              [ PurchaseInvoiceController::class, 'index'])->name('Purchase_Invoices.index');
    Route::get('/Purchase_Invoices/create',        [PurchaseInvoiceController::class, 'create'])->name('Purchase_Invoices.create');
    Route::get('/Purchase_Invoices/update/{id}',        [PurchaseInvoiceController::class, 'edit'])->name('Purchase_Invoices.update');
    Route::get('/Purchase_Invoices/payment/{id}',        [PurchaseInvoiceController::class, 'payment'])->name('Purchase_Invoices.payment');
    Route::post('/Purchase_Invoices/paymentpost',    [PurchaseInvoiceController::class, 'paymentPost'])->name('Purchase_Invoices.payment.post');
    Route::post('/Purchase_Invoices/edit/{id}',          [PurchaseInvoiceController::class, 'update'])->name('Purchase_Invoices.edit');
    Route::post('/Purchase_Invoices/create/post',        [PurchaseInvoiceController::class, 'store'])->name('Purchase_Invoices.create.post');
    Route::get('/Purchase_Invoices/data',          [PurchaseInvoiceController::class, 'getPurchase_Invoices'])->name('getPurchase_InvoicessData');
    Route::post('/Purchase_Invoices/destroy/{id}',   [PurchaseInvoiceController::class, 'destroy'])->name('Purchase_Invoices.destroy');
    // ---------------------------------------------< End Purchase orders >----------------------------------------

    Route::get('/sales_invoices',              [ sales_invoicesController::class, 'index'])->name('sales_invoices.index');
    Route::get('/sales_invoices/show',         [ sales_invoicesController::class, 'show'])->name('sales_invoices.show');
    Route::get('/sales_invoices/create',        [sales_invoicesController::class, 'create'])->name('sales_invoices.create');
    Route::get('/sales_invoices/update/{id}',        [sales_invoicesController::class, 'edit'])->name('sales_invoices.update');
    Route::post('/sales_invoices/edit/{id}',        [sales_invoicesController::class, 'update'])->name('sales_invoices.edit');
    Route::post('/sales_invoices/create/post',  [sales_invoicesController::class, 'store'])->name('sales_invoices.create.post');
    Route::get('/sales_invoices/data',          [sales_invoicesController::class, 'getsales_invoices'])->name('getsales_invoicessData');
    Route::post('/sales_invoices/destroy/{id}',   [sales_invoicesController::class, 'destroy'])->name('sales_invoices.destroy');
    Route::get('/sales_invoices/payment/{id}',        [sales_invoicesController::class, 'payment'])->name('sales_invoices.payment');
    Route::post('/sales_invoices/paymentpost',    [sales_invoicesController::class, 'paymentPost'])->name('sales_invoices.payment.post');

    Route::get('/Clientbond',              [ ClientbondController::class, 'index'])->name('Clientbond.index');
    Route::get('/Clientbond/create',        [ClientbondController::class, 'create'])->name('Clientbond.create');
    Route::get('/Clientbond/update/{id}',        [ClientbondController::class, 'edit'])->name('Clientbond.update');
    Route::post('/Clientbond/edit/{id}',        [ClientbondController::class, 'update'])->name('Clientbond.edit');
    Route::post('/Clientbond/create/post',  [ClientbondController::class, 'store'])->name('Clientbond.create.post');
    Route::get('/Clientbond/data',          [ClientbondController::class, 'getClientbond'])->name('getClientbondsData');
    Route::post('/Clientbond/destroy/{id}',   [ClientbondController::class, 'destroy'])->name('Clientbond.destroy');

    Route::get('/Supplierbond',              [ SupplierbondController::class, 'index'])->name('Supplierbond.index');
    Route::get('/Supplierbond/create',        [SupplierbondController::class, 'create'])->name('Supplierbond.create');
    Route::get('/Supplierbond/update/{id}',        [SupplierbondController::class, 'edit'])->name('Supplierbond.update');
    Route::post('/Supplierbond/edit/{id}',        [SupplierbondController::class, 'update'])->name('Supplierbond.edit');
    Route::post('/Supplierbond/create/post',  [SupplierbondController::class, 'store'])->name('Supplierbond.create.post');
    Route::get('/Supplierbond/data',          [SupplierbondController::class, 'getSupplierbond'])->name('getSupplierbondsData');
    Route::post('/Supplierbond/destroy/{id}',   [SupplierbondController::class, 'destroy'])->name('Supplierbond.destroy');


    Route::get('/Product',              [ ProductController::class, 'index'])->name('Product.index');
    Route::get('/Product/create/{type}',        [ProductController::class, 'create'])->name('Product.create');
    Route::get('/tenant/products',        [ProductController::class, 'tenant'])->name('Product.tenant');
    Route::get('/Product/update/{id}',        [ProductController::class, 'edit'])->name('Product.update');
    Route::post('/Product/edit/{id}',        [ProductController::class, 'update'])->name('Product.edit');
    Route::post('/Product/create/post',  [ProductController::class, 'store'])->name('Product.create.post');
    Route::get('/Product/data',          [ProductController::class, 'getProduct'])->name('getProductsData');
    Route::post('/Product/destroy/{id}',   [ProductController::class, 'destroy'])->name('Product.destroy');
    Route::post('/Product/unit/ajax',   [ProductController::class, 'subAjaxUnit'])->name('sub.Ajax.unit');
    Route::post('/Product/item/ajax',   [ProductController::class, 'subAjaxItem'])->name('sub.Ajax.item');
    Route::post('/Product/unit/ajax/get',   [ProductController::class, 'getUnit'])->name('getUnit');
    Route::get('/Product/{id}',             [ProductController::class, 'show'])->name('Product.show');

    Route::get('/bonds',              [ bondsController::class, 'index'])->name('bonds.index');
    Route::get('/bonds/create',        [bondsController::class, 'create'])->name('bonds.create');
    Route::get('/bonds/update/{id}',        [bondsController::class, 'edit'])->name('bonds.update');
    Route::post('/bonds/edit/{id}',        [bondsController::class, 'update'])->name('bonds.edit');
    Route::post('/bonds/create/post',  [bondsController::class, 'store'])->name('bonds.create.post');
    Route::get('/bonds/data',          [bondsController::class, 'getbonds'])->name('getbondsData');
    Route::post('/bonds/destroy/{id}',   [bondsController::class, 'destroy'])->name('bonds.destroy');

    Route::get('/employe',              [ EmployeController::class, 'index'])->name('employe.index');
    Route::get('/employe/create',        [EmployeController::class, 'create'])->name('employe.create');
    Route::get('/employe/update/{id}',        [EmployeController::class, 'edit'])->name('employe.update');
    Route::post('/employe/edit/{id}',        [EmployeController::class, 'update'])->name('employe.edit');
    Route::post('/employe/create/post',  [EmployeController::class, 'store'])->name('employe.create.post');
    Route::get('/employe/data',          [EmployeController::class, 'getemployes'])->name('getemployeData');
    Route::post('/employe/destroy/{id}',   [EmployeController::class, 'destroy'])->name('employe.destroy');
    Route::get('/export-Employes',         [EmployeController::class,'exportEmployees'])->name('export-Employes');


    Route::get('/SettingSalary',              [ SettingSalaryController::class, 'index'])->name('SettingSalary.index');
    Route::get('/SettingSalary/update/{id}',        [SettingSalaryController::class, 'edit'])->name('SettingSalary.update');
    Route::post('/SettingSalary/edit/{id}',        [SettingSalaryController::class, 'update'])->name('SettingSalary.edit');
    Route::get('/SettingSalary/data',          [SettingSalaryController::class, 'getSettingSalary'])->name('getSettingSalaryData');
    Route::post('/SettingSalary/destroy/{id}',   [SettingSalaryController::class, 'destroy'])->name('SettingSalary.destroy');




    Route::get('/Site',              [ SiteController::class, 'index'])->name('Site.index');
    Route::get('/Site/create',        [SiteController::class, 'create'])->name('Site.create');
    Route::get('/Site/update/{id}',        [SiteController::class, 'edit'])->name('Site.update');
    Route::post('/Site/edit/{id}',        [SiteController::class, 'update'])->name('Site.edit');
    Route::post('/Site/create/post',  [SiteController::class, 'store'])->name('Site.create.post');
    Route::get('/Site/data',          [SiteController::class, 'getSite'])->name('getSiteData');
    Route::post('/Site/destroy/{id}',   [SiteController::class, 'destroy'])->name('Site.destroy');

    Route::get('/ManutOrder',              [ ManutOrderController::class, 'index'])->name('ManutOrder.index');
    Route::get('/ManutOrder/create',        [ManutOrderController::class, 'create'])->name('ManutOrder.create');
    Route::get('/ManutOrder/update/{id}',        [ManutOrderController::class, 'edit'])->name('ManutOrder.update');
    Route::post('/ManutOrder/edit/{id}',        [ManutOrderController::class, 'update'])->name('ManutOrder.edit');
    Route::post('/ManutOrder/create/post',  [ManutOrderController::class, 'store'])->name('ManutOrder.create.post');
    Route::get('/ManutOrder/data',          [ManutOrderController::class, 'getManutOrder'])->name('getManutOrderData');
    Route::post('/ManutOrder/destroy/{id}',   [ManutOrderController::class, 'destroy'])->name('ManutOrder.destroy');

    Route::get('/drop',              [DropController::class, 'index'])->name('drop.index');
    Route::get('/drop/create',        [DropController::class, 'create'])->name('drop.create');
    Route::get('/drop/update/{id}',        [DropController::class, 'edit'])->name('drop.update');
    Route::post('/drop/edit/{id}',        [DropController::class, 'update'])->name('drop.edit');
    Route::post('/drop/create/post',  [DropController::class, 'store'])->name('drop.create.post');
    Route::get('/drop/data',          [DropController::class, 'getdrop'])->name('getdropData');
    Route::post('/drop/destroy/{id}',   [DropController::class, 'destroy'])->name('drop.destroy');
    Route::get('/drop/select',   [DropController::class, 'select'])->name('drop.select');

    Route::get('/advance',              [ AdvanceController::class, 'index'])->name('advance.index');
    Route::get('/advance/create',        [AdvanceController::class, 'create'])->name('advance.create');
    Route::get('/advance/update/{id}',        [AdvanceController::class, 'edit'])->name('advance.update');
    Route::post('/advance/edit/{id}',        [AdvanceController::class, 'update'])->name('advance.edit');
    Route::post('/advance/create/post',  [AdvanceController::class, 'store'])->name('advance.create.post');
    Route::get('/advance/data',          [AdvanceController::class, 'getadvance'])->name('getadvanceData');
    Route::post('/advance/destroy/{id}',   [AdvanceController::class, 'destroy'])->name('advance.destroy');

    Route::get('/discount',              [ DiscountController::class, 'index'])->name('discount.index');
    Route::get('/discount/create',        [DiscountController::class, 'create'])->name('discount.create');
    Route::get('/discount/update/{id}',        [DiscountController::class, 'edit'])->name('discount.update');
    Route::post('/discount/edit/{id}',        [DiscountController::class, 'update'])->name('discount.edit');
    Route::post('/discount/create/post',  [DiscountController::class, 'store'])->name('discount.create.post');
    Route::get('/discount/data',          [DiscountController::class, 'getdiscount'])->name('getdiscountData');
    Route::post('/discount/destroy/{id}',   [DiscountController::class, 'destroy'])->name('discount.destroy');

    Route::get('/reward',              [ RewardController::class, 'index'])->name('reward.index');
    Route::get('/reward/create',        [RewardController::class, 'create'])->name('reward.create');
    Route::get('/reward/update/{id}',        [RewardController::class, 'edit'])->name('reward.update');
    Route::post('/reward/edit/{id}',        [RewardController::class, 'update'])->name('reward.edit');
    Route::post('/reward/create/post',  [RewardController::class, 'store'])->name('reward.create.post');
    Route::get('/reward/data',          [RewardController::class, 'getreward'])->name('getrewardData');
    Route::post('/reward/destroy/{id}',   [RewardController::class, 'destroy'])->name('reward.destroy');

    Route::get('/reward',              [ RewardController::class, 'index'])->name('reward.index');
    Route::get('/reward/create',        [RewardController::class, 'create'])->name('reward.create');
    Route::get('/reward/update/{id}',        [RewardController::class, 'edit'])->name('reward.update');
    Route::post('/reward/edit/{id}',        [RewardController::class, 'update'])->name('reward.edit');
    Route::post('/reward/create/post',  [RewardController::class, 'store'])->name('reward.create.post');
    Route::get('/reward/data',          [RewardController::class, 'getreward'])->name('getrewardData');
    Route::post('/reward/destroy/{id}',   [RewardController::class, 'destroy'])->name('reward.destroy');


    Route::get('/Account',              [AccountController::class, 'index'])->name('Account.index');
    Route::get('/Account/getAjax/{id}', [AccountController::class, 'getAccountajax'])->name('Account.get.ajax');
    Route::get('/Account/create',       [AccountController::class, 'create'])->name('Account.create');
    Route::get('/Account/update/{id}',  [AccountController::class, 'edit'])->name('Account.update');
    Route::post('/Account/edit/{id}',   [AccountController::class, 'update'])->name('Account.edit');
    Route::post('/Account/create/post', [AccountController::class, 'store'])->name('Account.create.post');
    Route::get('/Account/data',         [AccountController::class, 'getAccount'])->name('getAccountData');
    Route::post('/Account/destroy/{id}',[AccountController::class, 'destroy'])->name('Account.destroy');


    Route::get('/EasyRestriction',                [EasyRestrictionController::class, 'index'])->name('EasyRestriction.index');
    Route::get('/EasyRestriction/create/{type}',  [EasyRestrictionController::class, 'create'])->name('EasyRestriction.create');
    Route::get('/tenant/EasyRestriction',         [EasyRestrictionController::class, 'tenant'])->name('EasyRestriction.tenant');
    Route::get('/EasyRestriction/update/{id}',    [EasyRestrictionController::class, 'edit'])->name('EasyRestriction.update');
    Route::get('/EasyRestriction/data',           [EasyRestrictionController::class, 'getEasyRestriction'])->name('getEasyRestrictionData');
    Route::post('/EasyRestriction/create/post',   [EasyRestrictionController::class, 'store'])->name('EasyRestriction.create.post');
    Route::post('/EasyRestriction/edit/{id}',     [EasyRestrictionController::class, 'update'])->name('EasyRestriction.edit');
    Route::post('/EasyRestriction/destroy/{id}',  [EasyRestrictionController::class, 'destroy'])->name('EasyRestriction.destroy');

    Route::get('/DailyAccountingEntries',              [ DailyAccountingEntriesController::class, 'index'])->name('DailyAccountingEntries.index');
    Route::get('/DailyAccountingEntries/create',        [DailyAccountingEntriesController::class, 'create'])->name('DailyAccountingEntries.create');
    Route::get('/DailyAccountingEntries/update/{id}',        [DailyAccountingEntriesController::class, 'edit'])->name('DailyAccountingEntries.update');
    Route::post('/DailyAccountingEntries/edit/{id}',        [DailyAccountingEntriesController::class, 'update'])->name('DailyAccountingEntries.edit');
    Route::post('/DailyAccountingEntries/create/post',  [DailyAccountingEntriesController::class, 'store'])->name('DailyAccountingEntries.create.post');
    Route::get('/DailyAccountingEntries/data',          [DailyAccountingEntriesController::class, 'getDailyAccountingEntries'])->name('getDailyAccountingEntriesData');
    Route::post('/DailyAccountingEntries/destroy/{id}',   [DailyAccountingEntriesController::class, 'destroy'])->name('DailyAccountingEntries.destroy');


    // -----------------------------------------------< Reports >-----------------

    Route::group(['prefix' => 'Reports'], function (){
        Route::get('/', [ReportController::class, 'index'])->name('report.index');
        Route::get('/Restriction', [ReportController::class, 'ReportRestriction'])->name('EasyRestriction.report');
        Route::get('/Teacher', [ReportController::class, 'ReportTeacher'])->name('Teacher.report');
        Route::get('/Report3', [ReportController::class, 'Report3'])->name('reports.report3');
        Route::get('/Statement', [ReportController::class, 'Statement'])->name('reports.Statement');

    });

    Route::group(['prefix' => 'Download'], function (){
        Route::get('/ExcelClient',   [DownloadController::class, 'downloadExcelClient'])->name('ExcelClient');
        Route::get('/ExcelSupplier', [DownloadController::class, 'downloadExcelSupplier'])->name('ExcelSupplier');
    });

    Route::group(['prefix' => 'Export'], function (){
        Route::get('/ExportClient',   [ExportController::class, 'ExportClients'])->name('ExportClient');
        Route::get('/ExportClientbond', [ExportController::class, 'ExportClientbonds'])->name('ExportClientbond');
        Route::get('/ExcelSupplier',  [ExportController::class, 'downloadExcelSupplier'])->name('ExcelSupplier');
    });

});



Route::group(['prefix' => '/'], function () {
  Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel')->name('third');
  Route::get('{first}/{second}', 'RoutingController@secondLevel')->name('second');
  Route::get('{any}', 'RoutingController@root')->name('any');
});

// landing
Route::get('', 'RoutingController@index')->name('index');
