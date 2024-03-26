    <ul class="nav nav-pills nav-pills-custom mb-5" role="tablist">
        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                active"
                id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1"
                aria-selected="true" role="tab">
                <div class="nav-icon mb-3 qr-design-chose">
                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Template.svg" alt="">
                </div>
                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Templates</span>
                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            </a>
        </li>
        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                "
                id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2"
                aria-selected="false" tabindex="-1" role="tab">
                <div class="nav-icon mb-3 qr-design-chose">
                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Logo.svg" alt="">
                </div>

                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Logo
                </span>
                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            </a>
        </li>
        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                "
                id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3"
                aria-selected="false" tabindex="-1" role="tab">
                <div class="nav-icon mb-3 qr-design-chose">
                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Eye.svg" alt="">
                </div>

                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Eyes
                </span>
                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            </a>
        </li>
        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                "
                id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4"
                aria-selected="false" tabindex="-1" role="tab">
                <div class="nav-icon mb-3 qr-design-chose">
                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Pattern.svg" alt="">
                </div>

                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Pattern
                </span>
                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            </a>
        </li>
        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                "
                id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5"
                aria-selected="false" tabindex="-1" role="tab">
                <div class="nav-icon mb-3 qr-design-chose">
                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Background.svg" alt="">
                </div>
                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                    Background</span>
                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel"
            aria-labelledby="kt_stats_widget_16_tab_link_1">
            <div>
                <h4>SELECT A TEMPLATE</h4>
            </div>
            <div>
                {{-- Templates --}}
                <div class="card ">
                    <div class="card-body rounded-4 p-0">
                        <x-qr-code.template :templates="[
                            [
                                'id' => 31,
                                'value' => 'template_one',
                                'image_url' =>
                                    'https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Default/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 32,
                                'value' => 'template_two',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Swirl/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 33,
                                'value' => 'template_three',
                                'image_url' =>
                                    'https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Gradient/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 34,
                                'value' => 'template_four',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Blue%20Dream/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 35,
                                'value' => 'template_five',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Retro%20Funk/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 36,
                                'value' => 'template_six',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Nature%20Earth/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 37,
                                'value' => 'template_seven',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Sunny%20Day/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 38,
                                'value' => 'template_eight',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Dark%20Mode/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 39,
                                'value' => 'template_nine',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Frame/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 40,
                                'value' => 'template_ten',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Ocean%20Breeze/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                            [
                                'id' => 41,
                                'value' => 'template_eleven',
                                'image_url' =>
                                    'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Edgy%20Graffiti/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                            ],
                        ]" />
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade " id="kt_stats_widget_16_tab_2" role="tabpanel"
            aria-labelledby="kt_stats_widget_16_tab_link_2">
            <div>
                <div class="pt-5 text-start mt-4">
                    <h2>SELECT A LOGO</h2>
                    <p>This will appear at the center of your QR code.</p>
                </div>
                {{-- Logos Uploade --}}
                <div class="d-flex align-items-center">
                    <div class="dropzone dz-clickable w-100" id="qr_dropzone">
                        <div class="dz-message needsclick">
                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span
                                    class="path2"></span></i>

                            <div class="ms-4">
                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop image
                                    here or click to upload.</h3>
                                <span class="fs-7 fw-semibold text-primary opacity-75">Uploadimage</span>
                            </div>
                        </div>
                    </div>
                    <div class="ps-2">
                        <x-metronic.label for="qr_logo"
                                    class="form-label">{{ __('Logo') }}</x-metronic.label>
                                <x-metronic.input id="qr_logo" type="file" name="qr_logo" :value="old('qr_logo')"
                                    placeholder="Upload Logo" />
                    </div>
                </div>
                <p class="text-start pt-5 mb-0">Or Select From Our
                    Gallary</p>
                {{-- Logo From Our Gallary --}}
                <div class="pt-2 row">
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px; border: 1px solid #DBDFE3; border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/app-store.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="	https://static.beaconstac.com/assets/img/qr-code-logos/calender.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/email.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/facebook.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/gmail.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/google-bussiness.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/instagram.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/linkedin.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/mp3.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/pdf.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/phone-call.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/pintrest.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/play-store.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/ratings.png">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/twitter.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/youtube.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-1.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-2.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-3.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-4.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-5.svg">
                        </a>
                    </div>
                    <div class="col-sm-1 mb-1">
                        <a href="#">
                            <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-6.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade " id="kt_stats_widget_16_tab_3" role="tabpanel"
            aria-labelledby="kt_stats_widget_16_tab_link_3">
            <div class="pt-5 text-start mt-4">
                <h2>SELECT EYE-BALL</h2>
                <p>This will be the color and shape of your QR code's eye-balls</p>
            </div>
            <div class="d-flex">
                <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                <input type="text" id="colorCodeInput" class="form-control form-control-solid w-25" readonly>
            </div>
            <div class="d-lg-flex row gx-10">
                <x-qr-code.eye-ball :eyeBalls="[
                    [
                        'id' => 311,
                        'value' => 'eye_ball_1',
                        'image' => 'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/square.svg',
                    ],
                    [
                        'id' => 322,
                        'value' => 'eye_ball_2',
                        'image' => 'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/rounded.svg',
                    ],
                    [
                        'id' => 333,
                        'value' => 'eye_ball_3',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-diamond.svg',
                    ],
                    [
                        'id' => 344,
                        'value' => 'eye_ball_4',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-diamond.svg',
                    ],
                    [
                        'id' => 356,
                        'value' => 'eye_ball_5',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-leaf.svg',
                    ],
                    [
                        'id' => 367,
                        'value' => 'eye_ball_6',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-leaf.svg',
                    ],
                ]" />

            </div>
            <div class="pt-5 text-start mt-4">
                <h2>SELECT EYE-FRAME</h2>
                <p>This will be the color and shape of your QR code's eye-frames</p>
            </div>
            <div class="d-flex">
                <input type="text" id="colorCodeInput" class="form-control form-control-solid w-25" readonly>
                <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
            </div>
            <div class="d-lg-flex row gx-10">
                <x-qr-code.eye-frame :eyeFrames="[
                    [
                        'id' => 378,
                        'value' => 'eye_frame_1',
                        'image' => 'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/square.svg',
                    ],
                    [
                        'id' => 389,
                        'value' => 'eye_frame_2',
                        'image' => 'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/rounded.svg',
                    ],
                    [
                        'id' => 399,
                        'value' => 'eye_frame_3',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/left-leaf.svg',
                    ],
                    [
                        'id' => 434,
                        'value' => 'eye_frame_4',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/right-leaf.svg',
                    ],
                ]" />
            </div>
        </div>

        <div class="tab-pane fade " id="kt_stats_widget_16_tab_4" role="tabpanel"
            aria-labelledby="kt_stats_widget_16_tab_link_4">
            <div class="pt-5 text-start mt-4">
                <h2>SELECT A PATTERN</h2>
                <p>This will be the color and shape of your QR code's data-pattern
                </p>
            </div>
            <div class="row">
                <x-qr-code.pattern :patterns="[
                    [
                        'id' => 431,
                        'value' => 'pattern_1',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/square.svg',
                    ],
                    [
                        'id' => 432,
                        'value' => 'pattern_2',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/circle.svg',
                    ],
                    [
                        'id' => 433,
                        'value' => 'pattern_3',
                        'image' => '	https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/kite.svg',
                    ],
                    [
                        'id' => 434,
                        'value' => 'pattern_4',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/left-diamond.svg',
                    ],
                    [
                        'id' => 435,
                        'value' => 'pattern_5',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/left-diamond.svg',
                    ],
                    [
                        'id' => 436,
                        'value' => 'pattern_6',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/right-diamond.svg',
                    ],
                    [
                        'id' => 437,
                        'value' => 'pattern_7',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/thin-square.svg',
                    ],
                    [
                        'id' => 438,
                        'value' => 'pattern_8',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/smooth-round.svg',
                    ],
                    [
                        'id' => 439,
                        'value' => 'pattern_9',
                        'image' =>
                            'https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/smooth-round.svg',
                    ],
                ]" />
            </div>
            <div>
                <h2 class="pt-10">COLOR</h2>
                <div class="d-flex pt-5">
                    <div class="form-check pe-3">
                        <input class="form-check-input" id="normal_color" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Solid Color
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="gradient_color" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Gradient
                        </label>
                    </div>
                </div>

                {{-- Hidden Fields --}}
                <div>
                    <div class="hidden-field" id="normal_color_show" style="display: none;">
                        <div class="pt-5">
                            <label for="">Color</label> <br>
                            <div class="d-flex">
                                <input type="text" id="colorCodeInput-normal_color"
                                    class="form-control form-control-solid w-25" readonly>
                                <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                            </div>
                        </div>
                    </div>
                    <div class="hidden-field" id="gradient_color_show" style="display: none;">
                        <div class="pt-5">
                            <label for="">Select Gradient Type</label>
                            <select class="form-select form-select-sm mt-3 w-25" aria-label="Default select example">
                                <option selected>None</option>
                                <option value="2">Radial</option>
                                <option value="3">Horizontal</option>
                                <option value="4">Vertical</option>
                            </select>
                        </div>
                        <div class="d-flex">
                            <div class="pt-3 pe-4">
                                <label for="">Color Start</label>
                                <div class="d-flex">
                                    <input type="text" id="colorCodeInput-gradient"
                                        class="form-control form-control-solid w-25" style="width: 160px !important"
                                        readonly>
                                    <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                                </div>
                            </div>
                            <div class="pt-3">
                                <label for="">Color End</label>
                                <div class="d-flex">
                                    <input type="text" id="colorCodeInput-gradient-2"
                                        class="form-control form-control-solid w-25" style="width: 160px !important"
                                        readonly>
                                    <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Hidden Fields --}}
            </div>
        </div>
        <div class="tab-pane fade " id="kt_stats_widget_16_tab_5" role="tabpanel"
            aria-labelledby="kt_stats_widget_16_tab_link_5">
            <div class="pt-5 text-start mt-4">
                <h2>SELECT BACKGROUND</h2>
                <p>Select a background color or image for your QR code</p>
            </div>
            <div>
                <div class="d-flex pt-6">
                    <div class="form-check pe-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Color
                        </label>
                    </div>
                    <div class="form-check pe-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Image
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Transparent
                        </label>
                    </div>
                </div>
                {{-- By Default Hidden --}}
                <div id="content-sections">
                    <div id="color-content" style="display: none;">
                        <div class="card w-50 shadow-sm mt-4">
                            <div class="card-body">
                                <div class="">
                                    <label for="">Color</label>
                                    <div class="d-flex">
                                        <input type="text" id="colorCodeInput-normal_color"
                                            class="form-control form-control-solid w-100" readonly>
                                        <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="image-content" style="display: none;">
                        <div class="card w-100 shadow-sm mt-4">
                            <div class="card-body">
                                <div class="dropzone dz-clickable w-100 mt-4" id="kt_dropzonejs_example_1">
                                    <div class="dz-message needsclick">
                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>

                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">
                                                Drop
                                                files here
                                                or click to upload.</h3>
                                            <span class="fs-7 fw-semibold text-primary opacity-75">Upload
                                                up to 10 files</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="transparent-content" style="display: none;">
                        <div class="card w-100 shadow-sm mt-4">
                            <div class="card-body">
                                <p class="mb-0 fw-bold text-info">The Qr Code Background Will Be
                                    Transparent.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- By Default Hidden --}}
            </div>
        </div>
        <div class="tab-pane pt-4" id="done" role="tabpanel" aria-labelledby="done-tab">
            asdadasd
        </div>
    </div>