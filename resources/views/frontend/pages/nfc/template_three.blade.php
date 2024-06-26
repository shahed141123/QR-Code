<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://i.ibb.co/BNBTVN4/logo.png" type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Style Here -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

        /* CSS for centering the mobile frame */
        :root {
            --white: #fff;
            --tem-one-name-color: #fff;
            --tem-one-name-font-size: 40px;
            @if ($nfc_card->font_family == 'bebas_neue')
                --body-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-name-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-designation-font-family: "Bebas Neue", sans-serif !important;
            @elseif($nfc_card->font_family == 'raleway')
                --tem-one-name-font-family: "Raleway", sans-serif !important;
                --body-font-family: "Raleway", sans-serif !important;
                --tem-one-designation-font-family: "Raleway", sans-serif;
                @else
                --tem-one-name-font-family: "Raleway", sans-serif !important;
                --body-font-family: "Raleway", sans-serif !important;
                --tem-one-designation-font-family: "Raleway", sans-serif;
            @endif
            --tem-one-designation-color: #fff;
            --tem-one-bio-title-color: #624aac;
            --tem-profile-image-bg: #624aac;
            --tem-one-social-icons-color: #fff;
            --tem-one-social-icons-bg: #fff;
            --tem-one-social-icons-font-size: 18px;
            --tem-one-bio-title-font-size: 30px;
            --tem-one-service-title-color: #fff;
            --tem-one-service-title-font-size: 20px;
            --tem-one-service-box-bg: #624aac;
            --tem-one-address-color: #fff;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
            letter-spacing: 2px;
        }

        .nfc-mobile-frame {

            max-width: 576px;
            min-height: 100vh;
            /* border: 2px solid #1026bf; */
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        /* CSS for the card inside the mobile frame */
        .nfc-mobile-frame .card {
            background-color: var(--white);
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow-y: auto;
        }

        .nfc-mobile-frame .card title {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .nfc-one-cover-img-box {
            position: relative;
            max-width: 100%;
        }

        .nfc-one-cover-img {
            background-size: cover;
            height: 300px;
            background-position: center;
        }

        .slick-slide {
            margin-right: 20px;
            /* Adjust the value to set the desired gap */
            display: flex;
            justify-content: center;
        }

        .slick-initialized .slick-slide {
            display: flex;
        }

        .slick-next:before,
        .slick-prev:before {
            font-family: "Font Awesome 6 Pro";
            font-size: 20px;
            line-height: 1;
            opacity: 0.75;
            color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-slide img {
            background-size: cover;
            width: 300px !important;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Ensure last slide doesn't have margin */
        .slick-slide:last-child {
            margin-right: 0;
            border-radius: 10px;
        }

        .slick-next:before,
        .slick-prev:before {
            position: relative;
            color: red;
            left: 20px;
            font-size: 25px;
        }

        .slick-next::after,
        .slick-prev::after {
            position: relative;
            color: red;
            left: 20px;
        }

        .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            left: 90%;
            display: block;
            width: 20px;
            height: 20px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: #f60b0b;
            border: none;
            outline: 0;
            background: 0 0;
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }

            .mobile-profiles {
                padding-top: 5px;
            }

            .mobile-images-profile {
                margin-top: -90 !important;
                text-align: center;
            }

            .mobile-images-profile img {
                left: auto !important;
            }

            .nfc-mobile-frame {
                max-width: 390px;
                width: 100%;
            }

            .nfc-mobile-frame .card {
                border-radius: 0px !important;
            }

            .contact-info {
                margin-left: 0px !important;
            }

            .mobile-d-none {
                display: none;
            }
        }
    </style>
    <!-- Style Here End -->
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                        <div class="nfc-mobile-frame shadow-sm">
                            <div class="card p-0 border-0 shadow-none tem-one-scroll" style="overflow-x: hidden">
                                <div class="card-header p-0 border-0 border-0">
                                    <div class="nfc-one-cover-img-box">
                                        <div class="nfc-one-cover-img"
                                            style="
                          background-image: url({{ !empty($nfc_card->nfcData->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->banner_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }});
                        ">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0 tem-one-about-content">
                                    <div class="w-100">
                                        <div class="row align-items-center gx-0">
                                            <div class="col-lg-21">
                                                <div class="text-center text-lg-center mobile-images-profile"
                                                    style="margin-top: -70px; position: relative">
                                                    <img class=""
                                                        style="
                                width: 150px;
                                height: 150px;
                                border: 6px solid;
                                border-image: linear-gradient(
                                    270deg,
                                    #369efe,
                                    #47eef9
                                  )
                                  1;
                                position: relative;
                                z-index: 15;
                                    background: #ffffff80;
                              "
                                                        src="{{ !empty($nfc_card->nfcData->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                        class="img-fluid banner-image" alt="banner" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12"
                                                style="
                            background-image: url(https://my.cybercard.ma/assets/img/vcard17/profile-bg.png);
                          ">
                                                <div class="text-center text-lg-start mobile-profiles">
                                                    <div class="p-3 text-center">
                                                        <h2 class="text-muted"
                                                            style="
                                  font-size: 50px;
                                  font-family: var(--tem-one-name-font-family);
                                ">
                                                            <span
                                                                class="first_name">{{ optional($nfc_card->nfcData)->first_name }}</span>
                                                            &nbsp;
                                                            <span
                                                                class="last_name">{{ optional($nfc_card->nfcData)->last_name }}</span>
                                                        </h2>
                                                        <h6 class="fw-bolder"
                                                            style="-webkit-text-fill-color: transparent;background: -webkit-linear-gradient(#f6a932, #ff5a0e ); -webkit-background-clip: text; ">
                                                            {{ optional($nfc_card->nfcData)->designation }}</h6>
                                                        </h6>
                                                    </div>
                                                </div>
                                                @if (
                                                    !empty($nfc_card->nfcData->facebook_url) ||
                                                        !empty($nfc_card->nfcData->instagram_url) ||
                                                        !empty($nfc_card->nfcData->youtube_url) ||
                                                        !empty($nfc_card->nfcData->google_plus_url))
                                                    <div class="rounded-5 mt-2 d-flex justify-content-center align-items-center p-4"
                                                        style="background-color: #f6f6f7; border-radius: 0">
                                                        @if (!empty($nfc_card->nfcData->facebook_url))
                                                            <a href="{{ $nfc_card->nfcData->facebook_url }}" class="text-center"
                                                                style="text-decoration: none;width: 20%;color: #1c344f;">
                                                                <i class="fa fa-facebook facebook-icon icon fa-2x"
                                                                    title="Facebook" aria-hidden="true"></i><span
                                                                    class="sr-only">Facebook</span>
                                                            </a>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->instagram_url))
                                                            <a href="{{ $nfc_card->nfcData->instagram_url }}" class="text-center"
                                                                style="text-decoration: none;width: 20%;color: #1c344f;">
                                                                <i class="fa fa-instagram icon fa-2x p-3" title="Map"
                                                                    aria-hidden="true"></i><span class="sr-only">Whats
                                                                    App</span>
                                                            </a>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->youtube_url))
                                                            <a href="{{ $nfc_card->nfcData->youtube_url }}" class="text-center"
                                                                style="text-decoration: none;width: 20%;color: #1c344f;">
                                                                <i class="fa fa-youtube linkedin-icon icon fa-2x"
                                                                    title="Instagram" aria-hidden="true"></i><span
                                                                    class="sr-only">Linkedin</span>
                                                            </a>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->google_plus_url))
                                                            <a href="{{ $nfc_card->nfcData->google_plus_url }}" class="text-center"
                                                                style="text-decoration: none;width: 20%;color: #1c344f;">
                                                                <i class="fa fa-google whatsapp-icon icon fa-2x"
                                                                    title="Instagram" aria-hidden="true"></i><span
                                                                    class="sr-only">Googel Plus</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                            <p class="text-muted text-center px-5 pt-5">
                                                {{ optional($nfc_card->nfcData)->bio_description }}
                                            </p>
                                        </div>
                                        <div class="px-3">
                                            <!-- personal Detailis -->
                                            <!-- Contact Info -->
                                            <div class="my-3 pt-4">
                                                <div>
                                                    <h5 class="text-muted w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                        Contact
                                                    </h5>
                                                    <div
                                                        style="
                                background-color: #f44336;
                                height: 23px;
                                width: 25px;
                                border-radius: 100%;
                                margin-top: -32px;
                              ">
                                                    </div>
                                                </div>
                                                <div class="row gx-3 align-items-lg-end mt-2">
                                                    @if (!empty($nfc_card->nfcData->email_personal) || !empty($nfc_card->nfcData->email_work))
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <img class="img-fluid"
                                                                    style="position: relative;bottom: -20px;z-index: 5;left: 18px;"
                                                                    src="https://my.cybercard.ma/assets/img/vcard17/email.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                                style="box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);">
                                                                <div class="card-body border-0 p-0">
                                                                    <div class="">
                                                                        <p class="mb-0 fw-bolder">E-mail</p>
                                                                        @if (!empty($nfc_card->nfcData->email_personal))
                                                                            <p class="mb-0 email_personal">
                                                                                {{ optional($nfc_card->nfcData)->email_personal }}
                                                                            </p>
                                                                        @endif
                                                                        @if (!empty($nfc_card->nfcData->email_work))
                                                                            <p class="mb-0 email_work">
                                                                                {{ optional($nfc_card->nfcData)->email_work }}
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (!empty($nfc_card->nfcData->phone_personal) || !empty($nfc_card->nfcData->phone_work))
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <img class="img-fluid"
                                                                    style="position: relative;bottom: -20px;z-index: 5;left: 18px;"
                                                                    src="https://my.cybercard.ma/assets/img/vcard17/phone.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                                style="box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);">
                                                                <div class="card-body border-0 p-0">
                                                                    <div class="">
                                                                        <p class="mb-0 fw-bolder">Phone</p>
                                                                        @if (!empty($nfc_card->nfcData->phone_personal))
                                                                            <p class="mb-0 phone_personal">
                                                                                {{ optional($nfc_card->nfcData)->phone_personal }}
                                                                            </p>
                                                                        @endif
                                                                        @if (!empty($nfc_card->nfcData->phone_work))
                                                                            <p class="mb-0 phone_work">
                                                                                {{ optional($nfc_card->nfcData)->phone_work }}
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (!empty($nfc_card->nfcData->address_line_one) || !empty($nfc_card->nfcData->address_line_two))
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <img class="img-fluid"
                                                                    style="position: relative;bottom: -20px;z-index: 5;left: 18px;"
                                                                    src="https://my.cybercard.ma/assets/img/vcard17/location.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                                style="box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);">
                                                                <div class="card-body border-0 p-0">
                                                                    <div class="">
                                                                        <p class="mb-0 fw-bolder">Location</p>
                                                                        @if (!empty($nfc_card->nfcData->address_line_one))
                                                                            <p class="mb-0 address_line_one">
                                                                                {{ optional($nfc_card->nfcData)->address_line_one }}
                                                                            </p>
                                                                        @endif
                                                                        @if (!empty($nfc_card->nfcData->address_line_two))
                                                                            <p class="mb-0 address_line_two">
                                                                                {{ optional($nfc_card->nfcData)->address_line_two }}
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- QR -->
                                            @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                                <div class="my-3 pt-4">
                                                    <div>
                                                        <h5 class="text-muted text-center rounded-2 py-2 mb-0 fw-bold">
                                                            QR
                                                        </h5>
                                                        <div
                                                            style="background-color: #f44336;height: 23px;width: 25px;border-radius: 100%;margin-top: -32px;">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="d-flex justify-content-center align-items-center w-100">
                                                        <div class="p-2 pt-5 text-start">
                                                            <img class="" width="200px"
                                                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <!-- Company -->
                                            @if (
                                                !empty($nfc_card->nfcData->company_title) ||
                                                    !empty($nfc_card->nfcData->company_name) ||
                                                    !empty($nfc_card->nfcData->company_phone) ||
                                                    !empty($nfc_card->nfcData->company_email) ||
                                                    !empty($nfc_card->nfcData->company_address_line_one) ||
                                                    !empty($nfc_card->nfcData->company_address_line_two) ||
                                                    !empty($nfc_card->nfcData->company_about_title) ||
                                                    !empty($nfc_card->nfcData->company_about_description))
                                                <div class="my-3 pt-4 text-start">
                                                    <div>
                                                        @if (!empty($nfc_card->nfcData->company_title))
                                                            <h5
                                                                class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold company_title">
                                                                Company
                                                            </h5>
                                                        @endif
                                                        <div
                                                            style="background-color: #f44336;height: 23px;width: 25px;border-radius: 100%;margin-top: -32px;">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex pt-4 my-3">
                                                        <div class="px-3 px-lg-0 text-muted w-50">
                                                            @if (!empty($nfc_card->nfcData->company_name))
                                                                <h6 class="fw-bold company_name"
                                                                    style="color: #f44336">
                                                                    {{ optional($nfc_card->nfcData)->company_name }}
                                                                </h6>
                                                            @endif
                                                            @if (!empty($nfc_card->nfcData->company_phone))
                                                                <small>{{ optional($nfc_card->nfcData)->company_phone }}</small>
                                                                <br />
                                                            @endif
                                                            @if (!empty($nfc_card->nfcData->company_email))
                                                                <small>{{ optional($nfc_card->nfcData)->company_email }}</small>
                                                                <br />
                                                            @endif
                                                            @if (!empty($nfc_card->nfcData->company_address_line_one))
                                                                <small>{{ optional($nfc_card->nfcData)->company_address_line_one }}</small>
                                                                <br />
                                                            @endif
                                                            @if (!empty($nfc_card->nfcData->company_address_line_two))
                                                                <small>{{ optional($nfc_card->nfcData)->company_address_line_two }}</small>
                                                            @endif
                                                        </div>

                                                        @if (!empty($nfc_card->nfcData->company_about_title) || !empty($nfc_card->nfcData->company_about_description))
                                                            <p class="text-muted w-50">
                                                                @if (!empty($nfc_card->nfcData->company_about_title))
                                                                    <small class="fw-bold"
                                                                        style="color: #f44336">{{ optional($nfc_card->nfcData)->company_about_title }}</small>
                                                                    <br />
                                                                @endif


                                                                @if (!empty($nfc_card->nfcData->company_about_description))
                                                                    <span>{{ optional($nfc_card->nfcData)->company_about_description }}</span>
                                                                @endif
                                                            </p>
                                                        @endif

                                                    </div>
                                                </div>
                                            @endif
                                            <!-- Service -->
                                            @if (!empty($nfc_card->nfcData->service_section_title))
                                            <div>
                                                    <h5
                                                        class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                        {{ optional($nfc_card->nfcData)->service_section_title }}
                                                    </h5>
                                                <div
                                                    style="background-color: #f44336;height: 23px;width: 25px;border-radius: 100%;margin-top: -32px;">
                                                </div>
                                            </div>
                                            @endif
                                            @if (!empty($nfc_card->nfcData->service_one_title) || !empty($nfc_card->nfcData->service_two_title) || !empty($nfc_card->nfcData->service_three_title))
                                                <div class="py-5">
                                                    @if (!empty($nfc_card->nfcData->service_one_title) || !empty($nfc_card->nfcData->service_one_description))
                                                        <div class="row align-items-center mb-4 shadow-sm">
                                                            <div class="col-lg-2 px-0">
                                                                <div>
                                                                    <img class="img-fluid"
                                                                        style="background-color: #f3fbff"
                                                                        src="https://my.cybercard.ma/uploads/vcards/services/118/Design.png"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10">
                                                                <div>
                                                                    <h6 class="fw-bolder">
                                                                        {{ optional($nfc_card->nfcData)->service_one_title }}
                                                                    </h6>
                                                                    <p>
                                                                        {{ optional($nfc_card->nfcData)->service_one_description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (!empty($nfc_card->nfcData->service_two_title) || !empty($nfc_card->nfcData->service_two_description))
                                                        <div class="row align-items-center mb-4 shadow-sm">
                                                            <div class="col-lg-2 px-0">
                                                                <div>
                                                                    <img class="img-fluid"
                                                                        style="background-color: #f3fbff"
                                                                        src="https://my.cybercard.ma/uploads/vcards/services/118/Design.png"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10">
                                                                <div>
                                                                    <h6 class="fw-bolder">
                                                                        {{ optional($nfc_card->nfcData)->service_two_title }}
                                                                    </h6>
                                                                    <p>
                                                                        {{ optional($nfc_card->nfcData)->service_two_description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (!empty($nfc_card->nfcData->service_three_title) || !empty($nfc_card->nfcData->service_three_description))
                                                        <div class="row align-items-center mb-4 shadow-sm">
                                                            <div class="col-lg-2 px-0">
                                                                <div>
                                                                    <img class="img-fluid"
                                                                        style="background-color: #f3fbff"
                                                                        src="https://my.cybercard.ma/uploads/vcards/services/118/Design.png"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10">
                                                                <div>
                                                                    <h6 class="fw-bolder">
                                                                        {{ optional($nfc_card->nfcData)->service_three_title }}
                                                                    </h6>
                                                                    <p>
                                                                        {{ optional($nfc_card->nfcData)->service_three_description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif
                                            <!-- Gallery -->

                                            @if (
                                                !empty($nfc_card->nfcData->service_one_image) ||
                                                    !empty($nfc_card->nfcData->service_two_image) ||
                                                    !empty($nfc_card->nfcData->service_three_image))
                                                    <div>
                                                        <h5
                                                            class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                            Gallery
                                                        </h5>
                                                        <div
                                                            style="background-color: #f44336;height: 23px;width: 25px;border-radius: 100%;margin-top: -32px;">
                                                        </div>
                                                    </div>
                                                <div class="mb-5 mt-4">
                                                    <div class="slick-slider p-4">
                                                        @if (!empty($nfc_card->nfcData->service_one_image))
                                                            <div>
                                                                <img class="img-fluid service_one_image"
                                                                    style="background-size: cover;width: 100%;height: 300px;object-fit: cover;border-radius: 10px;"
                                                                    src="{{ !empty($nfc_card->nfcData->service_one_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                                    alt="{{ $nfc_card->nfcData->service_one_title }}" />
                                                                <div class="text-white"
                                                                    style="background-color: #f44336">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->service_two_image))
                                                            <div>
                                                                <img class="img-fluid service_two_image"
                                                                    style="background-size: cover;width: 100%;height: 300px;object-fit: cover;border-radius: 10px;"
                                                                    src="{{ !empty($nfc_card->nfcData->service_two_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                                    alt="{{ $nfc_card->nfcData->service_two_title }}" />
                                                                <div class="text-white"
                                                                    style="background-color: #f44336">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->service_three_image))
                                                            <div>
                                                                <img class="img-fluid service_three_image"
                                                                    style="background-size: cover;width: 100%;height: 300px;object-fit: cover;border-radius: 10px;"
                                                                    src="{{ !empty($nfc_card->nfcData->service_three_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                                    alt="{{ $nfc_card->nfcData->service_three_title }}" />
                                                                <div class="text-white"
                                                                    style="background-color: #f44336">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <!-- Add more divs with images for additional slides -->
                                                    </div>
                                                </div>
                                            @endif

                                            <!-- Form -->
                                            <div
                                                style="background-image: url(https://my.cybercard.ma/assets/img/vcard17/appointment-bg.png);">
                                                <div>
                                                    <h5
                                                        class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                        Inquiry
                                                    </h5>
                                                    <div
                                                        style="background-color: #f44336;height: 23px;width: 25px;border-radius: 100%;margin-top: -32px;">
                                                    </div>
                                                </div>
                                                <div class="pt-4">
                                                    <form action="{{ route('individual-message.store') }}"
                                                        method="post" class="p-3">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ optional($nfc_card)->user_id }}">
                                                        <input type="hidden" name="nfc_id"
                                                            value="{{ optional($nfc_card)->id }}">
                                                        <input type="hidden" name="nfc_code"
                                                            value="{{ optional($nfc_card)->code }}">
                                                            <div class="row">
                                                                <div class="col mb-2">
                                                                    <div class="fv-row my-3">
                                                                        <x-metronic.label
                                                                            class="fw-semibold fs-6 mb-2 required">Name
                                                                            <span class="text-danger fs-1" style="position: relative;top: 0.6rem;">*</span>
                                                                        </x-metronic.label>
                                                                        <x-metronic.input type="text" name="name"
                                                                            value="{{ old('name') }}"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="Robert Duff" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col mb-2">
                                                                    <div class="fv-row my-3">
                                                                        <x-metronic.label
                                                                            class="fw-semibold fs-6 mb-2 required">Email
                                                                            <span class="text-danger fs-1" style="position: relative;top: 0.6rem;">*</span>
                                                                        </x-metronic.label>
                                                                        <x-metronic.input type="email" name="email"
                                                                            value="{{ old('email') }}"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="example@mail.com" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-2">
                                                                    <div class="fv-row my-3">
                                                                        <x-metronic.label
                                                                            class="fw-semibold fs-6 mb-2">Phone</x-metronic.label>
                                                                        <x-metronic.input type="text" name="phone"
                                                                            value="{{ old('phone') }}"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="01*******" />
                                                                    </div>
                                                                </div>
                                                                <div class="col mb-2">
                                                                    <div class="fv-row my-3">
                                                                        <x-metronic.label
                                                                            class="fw-semibold fs-6 mb-2">Headline</x-metronic.label>
                                                                        <x-metronic.input type="text" name="headline"
                                                                            value="{{ old('headline') }}"
                                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                                            placeholder="Headline" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-2">
                                                                    <div class="fv-row my-3">
                                                                        <x-metronic.label
                                                                            class="fw-semibold fs-6 mb-2 required">Message
                                                                            <span class="text-danger fs-1" style="position: relative;top: 0.6rem;">*</span>
                                                                        </x-metronic.label>
                                                                        <textarea class="form-control form-control-solid" rows="5" name="message" value="{{ old('message') }}"
                                                                            placeholder="Enter Message" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 2.5rem">
                                                                <div class="col mb-2 text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-sm mt-2 px-4 rounded-pill"
                                                                        style="background-color: #f44336;color: #fff;">
                                                                        Send Messages
                                                                    </button>
                                                                </div>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row fixed-bottom w-25 mx-auto mobile-d-none">
                                                <div class="col mb-2 text-center">
                                                    <a href="tel:+{{ optional($nfc_card->nfcData)->phone_personal }}"
                                                        class="btn btn-sm mt-2 p-2 w-100 nfc_contact_btn nfc_contact_btn_pc"
                                                        style="background-color: #f44336; color: #fff">
                                                        <i class="fas fa-contact pe-1 fa-address-book"></i>
                                                        Save Contact
                                                    </a>
                                                </div>
                                            </div>
                                            <div
                                                class="row fixed-bottom w-sm-100 w-lg-25 d-sm-block d-lg-none mx-auto">
                                                <div class="col mb-2 text-center">
                                                    <a href="tel:+{{ optional($nfc_card->nfcData)->phone_personal }}"
                                                        class="btn btn-sm mt-2 p-2 w-100 nfc_contact_btn nfc_contact_btn_mobile"
                                                        style="background-color: #f44336; color: #fff">
                                                        <i class="fas fa-contact pe-1 fa-address-book"></i>
                                                        Save Contact
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/4cba8ce13c.js"></script>
    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        'use strict';

        function downloadToFile(content, filename, contentType) {
            const a = document.createElement('a');
            const file = new Blob([content], {
                type: contentType
            });

            a.href = URL.createObjectURL(file);
            a.download = filename;
            a.click();

            URL.revokeObjectURL(a.href);
        }

        function getBase64Image(imgUrl, callback) {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.onload = () => {
                const canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                callback(dataURL.replace(/^data:image\/(png|jpeg);base64,/, ''));
            };
            img.src = imgUrl;
        }

        const makeVCardVersion = () => `VERSION:3.0`;
        const makeVCardInfo = (lastName, firstName) => `N:${lastName};${firstName};;;`;
        const makeVCardName = (firstName, lastName) => `FN:${firstName} ${lastName}`;
        const makeVCardOrg = (org) => `ORG:${org}`;
        const makeVCardTitle = (title) => `TITLE:${title}`;
        const makeVCardPhoto = (imgBase64) => `PHOTO;ENCODING=b;TYPE=JPEG:${imgBase64}`;
        const makeVCardTel = (phone) => `TEL;TYPE=CELL:${phone}`;
        const makeVCardAdr = (addressLine1, addressLine2) => `ADR;TYPE=HOME:;;${addressLine1};${addressLine2};;;;`;
        const makeVCardEmail = (email) => `EMAIL:${email}`;
        const makeVCardUrl = (url) => `URL:${url}`;
        const makeVCardSocialProfile = (type, url) => `X-SOCIALPROFILE;TYPE=${type}:${url}`;
        const makeVCardTimeStamp = () => `REV:${new Date().toISOString()}`;

        function makeVCard(profileImageBase64) {
            const firstName = '{{ optional($nfc_card->nfcData)->first_name }}';
            const lastName = '{{ optional($nfc_card->nfcData)->last_name }}';
            const designation = '{{ optional($nfc_card->nfcData)->designation }}';
            const phone = '{{ $nfc_card->nfcData->phone_personal }}';
            const email = '{{ $nfc_card->nfcData->email_personal }}';
            const addressLine1 = '{{ $nfc_card->nfcData->address_line_one }}';
            const addressLine2 = '{{ $nfc_card->nfcData->address_line_two }}';
            const linkedin = '{{ $nfc_card->nfcData->linkedin_url }}';

            let vcard = `BEGIN:VCARD\n${makeVCardVersion()}\n`;
            vcard += `${makeVCardInfo(lastName, firstName)}\n`;
            vcard += `${makeVCardName(firstName, lastName)}\n`;
            vcard += `${makeVCardTitle(designation)}\n`;

            if (profileImageBase64) {
                vcard += `${makeVCardPhoto(profileImageBase64)}\n`;
            }

            vcard += `${makeVCardTel(phone)}\n`;

            if (addressLine1 || addressLine2) {
                vcard += `${makeVCardAdr(addressLine1, addressLine2)}\n`;
            }

            if (email) {
                vcard += `${makeVCardEmail(email)}\n`;
            }

            if (linkedin) {
                vcard += `${makeVCardUrl(linkedin)}\n`;
                vcard += `${makeVCardSocialProfile('linkedin', linkedin)}\n`;
            }

            vcard += `${makeVCardTimeStamp()}\nEND:VCARD`;

            return vcard;
        }

        function handleContactButtonClick(event, isMobile) {
            event.preventDefault(); // Prevent default link behavior

            const profileImage = '{{ asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) }}';

            getBase64Image(profileImage, (base64Image) => {
                const vcard = makeVCard(base64Image);

                if (isMobile) {
                    // Open vCard details in contact app for mobile
                    const encodedVcfContent = encodeURIComponent(vcard);
                    const uri = 'data:text/vcard;charset=utf-8,' + encodedVcfContent;
                    window.location.href = uri;
                } else {
                    // Download vCard for PC
                    downloadToFile(vcard, 'contact.vcf', 'text/vcard');
                }
            });
        }

        document.querySelector('.nfc_contact_btn_pc').addEventListener('click', (event) => {
            handleContactButtonClick(event, false);
        });

        document.querySelector('.nfc_contact_btn_mobile').addEventListener('click', (event) => {
            handleContactButtonClick(event, true);
        });
    </script>



    <script>
        // JavaScript to handle button click
        // document.querySelectorAll('.nfc_contact_btn').forEach(function(button) {
        //     button.addEventListener('click', function(event) {
        //         event.preventDefault(); // Prevent default link behavior

        //         var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        //         if (isMobile) {
        //             // Mobile device, open contact saving options
        //             var name =
        //                 '{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}';
        //             var mobileNumber = '{{ $nfc_card->nfcData->phone_personal }}';
        //             var email = '{{ $nfc_card->nfcData->email_personal }}';
        //             var facebook = '{{ $nfc_card->nfcData->facebook_url }}';
        //             var instagram = '{{ $nfc_card->nfcData->instagram_url }}';
        //             var youtube = '{{ $nfc_card->nfcData->youtube_url }}';
        //             var googlePlus = '{{ $nfc_card->nfcData->google_plus_url }}';

        //             // Construct the contact details
        //             var contactDetails = "BEGIN:VCARD\n" +
        //                 "VERSION:3.0\n" +
        //                 "FN:" + name + "\n" +
        //                 "TEL;TYPE=CELL:" + mobileNumber + "\n" +
        //                 "EMAIL:" + email + "\n" +
        //                 "URL:" + facebook + "\n" +
        //                 "X-SOCIALPROFILE:facebook:" + facebook + "\n" +
        //                 "X-SOCIALPROFILE:instagram:" + instagram + "\n" +
        //                 "X-SOCIALPROFILE:youtube:" + youtube + "\n" +
        //                 "X-SOCIALPROFILE:googleplus:" + googlePlus + "\n" +
        //                 "END:VCARD";

        //             // Encode the contact details for URI
        //             var encodedContact = encodeURIComponent(contactDetails);

        //             // Open the appropriate URI for saving contacts
        //             var uri = 'data:text/vcard;charset=utf-8,' + encodedContact;
        //             window.open(uri);

        //         } else {
        //             // Desktop, generate .vfc file and initiate download
        //             var name =
        //                 '{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}';
        //             var mobileNumber = '{{ $nfc_card->nfcData->phone_personal }}';

        //             // Construct the .vfc file content
        //             var vfcContent = "BEGIN:VCARD\n" +
        //                 "VERSION:3.0\n" +
        //                 "FN:" + name + "\n" +
        //                 "TEL;TYPE=CELL:" + mobileNumber + "\n" +
        //                 "END:VCARD";

        //             // Create a Blob object containing the .vfc file content
        //             var blob = new Blob([vfcContent], {
        //                 type: 'text/vcard;charset=utf-8'
        //             });

        //             // Create a temporary anchor element
        //             var a = document.createElement('a');
        //             a.style.display = 'none';
        //             document.body.appendChild(a);

        //             // Set the href attribute of the anchor element to the Object URL of the Blob
        //             a.href = window.URL.createObjectURL(blob);

        //             // Set the download attribute to specify the filename
        //             a.download = 'contact.vfc';

        //             // Simulate a click event to trigger the download
        //             a.click();

        //             // Clean up
        //             window.URL.revokeObjectURL(a.href);
        //             document.body.removeChild(a);
        //         }
        //     });
        // });
        // document.querySelectorAll('.nfc_contact_btn').forEach(function(button) {
        //     button.addEventListener('click', function(event) {
        //         event.preventDefault(); // Prevent default link behavior

        //         // Function to check if the device is mobile or tablet
        //         function isMobileOrTablet() {
        //             // Check for iOS, Android, and common mobile/tablet user agents
        //             return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator
        //                 .userAgent);
        //         }

        //         var isMobile = isMobileOrTablet();

        //         // Retrieve contact information from PHP variables
        //         var firstName = '{{ optional($nfc_card->nfcData)->first_name }}';
        //         var lastName = '{{ optional($nfc_card->nfcData)->last_name }}';
        //         var designation = '{{ optional($nfc_card->nfcData)->designation }}';
        //         var mobileNumber = '{{ $nfc_card->nfcData->phone_personal }}';
        //         var email = '{{ $nfc_card->nfcData->email_personal }}';
        //         var addressLine1 = '{{ $nfc_card->nfcData->address_line_one }}';
        //         var addressLine2 = '{{ $nfc_card->nfcData->address_line_two }}';
        //         var linkedin = '{{ $nfc_card->nfcData->linkedin_url }}';
        //         var profileImage =
        //             '{{ asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) }}';

        //         // Construct the vCard (vcf) content
        //         var vcfContent = "BEGIN:VCARD\n" +
        //             "VERSION:3.0\n" +
        //             "FN:" + firstName + " " + lastName + "\n" +
        //             "ORG:" + designation + "\n" + // Optional: Organization (designation)
        //             "TEL;TYPE=CELL:" + mobileNumber + "\n";

        //         // Add optional fields if they exist
        //         if (email.trim() !== '') {
        //             vcfContent += "EMAIL:" + email + "\n";
        //         }

        //         if (addressLine1.trim() !== '' || addressLine2.trim() !== '') {
        //             vcfContent += "ADR;TYPE=HOME:;;" + addressLine1 + ";" + addressLine2 + ";;;;\n";
        //         }

        //         if (linkedin.trim() !== '') {
        //             vcfContent += "URL:" + linkedin + "\n";
        //             vcfContent += "X-SOCIALPROFILE;TYPE=linkedin:" + linkedin + "\n";
        //         }

        //         // Profile image can be added as a URL to be displayed in some apps
        //         if (profileImage.trim() !== '') {
        //             vcfContent += "PHOTO;VALUE=URL;TYPE=JPEG:" + profileImage + "\n";
        //         }

        //         vcfContent += "END:VCARD";

        //         if (isMobile) {
        //             // For mobile devices, open the data URI directly to prompt adding contact
        //             var encodedVcfContent = encodeURIComponent(vcfContent);
        //             var uri = 'data:text/vcard;charset=utf-8,' + encodedVcfContent;
        //             window.open(uri);
        //         } else {
        //             // For desktop, create and initiate the download of .vcf file
        //             var blob = new Blob([vcfContent], {
        //                 type: 'text/vcard;charset=utf-8'
        //             });
        //             var url = URL.createObjectURL(blob);

        //             var a = document.createElement('a');
        //             a.style.display = 'none';
        //             a.href = url;
        //             a.download = 'contact.vcf';

        //             document.body.appendChild(a);
        //             a.click();

        //             // Clean up
        //             window.URL.revokeObjectURL(url);
        //             document.body.removeChild(a);
        //         }
        //     });
        // });




        // Initialize Slick Slider
        $(document).ready(function() {
            $(".slick-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true, // This line defines draggable
                autoplay: true,
                autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
                responsive: [{
                        breakpoint: 768, // define breakpoint at 768px screen width
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 1024, // define breakpoint at 1024px screen width
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                    // Add more breakpoints and settings as needed
                ],
            });
        });
    </script>
</body>

</html>
