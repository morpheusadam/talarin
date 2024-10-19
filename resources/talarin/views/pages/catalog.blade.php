@extends('layout.app')
@section('content')




<div class="container-fluid mt-5 pt-5 p-0">
    <div class="row g-0 mt-n3">
      <!-- Filters sidebar (Offcanvas on mobile)-->
      <aside class="col-lg-4 col-xl-3 border-top-lg border-end-lg shadow-sm px-3 px-xl-4 px-xxl-5 pt-lg-2">
        <div class="offcanvas-lg offcanvas-end" id="filters-sidebar">
          <div class="offcanvas-header d-flex d-lg-none align-items-center">
            <h2 class="h5 mb-0">جستجو</h2>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" data-bs-target="#filters-sidebar"></button>
          </div>
          <!-- Search form-->
          <div class="offcanvas-header d-block border-bottom pt-0 pt-lg-4 px-lg-0">
            <form class="form-group mb-lg-2 rounded-pill">
              <div class="input-group"><span class="input-group-text text-muted"><i class="fi-search"></i></span>
                <input class="form-control" type="text" placeholder="جستجو...">
              </div>
              <button class="btn btn-primary rounded-pill d-lg-inline-block d-none" type="button">جستجو</button>
              <button class="btn btn-icon btn-primary rounded-circle flex-shrink-0 d-lg-none d-inline-flex" type="button"><i class="fi-search mt-n2"></i></button>
            </form>
          </div>
          <!-- Nav tabs-->
          <div class="offcanvas-header d-block border-bottom py-lg-4 py-3 px-lg-0">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item"><a class="nav-link d-flex align-items-center active" href="#categories" data-bs-toggle="tab" role="tab"><i class="fi-list me-2"></i>دسته بندی</a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center" href="#filters" data-bs-toggle="tab" role="tab"><i class="fi-filter-alt-horizontal me-2"></i>فیلتر</a></li>
            </ul>
          </div>
          <div class="offcanvas-body py-lg-4">
            <!-- Tabs content-->
            <div class="tab-content">
              <!-- Categories-->
              <div class="tab-pane fade show active" id="categories" role="tabpanel">
                <div class="row row-cols-lg-2 row-cols-1 g-3 categories-guid">
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-accent text-accent rounded-circle mb-3 mx-auto"><i class="fi-bed"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">اقامتگاه و بوم گردی</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-dumbell"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">ورزشی</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-warning text-warning rounded-circle mb-3 mx-auto"><i class="fi-cafe"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">رستوران و کافی شاپ</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-success text-success rounded-circle mb-3 mx-auto"><i class="fi-disco-ball"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">تور و سفر</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-shopping-bag"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">مراکز خرید</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-info text-info rounded-circle mb-3 mx-auto"><i class="fi-meds"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">پزشکی و سلامتی</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-success text-success rounded-circle mb-3 mx-auto"><i class="fi-museum"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">هنر و تئاتر</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-warning text-warning rounded-circle mb-3 mx-auto"><i class="fi-makeup"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">آرایشی و زیبایی</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-entertainment"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">تفریحی و سرگرمی</h3></a></div>
                  <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#">
                      <div class="icon-box-media bg-faded-info text-info rounded-circle mb-3 mx-auto"><i class="fi-car"></i></div>
                      <h3 class="icon-box-title fs-base mb-0">خدمات خودرو</h3></a></div>
                </div>
              </div>
              <!-- Filters-->
              <div class="tab-pane fade" id="filters" role="tabpanel">
                <div class="pb-4 mb-2">
                  <h3 class="h6">موقعیت مکانی</h3>
                  <select class="form-select mb-2">
                    <option value="Berlin" selected>برلین</option>
                    <option value="Hamburg">هامبورگ</option>
                    <option value="Munich">مونیخ</option>
                    <option value="Koln">منچستر</option>
                    <option value="Frankfurt am Main">فرانکفورت</option>
                  </select>
                  <select class="form-select">
                    <option value="" selected disabled>انتخاب منطقه</option>
                    <option value="Berlin-Mitte">برلین-میت</option>
                    <option value="Charlottenburg">شارلوتنبورگ</option>
                    <option value="Prenzlauer Berg">منچستر</option>
                    <option value="Friedrichshain">فردریششاین</option>
                    <option value="Kreuzberg">پاریس</option>
                  </select>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">دسته بندی</h3>
                  <div class="dropdown mb-sm-0 mb-3" data-bs-toggle="select">
                    <button class="btn btn-outline-secondary d-flex align-items-center w-100 px-4 fw-normal text-start dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2 text-muted"></i><span class="dropdown-toggle-label d-block w-100 text-end">تمام دسته بندی ها</span></button>
                    <input type="hidden">
                    <ul class="dropdown-menu w-100">
                      <li><a class="dropdown-item" href="#"><i class="fi-bed fs-lg opacity-60"></i><span class="dropdown-item-label"> اقامتگاه</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-cafe me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">رستوران و کافی شاپ</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-shopping-bag me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">مرکز خرید</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-museum me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">هنر و تئاتر</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-entertainment me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">تفریحی و سرگرمی</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-meds me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">پزشکی و سلامتی</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-makeup me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">آرایشی و زیبایی</span></a></li>
                      <li><a class="dropdown-item" href="#"><i class="fi-car me-2 fs-lg opacity-60"></i><span class="dropdown-item-label">خدمات خودرو</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">زیر دسته</h3>
                  <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" data-simplebar-direction="rtl" style="height: 11rem;">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="hotel">
                      <label class="form-check-label fs-sm" for="hotel">هتل</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="hostel">
                      <label class="form-check-label fs-sm" for="hostel">خوابگاه</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="motel">
                      <label class="form-check-label fs-sm" for="motel">مسافرخانه</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="apartment" checked>
                      <label class="form-check-label fs-sm" for="apartment">آپارتمان</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="cottage">
                      <label class="form-check-label fs-sm" for="cottage">کلبه</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="boutique-hotel">
                      <label class="form-check-label fs-sm" for="boutique-hotel">ویلا</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="room">
                      <label class="form-check-label fs-sm" for="room">سوییت</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="land">
                      <label class="form-check-label fs-sm" for="land">زمین</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="commercial">
                      <label class="form-check-label fs-sm" for="commercial">تجاری و اداری</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="parking-lot">
                      <label class="form-check-label fs-sm" for="parking-lot">پارکینگ</label>
                    </div>
                  </div>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">قیمت</h3>
                  <div class="range-slider" data-start-min="300" data-start-max="700" data-min="50" data-max="1000" data-step="20">
                    <div class="range-slider-ui"></div>
                    <div class="d-flex align-items-center">
                  <div class="w-50 pe-2">
                    <div class="input-group flex-row-reverse"><span class="input-group-text fs-base">ت</span>
                      <input class="form-control range-slider-value-max" type="text">
                    </div>
                  </div>
                  <div class="text-muted">—</div>
                  <div class="w-50 ps-2">
                    <div class="input-group flex-row-reverse"><span class="input-group-text fs-base">ت</span>
                      <input class="form-control range-slider-value-min" type="text">
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">میانگین امتیاز</h3>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="5-star">
                    <label class="form-check-label fs-sm align-middle mt-n2" for="5-star"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="4-star">
                    <label class="form-check-label fs-sm align-middle mt-n2" for="4-star"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="3-star">
                    <label class="form-check-label fs-sm align-middle mt-n2" for="3-star"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="2-star">
                    <label class="form-check-label fs-sm align-middle mt-n2" for="2-star"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="1-star">
                    <label class="form-check-label fs-sm align-middle mt-n2" for="1-star"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i></span>
                    </label>
                  </div>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">تعداد اتاق</h3>
                  <select class="form-select mb-2">
                    <option value="1-room" selected>1 اتاق</option>
                    <option value="2-rooms">2 اتاق</option>
                    <option value="3-rooms">3 اتاق</option>
                    <option value="4-rooms">4 اتاق</option>
                    <option value="5-rooms">5 اتاق</option>
                  </select>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">امکانات رفاهی</h3>
                  <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 11rem;" data-simplebar-direction="rtl">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="parking">
                      <label class="form-check-label fs-sm" for="parking">پارکینگ</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="restaurant">
                      <label class="form-check-label fs-sm" for="restaurant">رستوران</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="pet-friendly">
                      <label class="form-check-label fs-sm" for="pet-friendly">نگهداری حیوانات خانگی</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="room-service" checked>
                      <label class="form-check-label fs-sm" for="room-service">سرویس بهداشتی</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="fitness-center">
                      <label class="form-check-label fs-sm" for="fitness-center">مرکز ورزشی</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="free-wifi" checked>
                      <label class="form-check-label fs-sm" for="free-wifi">وای فای رایگان</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="spa-lounge">
                      <label class="form-check-label fs-sm" for="spa-lounge">سالن آبگرم</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="bar">
                      <label class="form-check-label fs-sm" for="bar">گاز رومیزی</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="swimming-pool">
                      <label class="form-check-label fs-sm" for="swimming-pool">استخر</label>
                    </div>
                  </div>
                </div>
                <div class="pb-4 mb-2">
                  <h3 class="h6">امکانات اتاق</h3>
                  <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 11rem;" data-simplebar-direction="rtl">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="kitchen">
                      <label class="form-check-label fs-sm" for="kitchen">آشپزخانه</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="private-bathroom">
                      <label class="form-check-label fs-sm" for="private-bathroom">حمام</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="air-conditioning" checked>
                      <label class="form-check-label fs-sm" for="air-conditioning">تهویه هوا</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="desk">
                      <label class="form-check-label fs-sm" for="desk">میز</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terrace">
                      <label class="form-check-label fs-sm" for="terrace">بالکن</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="washing-machine">
                      <label class="form-check-label fs-sm" for="washing-machine">ماشین ظرفشویی</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="heating">
                      <label class="form-check-label fs-sm" for="heating">سرویس گرمایشی</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="laundry-service">
                      <label class="form-check-label fs-sm" for="laundry-service">ماشین لباسشویی</label>
                    </div>
                  </div>
                </div>
                <div class="border-top py-4">
                  <button class="btn btn-outline-primary rounded-pill" type="button"><i class="fi-rotate-right me-2"></i>حذف فیلتر</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <!-- Page content-->
      <div class="col-lg-8 col-xl-9 position-relative overflow-hidden pb-5 pt-4 px-3 px-xl-4 px-xxl-5">
        <!-- Map popup-->
        <div class="map-popup invisible" id="map">
          <button class="btn btn-icon btn-light btn-sm shadow-sm rounded-circle" type="button" data-bs-toggle-class="invisible" data-bs-target="#map"><i class="fi-x fs-xs"></i></button>
          <div class="interactive-map" data-map-options-json="json/map-options-city-guide.json"></div>
        </div>
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="city-guide-home-v1.html">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">جستجو محل اقامت</li>
          </ol>
        </nav>
        <!-- Title-->
        <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
          <h1 class="h2 mb-sm-0">جستجو محل اقامت</h1><a class="d-inline-block fw-bold text-decoration-none py-1" href="#" data-bs-toggle-class="invisible" data-bs-target="#map"><i class="fi-map me-2"></i>مشاهده نقشه</a>
        </div>
        <!-- Sorting-->
        <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch my-2">
          <div class="d-flex align-items-center flex-shrink-0">
            <label class="fs-sm me-2 pe-1 text-nowrap" for="sortby"><i class="fi-arrows-sort text-muted mt-n1 me-2"></i>مرتب سازی</label>
            <select class="form-select form-select-sm" id="sortby">
              <option>جدیدترین</option>
              <option>پربازدید</option>
              <option>قیمت بالا - پایین</option>
              <option>قیمت پایین - بالا</option>
              <option>امتیاز بالا</option>
              <option>امتیاز بالا</option>
            </select>
          </div>
          <hr class="d-none d-sm-block w-100 mx-4">
          <div class="d-none d-sm-flex align-items-center flex-shrink-0 text-muted"><i class="fi-check-circle me-2"></i><span class="fs-sm mt-n1">148 نتیجه یافت شد</span></div>
        </div>
        <!-- Catalog grid-->
        <div class="row row-cols-xl-3 row-cols-sm-2 row-cols-1 gy-4 gx-3 gx-xxl-4 py-4">
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/01.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل تجاری برلین</a></h3>
              <ul class="list-inline mb-0 fs-sm">
              <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
              <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>150000 تومان</li>
              <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.4 کیلومتر از فرودگاه</li>
            </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/02.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">باغ ویلای شب بهشت</a></h3>
              <ul class="list-inline mb-0 fs-sm">
              <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.9</b><span class="text-muted">&nbsp;(43)</span></li>
              <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>750000 تومان</li>
              <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.8 کیلومتر از فرودگاه</li>
            </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/03.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">کلبه درختی بزرگ</a></h3>
              <ul class="list-inline mb-0 fs-sm">
              <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.8</b><span class="text-muted">&nbsp;(24)</span></li>
              <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>1850000 تومان</li>
              <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>0.5 کیلومتر از مرکز شهر</li>
            </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/04.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">اقامتگاه 3 آلند ویلا</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(12)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>145000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>3.2 کیلومتر از فرودگاه</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/05.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">اقامتگاه سنتی سهروردی</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.0</b><span class="text-muted">&nbsp;(9)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>25000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>2.1 کیلومتر از ساحل</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/06.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل صفوی اصفهان</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.8</b><span class="text-muted">&nbsp;(32)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>48000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.9 کیلومتر از بازار</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/07.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل شیخ بهایی</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.5</b><span class="text-muted">&nbsp;(13)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>65000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>0.4 کیلومتر از فرودگاه</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/08.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل کریمخان شیراز</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(17)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>780000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.6 کیلومتر از بازار</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/09.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل پارک سعدی</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(45)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>170000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.4 کیلومتر از فرودگاه</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/10.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل باغ مشیر الممالک</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.0</b><span class="text-muted">&nbsp;(15)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>45000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.7 کیلومتر از دریا</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/11.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل ارگ جدید یزد</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.6</b><span class="text-muted">&nbsp;(10)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>25000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>2.4 کیلومتر از فرودگاه</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/12.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">مسافرخانه صفائیه</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.9</b><span class="text-muted">&nbsp;(10)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>56000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.1 کیلومتر از مرکز شهر</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/13.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">آپارتمان فیروزه یزد</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(12)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>23000 </li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>4.7 کیلومتر از بازار</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/14.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل کاروانسرای مشیر</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.9</b><span class="text-muted">&nbsp;(12)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>45000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>0.4 کیلومتر از فرودگاه</li>
              </ul>
            </article>
          </div>
          <!-- Item-->
          <div class="col pb-sm-2">
            <article class="position-relative">
              <div class="position-relative mb-3">
                <button class="btn btn-icon btn-light-primary btn-xs text-primary rounded-circle position-absolute top-0 end-0 m-3 zindex-5" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button><img class="rounded-3" src="img/city-guide/catalog/15.jpg" alt="Article img">
              </div>
              <h3 class="mb-2 fs-lg"><a class="nav-link stretched-link" href="city-guide-single.html">هتل سنتی پارس</a></h3>
              <ul class="list-inline mb-0 fs-sm">
                <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i><b>4.9</b><span class="text-muted">&nbsp;(52)</span></li>
                <li class="list-inline-item pe-1"><i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>89000 تومان</li>
                <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>1.5 کیلومتر از بازار</li>
              </ul>
            </article>
          </div>
        </div>
        <!-- Pagination-->
        <nav class="border-top pb-md-4 pt-4" aria-label="Pagination">
          <ul class="pagination mb-1">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(صفحه جاری)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block">...</li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</main>
<!-- Footer-->
<footer class="footer pt-lg-5 pt-4 bg-dark text-light">
  <div class="container mb-4 py-4 pb-lg-5">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 col-sm-4">
        <div class="mb-4 pb-sm-3"><a class="d-inline-block" href="city-guide-home-v1.html"><img src="img/logo/logo-light.svg" width="116" alt="Logo"></a></div>
        <ul class="nav nav-light flex-column">
          <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal text-light text-nowrap" href="mailto:example@gmail.com"><i class="fi-mail mt-n1 me-1 align-middle text-primary"></i>example@gmail.com</a></li>
          <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal text-light text-nowrap" href="tel:4065550120"><i class="fi-device-mobile mt-n1 me-1 align-middle text-primary"></i>(406) 555-0120</a></li>
        </ul>
      </div>
      <!-- Links-->
      <div class="col-lg-2 col-md-3 col-sm-4">
        <h3 class="fs-base text-light">لینک های سریع</h3>
        <ul class="list-unstyled fs-sm">
          <li><a class="nav-link-light" href="#">شهرهای برتر</a></li>
          <li><a class="nav-link-light" href="#">اقامتگاه</a></li>
          <li><a class="nav-link-light" href="#">رستوران و کافی شاپ</a></li>
          <li><a class="nav-link-light" href="#">رویدادها</a></li>
        </ul>
      </div>
      <!-- Links-->
      <div class="col-lg-2 col-md-3 col-sm-4">
        <h3 class="fs-base text-light">حساب کاربری</h3>
        <ul class="list-unstyled fs-sm">
          <li><a class="nav-link-light" href="#">پروفایل من</a></li>
          <li><a class="nav-link-light" href="#">مورد علاقه ها</a></li>
          <li><a class="nav-link-light" href="#">کسب و کارهای من</a></li>
          <li><a class="nav-link-light" href="#">ثبت کسب و کار جدید</a></li>
        </ul>
      </div>
      <!-- Subscription form-->
      <div class="col-lg-4 offset-lg-1">
        <h3 class="h5 font-vazir text-light">مشترک شدن در خبرنامه ما</h3>
        <p class="fs-sm mb-4 opacity-60">کسب و کارهای خوب را از دست ندهید!</p>
        <form class="form-group form-group-light rounded-pill" style="max-width: 500px;">
          <div class="input-group input-group-sm"><span class="input-group-text text-muted"><i class="fi-mail"></i></span>
            <input class="form-control" type="email" placeholder="ایمیل شما">
          </div>
          <button class="btn btn-primary btn-sm rounded-pill" type="button">ارسال</button>
        </form>
      </div>
    </div>
  </div>
  <div class="py-4 border-top border-light">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between py-2">
      <!-- Copyright-->
      <p class="fs-sm text-center text-sm-start mb-4"><span class="text-light opacity-50">© تمام حقوق این سایت محفوظ است . ارائه شده در سایت </span><a class="nav-link-light fw-bold" href="https://createx.studio/" target="_blank" rel="noopener"></a></p>
      <div class="d-flex flex-lg-row flex-column align-items-center order-lg-2 order-1 ms-lg-4 mb-lg-0 mb-4">
        <!-- Links-->
        <div class="d-flex flex-wrap fs-sm mb-lg-0 mb-4 pe-lg-4"><a class="nav-link-light px-2 mx-1" href="#">درباره ما</a><a class="nav-link-light px-2 mx-1" href="#">مقالات</a><a class="nav-link-light px-2 mx-1" href="#">پشتیبانی</a><a class="nav-link-light px-2 mx-1" href="#">تماس با ما</a></div>
        <div class="d-flex align-items-center">
          <!-- Language switcher-->
          <div class="dropdown"><a class="nav-link nav-link-light dropdown-toggle fs-sm align-items-center p-0 fw-normal" href="#" id="langSwitcher" data-bs-toggle="dropdown" role="button" aria-expanded="false"><i class="fi-globe mt-n1 me-2 align-middle"></i>انتخاب زبان</a>
            <ul class="dropdown-menu dropdown-menu-dark my-1" aria-labelledby="langSwitcher">
              <li><a class="dropdown-item text-nowrap py-1" href="#"><img class="me-2" src="img/flags/de.png" width="20" alt="Deutsch">آلمانی</a></li>
              <li><a class="dropdown-item text-nowrap py-1" href="#"><img class="me-2" src="img/flags/fr.png" width="20" alt="Français">فرانسوی</a></li>
              <li><a class="dropdown-item text-nowrap py-1" href="#"><img class="me-2" src="img/flags/es.png" width="20" alt="Español">اسپانیول</a></li>
            </ul>
          </div>
          <!-- Socials-->
          <div class="ms-4 pe-lg-2 text-nowrap"><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i class="fi-telegram"></i></a><a class="btn btn-icon btn-translucent-light btn-xs rounded-circle ms-2" href="#"><i class="fi-messenger"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</footer>



@endsection
