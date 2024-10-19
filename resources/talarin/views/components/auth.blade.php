<div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px">
        <div class="modal-content">
            <div class="modal-body px-0 py-2 py-sm-0">
                <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button"
                    data-bs-dismiss="modal"></button>
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 border-end-md p-4 p-sm-5">
                        <h2 class="h3 mb-4 mb-sm-5">
                            سلام!<br />به سایت ما خوش آمدید.
                        </h2>
                        <img class="d-block mx-auto rotate-img" src="img/signin-modal/signin.svg" width="344"
                            alt="Illustartion" />
                        <div class="mt-4 mt-sm-5">
                            هنوز ثبت نام نکرده اید؟
                            <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ثبت نام</a>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                        <a class="btn btn-outline-info w-100 mb-3" href="#"><i
                                class="fi-google fs-lg me-1"></i>ورود با اکانت گوگل</a><a
                            class="btn btn-outline-info w-100 mb-3" href="#"><i
                                class="fi-facebook fs-lg me-1"></i>ورود با اکانت
                            فیسبوک</a>
                        <div class="d-flex align-items-center py-3 mb-3">
                            <hr class="w-100" />
                            <div class="px-3">یـا</div>
                            <hr class="w-100" />
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="mb-4">
                                <label class="form-label mb-2" for="signin-email">پست الکترونیکی</label>
                                <input class="form-control" type="email" id="signin-email"
                                    placeholder="ایمیل" required />
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <label class="form-label mb-0" for="signin-password">رمز عبور</label><a
                                        class="fs-sm" href="#">رمز عبور را فراموش کرده اید؟</a>
                                </div>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" id="signin-password"
                                        placeholder="پسوورد خود را وارد کنید" required />
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox" /><span
                                            class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg w-100" type="submit">
                                ورود به حساب کاربری
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up Modal-->
<div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px">
        <div class="modal-content">
            <div class="modal-body px-0 py-2 py-sm-0">
                <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button"
                    data-bs-dismiss="modal"></button>
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 border-end-md p-4 p-sm-5">
                        <h2 class="h3 mb-4 mb-sm-5">
                            در سایت ما با اطمینان ثبت نام کنید.
                        </h2>
                        <ul class="list-unstyled mb-4 mb-sm-5">
                            <li class="d-flex mb-2">
                                <i class="fi-check-circle text-primary mt-1 me-2"></i><span>افزودن و ارتقا
                                    آگهی</span>
                            </li>
                            <li class="d-flex mb-2">
                                <i class="fi-check-circle text-primary mt-1 me-2"></i><span>مدیریت لیست علاقه
                                    مندی ها</span>
                            </li>
                            <li class="d-flex mb-0">
                                <i class="fi-check-circle text-primary mt-1 me-2"></i><span>ثبت نظر</span>
                            </li>
                        </ul>
                        <img class="d-block mx-auto" src="{{ asset('talarin/img/signin-modal/signup.svg') }}" width="344"
                        alt="Illustration" />
                        <div class="mt-sm-4 pt-md-3">
                            ثبت نام کرده اید؟
                            <a href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ورود به
                                حساب کاربری</a>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                        <a class="btn btn-outline-info w-100 mb-3" href="#"><i
                                class="fi-google fs-lg me-1"></i>ورود با اکانت گوگل</a><a
                            class="btn btn-outline-info w-100 mb-3" href="#"><i
                                class="fi-facebook fs-lg me-1"></i>ورود با اکانت
                            فیسبوک</a>
                        <div class="d-flex align-items-center py-3 mb-3">
                            <hr class="w-100" />
                            <div class="px-3">یـا</div>
                            <hr class="w-100" />
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="mb-4">
                                <label class="form-label" for="signup-name">نام و نام خانوادگی</label>
                                <input class="form-control" type="text" id="signup-name"
                                    placeholder="نام و نام خانوادگی خود را وارد کنید" required />
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="signup-email">پست الکترونیکی</label>
                                <input class="form-control" type="email" id="signup-email"
                                    placeholder="ایمیل" required />
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="signup-password">رمز عبور
                                    <span class="fs-sm text-muted">حداقل 8 کاراکتر</span></label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" id="signup-password"
                                        minlength="8" required />
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox" /><span
                                            class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="signup-password-confirm">تایید رمز عبور</label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" id="signup-password-confirm"
                                        minlength="8" required />
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox" /><span
                                            class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="agree-to-terms"
                                    required />
                                <label class="form-check-label" for="agree-to-terms">
                                    با ثبت نام در این سایت <a href="#"> شرایط</a> و
                                    <a href="#">قوانین </a> سایت را قبول دارم.</label>
                            </div>
                            <button class="btn btn-primary btn-lg w-100" type="submit">
                                ثبت نام
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
