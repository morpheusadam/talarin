<div class="container">
    <a class="navbar-brand ms-3 ms-xl-4 logo" href="city-guide-home-v1.html"><img class="d-block"
            src="img/logo/logo-dark.svg" width="116" alt="Finder" /></a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button><a
        class="btn btn-sm text-primary d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i
            class="fas fa-user me-2"></i>{{ __('talarin')['navbar']['login'] }}</a><a
        class="btn btn-primary btn-sm rounded-pill ms-2 order-lg-3" href="city-guide-add-business.html"><i
            class="fas fa-plus me-2"></i>{{ __('talarin')['navbar']['register_business'] }}</a>
    <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
        <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem">
            <!-- Art -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-paint-brush me-2"></i>{{ __('talarin')['navbar']['Art'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-music me-2"></i>{{ __('talarin')['navbar']['Music'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-guitar me-2"></i>{{ __('talarin')['navbar']['Band'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-microphone me-2"></i>{{ __('talarin')['navbar']['Live'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-camera me-2"></i>{{ __('talarin')['navbar']['Photo'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-video me-2"></i>{{ __('talarin')['navbar']['Video'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-camera-retro me-2"></i>{{ __('talarin')['navbar']['Studio'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-door-open me-2"></i>{{ __('talarin')['navbar']['Indoor'] }}</a>
                    </li>
                </ul>
            </li>
            <!-- Catering -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-utensils me-2"></i>{{ __('talarin')['navbar']['Catering'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-concierge-bell me-2"></i>{{ __('talarin')['navbar']['Food'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-birthday-cake me-2"></i>{{ __('talarin')['navbar']['Cake'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-glass-cheers me-2"></i>{{ __('talarin')['navbar']['Drinks'] }}</a>
                    </li>
                </ul>
            </li>
            <!-- Decorations -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-gift me-2"></i>{{ __('talarin')['navbar']['Decor'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-paint-roller me-2"></i>{{ __('talarin')['navbar']['Decor'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-seedling me-2"></i>{{ __('talarin')['navbar']['Flowers'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-lightbulb me-2"></i>{{ __('talarin')['navbar']['Lights'] }}</a>
                    </li>
                </ul>
            </li>


            <!-- Halls -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-map-marker-alt me-2"></i>{{ __('talarin')['navbar']['Halls'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-building me-2"></i>{{ __('talarin')['navbar']['Hall'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-tree me-2"></i>{{ __('talarin')['navbar']['Garden'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-ring me-2"></i>{{ __('talarin')['navbar']['Engagement'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-hotel me-2"></i>{{ __('talarin')['navbar']['Hotel'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-home me-2"></i>{{ __('talarin')['navbar']['Mansion'] }}</a>
                    </li>
                </ul>
            </li>


            <!-- Beauty -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-heart me-2"></i>{{ __('talarin')['navbar']['Beauty'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-magic me-2"></i>{{ __('talarin')['navbar']['WomenSalon'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-hand-sparkles me-2"></i>{{ __('talarin')['navbar']['MenSalon'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-user-md me-2"></i>{{ __('talarin')['navbar']['Nails'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-store me-2"></i>{{ __('talarin')['navbar']['Boutique'] }}</a>
                    </li>
                </ul>
            </li>
            <!-- Services -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-comments me-2"></i>{{ __('talarin')['navbar']['Services'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-car me-2"></i>{{ __('talarin')['navbar']['Transport'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-gift me-2"></i>{{ __('talarin')['navbar']['Gifts'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-brain me-2"></i>{{ __('talarin')['navbar']['Counseling'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-dance me-2"></i>{{ __('talarin')['navbar']['Dance'] }}</a>
                    </li>
                </ul>
            </li>
            <!-- Consulting -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-comments me-2"></i>{{ __('talarin')['navbar']['Consulting'] }}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-calendar-alt me-2"></i>{{ __('talarin')['navbar']['EventPlan'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-dollar-sign me-2"></i>{{ __('talarin')['navbar']['Finance'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-brain me-2"></i>{{ __('talarin')['navbar']['Psychology'] }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="fas fa-check-circle me-2"></i>{{ __('talarin')['navbar']['ServiceSelect'] }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
