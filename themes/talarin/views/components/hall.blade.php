<div>
    @php
$halls = [
    [
        'name' => 'تالار الماس تهران',
        'city' => 'تهران',
        'province' => 'تهران',
        'price' => '10 میلیون',
        'rating' => '4.9',
        'users' => '500',
        'menus' => '500',
        'image' => 'talarin/img/city-guide/catalog/01.jpg',
        'badges' => ['تایید شده', 'جدید']
    ],
    [
        'name' => 'تالار مروارید شیراز',
        'city' => 'شیراز',
        'province' => 'فارس',
        'price' => '8 میلیون',
        'rating' => '4.7',
        'users' => '450',
        'menus' => '400',
        'image' => 'talarin/img/city-guide/catalog/02.jpg',
        'badges' => ['تایید شده']
    ],
    [
        'name' => 'تالار زمرد اصفهان',
        'city' => 'اصفهان',
        'province' => 'اصفهان',
        'price' => '9 میلیون',
        'rating' => '4.8',
        'users' => '480',
        'menus' => '450',
        'image' => 'talarin/img/city-guide/catalog/03.jpg',
        'badges' => ['تایید شده', 'محبوب']
    ],
    [
        'name' => 'تالار یاقوت مشهد',
        'city' => 'مشهد',
        'province' => 'خراسان رضوی',
        'price' => '7 میلیون',
        'rating' => '4.6',
        'users' => '400',
        'menus' => '350',
        'image' => 'talarin/img/city-guide/catalog/04.jpg',
        'badges' => ['تایید شده']
    ],
    [
        'name' => 'تالار فیروزه تبریز',
        'city' => 'تبریز',
        'province' => 'آذربایجان شرقی',
        'price' => '6.5 میلیون',
        'rating' => '4.5',
        'users' => '350',
        'menus' => '300',
        'image' => 'talarin/img/city-guide/catalog/05.jpg',
        'badges' => ['تایید شده']
    ],
    [
        'name' => 'تالار مرجان کیش',
        'city' => 'کیش',
        'province' => 'هرمزگان',
        'price' => '12 میلیون',
        'rating' => '4.9',
        'users' => '550',
        'menus' => '600',
        'image' => 'talarin/img/city-guide/catalog/06.jpg',
        'badges' => ['تایید شده', 'لوکس']
    ],
    [
        'name' => 'تالار زرین کرمان',
        'city' => 'کرمان',
        'province' => 'کرمان',
        'price' => '5.5 میلیون',
        'rating' => '4.4',
        'users' => '300',
        'menus' => '250',
        'image' => 'talarin/img/city-guide/catalog/07.jpg',
        'badges' => ['تایید شده']
    ],
    [
        'name' => 'تالار نقره‌ای رشت',
        'city' => 'رشت',
        'province' => 'گیلان',
        'price' => '7.5 میلیون',
        'rating' => '4.6',
        'users' => '420',
        'menus' => '380',
        'image' => 'talarin/img/city-guide/catalog/08.jpg',
        'badges' => ['تایید شده', 'جدید']
    ],
    [
        'name' => 'تالار طلایی اهواز',
        'city' => 'اهواز',
        'province' => 'خوزستان',
        'price' => '6 میلیون',
        'rating' => '4.5',
        'users' => '380',
        'menus' => '320',
        'image' => 'talarin/img/city-guide/catalog/09.jpg',
        'badges' => ['تایید شده']
    ],
    [
        'name' => 'تالار یاس سفید یزد',
        'city' => 'یزد',
        'province' => 'یزد',
        'price' => '5 میلیون',
        'rating' => '4.3',
        'users' => '280',
        'menus' => '220',
        'image' => 'talarin/img/city-guide/catalog/10.jpg',
        'badges' => ['تایید شده']
    ]
];
@endphp

<section class="container pt-sm-5 pt-4 pb-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-2">
        <h2 class="h4 text-dark mb-3 mb-sm-0 font-vazir">تالارهای برگزیده اخیر</h2>
        <div class="d-flex align-items-center">
            <ul class="nav nav-tabs nav-tabs-dark fs-sm me-4 pe-2 mb-0">
                <li class="nav-item"><a class="nav-link active" href="#">جدید</a></li>
                <li class="nav-item"><a class="nav-link" href="#">محبوب</a></li>
            </ul>
            <a class="btn btn-link btn-dark fw-normal px-0" href="wedding-catalog.html">
                مشاهده همه<i class="fa-solid fa-arrow-left fs-sm mt-0 ps-1 ms-2"></i>
            </a>
        </div>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-carousel-light">
        <div class="tns-carousel-inner" data-carousel-options='{"items": 3, "responsive": {"0":{"items":1, "gutter": 16},"500":{"items":2, "gutter": 18},"900":{"items":3, "gutter": 20}, "1100":{"gutter": 24}}}'>
            @foreach($halls as $hall)
            <div>
                <div class="card card-dark card-hover h-100">
                    <div class="card-img-top card-img-hover">
                        <a class="img-overlay" href="wedding-single.html"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            @foreach($hall['badges'] as $badge)
                                <span class="d-table badge bg-{{ $badge == 'جدید' ? 'info' : 'success' }} mb-1">{{ $badge }}</span>
                            @endforeach
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="افزودن به علاقه‌مندی‌ها">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                        </div>
                        <img src="{{ asset($hall['image']) }}" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between pb-1">
                            <span class="fs-sm text-dark me-3">ظرفیت: {{ $hall['users'] }} نفر</span>
                            <div class="form-check form-check-dark">
                                <input class="form-check-input" type="checkbox" id="compare{{ $loop->index }}">
                                <label class="form-check-label fs-sm" for="compare{{ $loop->index }}">مقایسه</label>
                            </div>
                        </div>
                        <h3 class="h6 mb-1">
                            <a class="nav-link-dark" href="wedding-single.html">{{ $hall['name'] }}</a>
                        </h3>
                        <div class="text-primary fw-bold mb-1">از {{ $hall['price'] }} تومان</div>
                        <div class="fs-sm text-dark">
                            <i class="fa-solid fa-map-pin me-1"></i>{{ $hall['city'] }}، {{ $hall['province'] }}
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="border-top border-light pt-3">
                            <div class="row g-2">
                                <div class="col me-sm-1">
                                    <div class="bg-white rounded text-center w-100 h-100 p-2 border border-dark">
                                        <i class="fa-solid fa-star d-block h4 text-dark mb-0 mx-center"></i>
                                        <span class="fs-xs text-dark">{{ $hall['rating'] }} امتیاز</span>
                                    </div>
                                </div>
                                <div class="col me-sm-1">
                                    <div class="bg-white rounded text-center w-100 h-100 p-2 border border-dark">
                                        <i class="fa-solid fa-users d-block h4 text-dark mb-0 mx-center"></i>
                                        <span class="fs-xs text-dark">{{ $hall['users'] }} نفر</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="bg-white rounded text-center w-100 h-100 p-2 border border-dark">
                                        <i class="fa-solid fa-utensils d-block h4 text-dark mb-0 mx-center"></i>
                                        <span class="fs-xs text-dark">{{ $hall['menus'] }} منو</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

</div>
