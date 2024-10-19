<!-- Banner + Where to eat-->
<div class="container mb-5 pb-lg-4">
    <div class="row">

          <!-- Flower Shop Highlight-->
          <div class="col-lg-4 text-right text-lg-start mb-lg-0 mb-5">
            <a class="d-block text-decoration-none bg-faded-accent rounded-3 h-100" href="#">
                <div class="p-4">
                    <h3 class="mb-0 p-2 text-primary text-nowrap font-vazir">
                        <i class="fi-flower mt-n1 me-2 pe-1 fs-3 align-middle"></i>
                        {{ __('talarin')['BestFlowers']['SpecialOffer'] }}
                        <span class="text-dark">&nbsp;20% {{ __('talarin')['BestFlowers']['Discount'] }}</span>
                    </h3>
                    <p class="mb-0 p-2 fs-base text-body">
                        {{ __('talarin')['BestFlowers']['FreshBouquets'] }}
                    </p>
                </div>
                <img src="{{ asset('talarin/img/city-guide/illustrations/taxi.svg') }}" class="rotate-img" alt="Illustration">
            </a>
        </div>

        <!-- Where to eat-->
        <div class="col-lg-8">
            <div class="d-flex align-items-center justify-content-between mb-4 pb-2">
                <h2 class="h4 mb-0 font-vazir">
                    {{ __('talarin')['BestFlowers']['BestFlowers'] }}
                </h2>
                <a class="btn btn-link fw-normal p-0" href="city-guide-catalog.html">
                    {{ __('talarin')['BestFlowers']['ShowAll'] }}
                    <i class="fi-arrow-long-left ms-2"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    @foreach (['گلسرای گلستان', 'گلسرای گل‌پونه', 'گلسرای گل‌بهار'] as $brand)
                    <!-- Item-->
                    <div class="d-flex align-items-start position-relative mb-4">
                        <img class="flex-shrink-0 me-3 rounded-3" src="{{ asset('talarin/img/city-guide/brands/0' . ($loop->index + 1) . '.svg') }}" alt="Brand logo">
                        <div>
                            <h3 class="mb-2 fs-lg">
                                <a class="nav-link stretched-link" href="city-guide-single.html">
                                    {{ $brand }}
                                </a>
                            </h3>
                            <ul class="list-unstyled mb-0 fs-sm">
                                <li>
                                    <i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i>
                                    <b>5.0</b><span class="text-muted">&nbsp;(48)</span>
                                </li>
                                <li>
                                    <i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>
                                    {{ __('talarin')['BestFlowers']['Variety'] }} 1500 {{ __('talarin')['BestFlowers']['Units'] }}
                                </li>
                                <li>
                                    <i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>
                                    {{ __('talarin')['BestFlowers']['Experience'] }} 4 {{ __('talarin')['BestFlowers']['Years'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm-6">
                    @foreach (['گلسرای گل‌سایه', 'گلسرای گل‌سایه', 'گلسرای گل‌نگار'] as $brand)
                    <!-- Item-->
                    <div class="d-flex align-items-start position-relative mb-4">
                        <img class="flex-shrink-0 me-3 rounded-3" src="{{ asset('talarin/img/city-guide/brands/0' . ($loop->index + 4) . '.svg') }}" alt="Brand logo">
                        <div>
                            <h3 class="mb-2 fs-lg">
                                <a class="nav-link stretched-link" href="city-guide-single.html">
                                    {{ $brand }}
                                </a>
                            </h3>
                            <ul class="list-unstyled mb-0 fs-sm">
                                <li>
                                    <i class="fi-star-filled mt-n1 me-1 fs-base text-warning align-middle"></i>
                                    <b>5.0</b><span class="text-muted">&nbsp;(48)</span>
                                </li>
                                <li>
                                    <i class="fi-credit-card mt-n1 me-1 fs-base text-muted align-middle"></i>
                                    {{ __('talarin')['BestFlowers']['Variety'] }} 1500 {{ __('talarin')['BestFlowers']['Units'] }}
                                </li>
                                <li>
                                    <i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>
                                    {{ __('talarin')['BestFlowers']['Experience'] }} 4 {{ __('talarin')['BestFlowers']['Years'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
