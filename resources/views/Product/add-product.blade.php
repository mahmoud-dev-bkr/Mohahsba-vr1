<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إنشاء منتج</title>
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
            <a href="dashboard.html"><i class="fa-solid fa-gauge-high side-icon"></i><span
                class="">لوحةالمتابعة</span></a>
          </li>

          <li>
            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-sack-dollar side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المبيعات</a>
            <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
              <li class="w-100">
                <a href="clients.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-users users-icon "></i> العملاء</span>
                    <span><a href="add-client.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>
              <li>
                <a href="quotations.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-contract"></i> عروض الأسعار</span>
                    <span><a href="add-quotation.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>

              <li>
                <a href="Sales-invoices.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-invoice-dollar"></i> فواتير المبيعات</span>
                    <span><a href="add-sales-bill.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>
              <li>
                <a href="customer-bonds.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-lines"></i> سندات العملاء </span>
                    <span><a href="add-bonds.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
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
                <a href="Suppliers.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-handshake"></i> الموردين</span>
                    <span><a href="add-supplier.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>
              <li>
                <a href="purchase-orders.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-circle-check"></i> أوامر الشراء</span>
                    <span><a href="add-purch-order.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>

              <li>
                <a href="purchase-invoices.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-money-bill-wheat"></i>فواتير المشتريات</span>
                    <span><a href="add-purchase-invoices.html"><i class="fa-solid fa-plus plus"></i></span></div>
                </a>
              </li>
              <li>
                <a href="supplier-bonds.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-lines"></i> سندات الموردين </span>
                    <span><a href="add-supplier-bond.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
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
                <a href="{{ route('Product.create', 1) }}" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-box-open"></i><span class="be-small">المنتجات والتكاليف</span></span>
                    <span><a href="add-product.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>
              <li>
                <a href="sites.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-location-arrow"></i>المواقع</span>
                    <span><a href="add-site.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>

              <li>
                <a href="manufacturing-orders.html" class="nav-link px-0">
                  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-boxes-stacked"></i> أوامر التصنيع</span>
                    <span><a href="add-manufacturing-order.html"><i class="fa-solid fa-plus plus"></i></a></span></div>
                </a>
              </li>


            </ul>
          </li>



        </ul>
      </aside>

      <div id="navbar-wrapper">

        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
          <div class="container-fluid nav-content">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a> <a class="navbar-brand"
              href="#"> مرحبا بك <span class="heading">اسم المستخدم</span> في <span class="heading">اسم
                الشركة</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-list-ul"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-regular fa-comment-dots"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-circle-dot"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-house-chimney"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>

              </ul>

            </div>
          </div>
        </nav>

      </div>

      <sectio0n id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3">المنتجات والتكاليف</span></li>
              <li class="text-dark">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Product.create', 1) }}"> المنتجات والتكاليف</a>
              </li>
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="add-product.html">إنشاء منتج</a>
              </li>
            </ul>
          </div>



        </div>
      </sectio0n>


      <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
              href="{{ route('Product.create', 1) }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3">
          <div class="row">
            <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">إنشاء منتج</h4>
            </div>

          </div>
          <div class="row bg-light pb-4 brdr">

            <div class="col-md-12 clients ">

              <div class="container-fluid main-bg">


                <!-- Responsive Arrow Progress Bar -->
                <div class="arrow-steps clearfix">
                  <div class="step current"> <span> <a href="#">نوع المنتج</a></span> </div>
                  <div class="step"> <span><a href="#">املا التفاصيل</a></span> </div>
                  <div class="step d-none"> <span><a href="#"></a></span> </div>

                </div>
              </div>




            </div>

            <h3 class="text-center">نوع المنتج</h3>

            <div class="row my-5 text-center px-5">

              <div class="col-md-4">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك محاسبة اضافة منتج يباع ويشتري بنفس حالته الاصلية او كجزء من منتج مجمع يباع بسعر واحد">
                  <a href="{{ route('Product.create', 1) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_product.svg') }}" alt="">

                      </div>
                      <div>
                        <p>منتج</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك محاسبة إنشاء منتج مجمع يصنع من عدة منتجات أو مواد أولية. المنتج مجمع يباع كمنتج واحد و يقوم بتعديل المخزون لكل واحد من المنتجات المستخدمة في تجميعه. تفاصيل التجميع تكون ظاهرة للمنشأة فقط ولا تظهر للعميل">
                  <a href="{{ route('Product.create', 2) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_recipe.svg') }}" alt="">
                      </div>
                      <div>
                        <p>منتج مجمع</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="bottom"
                  data-bs-title="مادة أولية يتم الإستعانة بها لتصنيع منتج آخر، ولا يتم بيع المادة الأولية إنما يتم استخدامها للتصنيع فقط. مثل: الخشب لصناعة الطاولات. وتساهم هذه المواد في عملية إنتاج المنتج المجمع.">
                  <a href="{{ route('Product.create', 3) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_rawMaterial.svg') }}" alt="">

                      </div>
                      <div>
                        <p>مادة اولية</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4 mt-5">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك قيود إضافة خدمات تقدم للعملاء تكون مشابهة للمنتجات ولكن لا تخزن.">
                  <a href="{{ route('Product.create', 4) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_service.svg') }}" alt="">

                      </div>
                      <div>
                        <p>خدمة</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4 mt-5">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك قيود إضافة مصاريف منوعة مثل فواتير الكهرباء.">
                  <a href="{{ route('Product.create', 5) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_expense.svg') }}" alt="">

                      </div>
                      <div>
                        <p>مصروف</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>


            </div>

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
