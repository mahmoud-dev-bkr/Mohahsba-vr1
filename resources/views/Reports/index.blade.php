<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> التقارير </title>
    <link rel="stylesheet" href="{{ URL('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL('css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
</head>

<body>


    <div class="container-fluid">




        <div id="wrapper">

            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                  <img id="sideImg" src="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}" alt="">
                </div>
                <ul class="sidebar-nav">
                  <li>
                    <a href="#"><i class="fa-solid fa-gauge-high side-icon"></i><span
                        class="">لوحةالمتابعة</span></a>
                  </li>

                  <li>
                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-sack-dollar side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المبيعات</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                      <li class="w-100">
                        <a href="{{ route('client.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-users users-icon side-icon "></i> العملاء</span>
                            <span><a href="{{ route('client.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('Quotation.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-contract side-icon"></i><span class="be-small">عروض
                                الأسعار</span></span>
                            <span><a href="{{ route('Quotation.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('sales_invoices.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-invoice-dollar side-icon"></i><span class="be-small">فواتير
                                المبيعات</span></span>
                            <span><a href="{{ route('sales_invoices.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('Clientbond.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i><span class="be-small">سندات العملاء</span></span>
                            <span><a href="{{ route('Clientbond.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                    </ul>
                  </li>

                  <li>
                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-cart-shopping side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المشتريات
                    </a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                      <li class="w-100">
                        <a href="{{ route('Supplier.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-handshake side-icon"></i> الموردين</span>
                            <span><a href="{{ route('Supplier.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('Purchase_orders.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-circle-check side-icon"></i><span class="be-small">أوامر
                                الشراء</span></span>
                            <span><a href="{{ route('Purchase_orders.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('Purchase_Invoices.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-money-bill-wheat side-icon"></i><span class="be-smaller">فواتير
                                المشتريات</span></span>
                            <span><a href="{{ route('Purchase_Invoices.create') }}"><i class="fa-solid fa-plus plus"></i></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('Supplierbond.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i><span class="be-small">سندات
                                الموردين</span></span>
                            <span><a href="{{ route('Supplierbond.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                    </ul>
                  </li>

                  <li>
                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-table-cells side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المنتجات
                        والتكاليف</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                      <li class="w-100">
                        <a href="{{ route('Product.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-box-open side-icon"></i><span class="be-smaller">المنتجات
                                والتكاليف</span></span>
                            <span><a href="{{ route('Product.tenant') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('Site.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-location-arrow side-icon"></i>المواقع</span>
                            <span><a href="{{ route('Site.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('ManutOrder.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-boxes-stacked side-icon"></i><span class="be-small">أوامر
                                التصنيع</span></span>
                            <span><a href="{{ route('ManutOrder.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>


                    </ul>
                  </li>

                  <li>
                    <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-building-columns side-icon"></i><span class="ms-1  d-sm-inline toggle-span">الاصول
                        الثابتة</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu6" data-bs-parent="#menu">
                      <li>
                        <a href="" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-building side-icon"></i><span class="be-small">الاصول الثابتة</span></span>
                            <span><a href=""><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('drop.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-recycle side-icon"></i> الاهلاك</span>
                            <span><a href="{{ route('drop.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>


                    </ul>
                  </li>

                  <li>
                    <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-folder-open side-icon"></i><span class="ms-1  d-sm-inline toggle-span">الرواتب</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                      <li>
                        <a href="{{ route('employe.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i> الموظفين </span>
                            <span><a href="{{ route('employe.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('SettingSalary.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i>اعدادات الرواتب</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i>مسير الرواتب</span>
                            <span><a href=""><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('advance.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i> السلف </span>
                            <span><a href="{{ route('advance.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('reward.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i> المكافات </span>
                            <span><a href="{{ route('reward.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('discount.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i> الخصومات</span>
                            <span><a href="{{ route('discount.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>

                    </ul>
                  </li>

                  <li>
                    <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-money-bill-wave side-icon"></i><span
                        class="ms-1  d-sm-inline toggle-span">المحاسبة</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                      <li class="w-100">
                        <a href="{{ route('EasyRestriction.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-globe side-icon"></i><span>قيود سهلة</span></span>
                            <span><a href="{{ route('EasyRestriction.tenant') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('DailyAccountingEntries.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-wallet side-icon"></i><span class="be-smaller">قيود محاسبية
                                يدوية</span></span>
                            <span><a href="{{ route('DailyAccountingEntries.create') }}"><i class="fa-solid fa-plus plus"></i></a></span>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="{{ route('Account.index') }}" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-chart-simple side-icon"></i><span class="be-small">شجرة
                                الحسابات</span></span>
                            <span><a href="{{ route('Account.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>


                    </ul>
                  </li>

                  <li>
                    <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-diagram-project side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المهام
                        والمشاريع</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu7" data-bs-parent="#menu">
                      <li class="w-100">
                        <a href="projects.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-bars-progress side-icon"></i><span> المشاريع</span></span>
                            <span><a href="add-project.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>
                      <li>
                        <a href="missions.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-thumbtack side-icon"></i><span> المهام</span></span>
                            <span><a href="add-mission.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                        </a>
                      </li>




                    </ul>
                  </li>

                  <li>
                    <a href="{{ route('report.index') }}" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-folder side-icon"></i><span
                        class="ms-1  d-sm-inline toggle-span">التقارير</span></a>

                  </li>

                  <li>
                    <a href="mohasba-service.html" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-layer-group side-icon"></i><span class="ms-1  d-sm-inline toggle-span">خدمات
                        محاسبة</span></a>

                  </li>

                  <li>
                    <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-gear side-icon"></i><span class="ms-1  d-sm-inline toggle-span"> الإعدادات</a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu8" data-bs-parent="#menu">
                      <li class="w-100">
                        <a href="general-settings.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-gear side-icon"></i><span>الإعدادات العامة</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="subscription-settings.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-gear side-icon"></i><span> اعدادات الإشتراكات</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="electronic-connectivity.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-rocket side-icon"></i><span> الربط الإلكتروني</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="salary-settings.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-gear side-icon"></i><span> اعدادات الرواتب</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="taxes.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-gear side-icon"></i><span> الضرائب</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="users.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-user side-icon"></i><span> المستخدمين</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="payment-terms.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-circle-xmark side-icon"></i><span> شروط الدفع</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="additional-fields.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-paste side-icon"></i><span> الحقول الإضافية</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="modify-profile.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-regular fa-pen-to-square side-icon"></i><span> تعديل الملف الشخصي</span></span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="attachments.html" class="nav-link px-0">
                          <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-paperclip side-icon"></i><span> المرفقات</span></span>
                          </div>
                        </a>
                      </li>




                    </ul>
                  </li>

                  <li>
                    <a href="help-center.html" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-circle-question side-icon"></i><span class="ms-1  d-sm-inline toggle-span">مركز
                        المساعدة</span></a>

                  </li>



                </ul>
              </aside>


            <div id="navbar-wrapper">

                <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                    <div class="container-fluid nav-content">
                        <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a> <a
                            class="navbar-brand" href="#"> مرحبا بك <span class="heading">اسم المستخدم</span> في <span
                                class="heading">اسم الشركة</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">

                                    <div class="icon-nav dropdown">
                                        <a class=" dropdown-toggle" href="#" role="" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-list-ul"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <h6 class="text-center mt-1 be-small text-secondary fw-bold">آخر خمس مهام لك
                                            </h6>
                                            <hr>
                                            <div>

                                                <div class="opacity-0 missions">

                                                </div>


                                            </div>
                                            <hr>
                                            <div
                                                class="d-flex justify-content-around align-items-center text-secondary  main-drob ">

                                                <div class="be-small d-flex justify-content-center">
                                                    <i class="fa-solid fa-eye fs-6 text-secondary"></i>
                                                    <span>مشاهدة الكل</span>
                                                </div>

                                                <div class="be-small d-flex justify-content-center">
                                                    <i class="fa-solid fa-list fs-6 text-secondary"></i>
                                                    <span> إنشاء مهمة</span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </li>

                                <li class="nav-item">

                                    <div class="icon-nav dropdown">
                                        <a class=" dropdown-toggle" href="#" role="" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-regular fa-comment-dots"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <h6 class="text-center mt-1 be-small text-secondary fw-bold">آحدث خمس
                                                تعليقات تم ذكرك بها </h6>
                                            <hr>
                                            <div>

                                                <div class="opacity-0 missions">

                                                </div>


                                            </div>
                                            <hr>
                                            <div
                                                class="d-flex justify-content-around align-items-center text-secondary  main-drob ">

                                                <div class="be-small d-flex justify-content-center">
                                                    <i class="fa-solid fa-eye fs-6 text-secondary"></i>
                                                    <span>مشاهدة الكل</span>
                                                </div>


                                            </div>


                                        </div>
                                    </div>

                                </li>
                                <li class="nav-item">

                                    <div class="icon-nav dropdown">
                                        <a class=" dropdown-toggle" href="#" role="" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </a>

                                        <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">تحديثات قيود</a></li>
                                            <li><a class="dropdown-item" href="#"> مقاطع فيديو تعليمية </a></li>
                                            <li><a class="dropdown-item" href="#"> مركز المساعدة </a></li>
                                            <li><a class="dropdown-item" href="#">تعرف علي هذة الصفحة</a></li>
                                            <li><a class="dropdown-item" href="#">تابع التهيئة</a></li>

                                        </ul>
                                    </div>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="images/wallpaperflare.com_wallpaper.jpg" class="img-nav" alt="">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">تعديل الملف الشخصي</a></li>
                                        <li><a class="dropdown-item" href="#">تغيير الشركة </a></li>
                                        <li><a class="dropdown-item" href="#"> خروج </a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">English</a></li>

                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>



            </div>



            <section>
                <div class="container my-3">
                    <div class="row">
                        <div class="col-md-12 hi-mohasba">

                            <h4 class="mx-4">التقارير</h4>
                        </div>

                    </div>
                    <div class="row bg-light py-5 pb-4 brdr">



                        <div class="col-md-4 text-center">
                            <a href="{{ route('Teacher.report') }}">

                                <img src="{{ URL('images/1.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold"> دفتر الأستاذ</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center">
                            <a href="reports2.html">

                                <img src="{{ URL('images/2.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold"> قائمة الدخل</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center">
                            <a href="{{ route('reports.report3') }}">

                                <img src="{{ URL('images/3.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold"> الميزانية العمومية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="">

                                <img src="{{ URL('images/4.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> ميزان المراجعة</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('EasyRestriction.report') }}">

                                <img src="{{ URL('images/5.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> دفتر القيود</h6>
                            </a>
                        </div>

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="">

                                <img src="{{ URL('images/6.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> قائمة التدفقات النقدية</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports7.html">

                                <img src="{{ URL('images/7.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> ملخص المبيعات والمشتريات</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports8.html">

                                <img src="{{ URL('images/8.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير مواقع المنتجات</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports9.html">

                                <img src="{{ URL('images/9.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> ملخص الحساب</h6>
                            </a>
                        </div> --}}

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.Statement') }}">

                                <img src="{{ URL('images/10.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> كشف الحساب</h6>
                            </a>
                        </div>

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports11.html">

                                <img src="i{{ URL('mages/11.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> حسابات العملاء المدينون</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports12.html">

                                <img src="i{{ URL('mages/12.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار ديون العملاء</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports13.html">

                                <img src="i{{ URL('mages/13.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار عروض الأسعار</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports14.html">

                                <img src="i{{ URL('mages/14.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> حسابات الموردين الدائنين </h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports15.html">

                                <img src="i{{ URL('mages/15.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار ديون الموردين</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports16.html">

                                <img src="i{{ URL('mages/16.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار أوامر الشراء</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports17.html">

                                <img src="i{{ URL('mages/17.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير مبيعات المنتجات</h6>
                            </a>
                        </div> --}}

                        {{-- <div class="col-md-4 text-center mt-4">
                            <a href="reports18.html">

                                <img src="i{{ URL('mages/18.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير مشتريات المنتجات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports19.html">

                                <img src="i{{ URL('mages/19.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> نموذج الإقرار الضريبي</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports20.html">

                                <img src="i{{ URL('mages/20.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> حصص مبيعات المنتجات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports21.html">

                                <img src="i{{ URL('mages/21.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> العملاء الجدد</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports22.html">

                                <img src="i{{ URL('mages/22.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> الفواتير الجديدة</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports23.html">

                                <img src="i{{ URL('mages/23.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير فواتير المبيعات الضريبية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports24.html">

                                <img src="i{{ URL('mages/24.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير فواتير المشتريات الضريبية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports25.html">

                                <img src="i{{ URL('mages/25.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير عمليات المستخدمين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports26.html">

                                <img src="i{{ URL('mages/26.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير رواتب الموظفين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports27.html">

                                <img src="i{{ URL('mages/27.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير كشف حساب الموظفين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports28.html">

                                <img src="i{{ URL('mages/28.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير الإشعارات الدائنة الضريبية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="reports29.html">

                                <img src="i{{ URL('mages/29.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير الإشعارات الدائنة الضريبية </h6>
                            </a>
                        </div> --}}


                    </div>


                </div>
            </section>



        </div>





    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ URL('js/main.js') }}"></script>
</body>

</html>
