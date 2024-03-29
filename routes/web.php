<?php
use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);

// dashboard Routes
Route::get('/','DashboardController@dashboardEcommerce')->name('dashboard-ecommerce')->middleware("auth");
Route::get('projects','ApplicationController@emailApplication')->middleware("auth");
Route::get('projects/list','ApplicationController@chatApplication')->middleware("auth");
Route::post('project/delete/{id}', 'ProjectController@delete')->middleware("auth");
Route::post('project/create', 'ProjectController@create')->middleware("auth");
Route::post('project/approve/{id}', 'ProjectController@approve')->middleware("auth");

// Route::group(['prefix' => 'dashboard'], function () {
//   Route::get('ecommerce','DashboardController@dashboardEcommerce')->name('dashboard-ecommerce');
//   Route::get('analytics','DashboardController@dashboardAnalytics')->name('dashboard-analytics');
// });

// //Application Routes
// Route::group(['prefix' => 'app'], function () {
  
//   Route::get('chat','ApplicationController@chatApplication')->name('app-chat');
//   Route::get('todo','ApplicationController@todoApplication')->name('app-todo');
//   Route::get('calendar','ApplicationController@calendarApplication')->name('app-calendar');
//   Route::get('kanban','ApplicationController@kanbanApplication')->name('app-kanban');
//   Route::get('invoice/view','ApplicationController@invoiceApplication')->name('app-invoice-view');
//   Route::get('invoice/list','ApplicationController@invoiceListApplication')->name('app-invoice-list');
//   Route::get('invoice/edit','ApplicationController@invoiceEditApplication')->name('app-invoice-edit');
//   Route::get('invoice/add','ApplicationController@invoiceAddApplication')->name('app-invoice-add');
//   Route::get('file-manager','ApplicationController@fileManagerApplication')->name('app-file-manager');
//   // User Route
//   Route::get('users/list','UsersController@listUser')->name('app-users-list');
//   Route::get('users/view','UsersController@viewUser')->name('app-users-view');
//   Route::get('users/edit','UsersController@editUser')->name('app-users-edit');
// });

// // Content Page Routes
// Route::group(['prefix' => 'content'], function () {
//   Route::get('grid','ContentController@gridContent')->name('content-grid');
//   Route::get('typography','ContentController@typographyContent')->name('content-typography');
//   Route::get('text-utilities','ContentController@textUtilitiesContent')->name('content-text-utilities');
//   Route::get('syntax-highlighter','ContentController@contentSyntaxHighlighter')->name('content-syntax-highlighter');
//   Route::get('helper-classes','ContentController@contentHelperClasses')->name('content-helper-classes');
//   Route::get('colors','ContentController@colorContent')->name('content-colors');
// });

// // icons
// Route::group(['prefix' => 'icons'], function () {
//   Route::get('livicons','IconsController@liveIcons')->name('icons-livicons');
//   Route::get('boxicons','IconsController@boxIcons')->name('icons-boxicons');
// });

// // card
// Route::group(['prefix' => 'card'], function () {
//   Route::get('basic','CardController@basicCard')->name('card-basic');
//   Route::get('actions','CardController@actionCard')->name('card-actions');
//   Route::get('widgets','CardController@widgets')->name('card-widgets');
// });


// // component route
// Route::group(['prefix' => 'component'], function () {
//   Route::get('alerts','ComponentController@alertComponenet')->name('component-alerts');
//   Route::get('buttons-basic','ComponentController@buttonComponenet')->name('component-buttons-basic');
//   Route::get('breadcrumbs','ComponentController@breadcrumbsComponenet')->name('component-breadcrumbs');
//   Route::get('carousel','ComponentController@carouselComponenet')->name('component-carousel');
//   Route::get('collapse','ComponentController@collapseComponenet')->name('component-collapse');
//   Route::get('dropdowns','ComponentController@dropdownComponenet')->name('component-dropdowns');
//   Route::get('list-group','ComponentController@listGroupComponenet')->name('component-list-group');
//   Route::get('modals','ComponentController@modalComponenet')->name('component-modals');
//   Route::get('pagination','ComponentController@paginationComponenet')->name('component-pagination');
//   Route::get('navbar','ComponentController@navbarComponenet')->name('component-navbar');
//   Route::get('tabs-component','ComponentController@tabsComponenet')->name('component-tabs-component');
//   Route::get('pills-component','ComponentController@pillComponenet')->name('component-pills-component');
//   Route::get('tooltips','ComponentController@tooltipsComponenet')->name('component-tooltips');
//   Route::get('popovers','ComponentController@popoversComponenet')->name('component-popovers');
//   Route::get('badges','ComponentController@badgesComponenet')->name('component-badges');
//   Route::get('pill-badges','ComponentController@pillBadgesComponenet')->name('component-pill-badges');
//   Route::get('progress','ComponentController@progressComponenet')->name('component-progress');
//   Route::get('media-objects','ComponentController@mediaObjectComponenet')->name('component-media-objects');
//   Route::get('spinner','ComponentController@spinnerComponenet')->name('component-spinner');
//   Route::get('bs-toast','ComponentController@toastsComponenet')->name('component-bs-toast');
// });

// // extra component
// Route::group(['prefix' => 'extra-component'], function () {
//   Route::get('avatar','ExComponentController@avatarComponent')->name('extra-component-avatar');
//   Route::get('chips','ExComponentController@chipsComponent')->name('extra-component-chips');
//   Route::get('divider','ExComponentController@dividerComponent')->name('extra-component-divider');
// });

// // form elements
// Route::group(['prefix' => 'form'], function () {
//   Route::get('inputs','FormController@inputForm')->name('form-inputs');
//   Route::get('input-groups','FormController@inputGroupForm')->name('form-input-groups');
//   Route::get('number-input','FormController@numberInputForm')->name('form-number-input');
//   Route::get('select','FormController@selectForm')->name('form-select');
//   Route::get('radio','FormController@radioForm')->name('form-radio');
//   Route::get('checkbox','FormController@checkboxForm')->name('form-checkbox');
//   Route::get('switch','FormController@switchForm')->name('form-switch');
//   Route::get('textarea','FormController@textareaForm')->name('form-textarea');
//   Route::get('quill-editor','FormController@quillEditorForm')->name('form-quill-editor');
//   Route::get('file-uploader','FormController@fileUploaderForm')->name('form-file-uploader');
//   Route::get('date-time-picker','FormController@datePickerForm')->name('form-date-time-picker');
//   Route::get('layout','FormController@formLayout')->name('form-layout');
//   Route::get('wizard','FormController@formWizard')->name('form-wizard');
//   Route::get('validation','FormController@formValidation')->name('form-validation');
//   Route::get('repeater','FormController@formRepeater')->name('form-repeater');
// });

// // table route
// Route::group(['prefix' => 'table'], function () {
//   Route::get('','TableController@basicTable')->name('table');
//   Route::get('extended','TableController@extendedTable')->name('table-extended');
//   Route::get('datatable','TableController@dataTable')->name('table-datatable');
// });

// // page Route
// Route::group(['prefix' => 'page'], function () {
//   Route::get('user/profile','PageController@userProfilePage')->name('page-user-profile');
//   Route::get('faq','PageController@faqPage')->name('page-faq');
//   Route::get('knowledge-base','PageController@knowledgeBasePage')->name('page-knowledge-base');
//   Route::get('knowledge-base/categories','PageController@knowledgeCatPage')->name('page-knowledge-base');
//   Route::get('knowledge-base/categories/question','PageController@knowledgeQuestionPage')->name('page-knowledge-base');
//   Route::get('search','PageController@searchPage')->name('page-search');
//   Route::get('account-settings','PageController@accountSettingPage')->name('page-account-settings');
// });

// // Authentication  Route
// Route::group(['prefix' => 'auth'], function () {
//   Route::get('login','AuthenticationController@loginPage')->name('auth-login');
//   Route::get('register','AuthenticationController@registerPage')->name('auth-register');
//   Route::get('forgot-password','AuthenticationController@forgetPasswordPage')->name('auth-forgot-password');
//   Route::get('reset-password','AuthenticationController@resetPasswordPage')->name('auth-reset-password');
//   Route::get('lock-screen','AuthenticationController@authLockPage')->name('auth-lock-screen');
// });

// // Miscellaneous
// Route::group(['prefix' => 'misc'], function () {
//   Route::get('coming-soon','MiscellaneousController@comingSoonPage')->name('misc-coming-soon');
//   Route::get('error-404','MiscellaneousController@error404Page')->name('misc-error-404');
//   Route::get('error-500','MiscellaneousController@error500Page')->name('misc-error-500');
//   Route::get('not-authorized','MiscellaneousController@notAuthPage')->name('misc-not-authorized');
//   Route::get('maintenance','MiscellaneousController@maintenancePage')->name('misc-maintenance');
// });

// // Charts Route
// Route::group(['prefix' => 'chart'], function () {
//   Route::get('apex','ChartController@apexChart')->name('chart-apex');
//   Route::get('chartjs','ChartController@chartJs')->name('chart-chartjs');
//   Route::get('chartist','ChartController@chartist')->name('chart-chartist');
// });

//  Route::get('maps/leaflet','ChartController@leafletMap')->name('maps-leaflet');

// // extension route
// Route::group(['prefix' => 'extension'], function () {
//   Route::get('sweet-alerts','ExtensionsController@sweetAlert')->name('extension-sweet-alerts');
//   Route::get('toastr','ExtensionsController@toastr')->name('extension-toastr');
//   Route::get('noui-slider','ExtensionsController@noUiSlider')->name('extension-noui-slider');
//   Route::get('drag-drop','ExtensionsController@dragComponent')->name('extension-drag-drop');
//   Route::get('tour','ExtensionsController@tourComponent')->name('extension-tour');
//   Route::get('swiper','ExtensionsController@swiperComponent')->name('extension-swiper');
//   Route::get('treeview','ExtensionsController@treeviewComponent')->name('extension-treeview');
//   Route::get('block-ui','ExtensionsController@blockUIComponent')->name('extension-block-ui');
//   Route::get('media-player','ExtensionsController@mediaComponent')->name('extension-media-player');
//   Route::get('miscellaneous','ExtensionsController@miscellaneous')->name('extension-miscellaneous');
//   Route::get('locale','ExtensionsController@locale')->name('extension-locale');
//   Route::get('ratings','ExtensionsController@ratings')->name('extension-ratings');
// });

Route::get('logout', function() {
  Auth::logout();
  return redirect("/login");
});

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap'])->name('lang-locale');



