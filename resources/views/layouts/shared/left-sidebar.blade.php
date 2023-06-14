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
