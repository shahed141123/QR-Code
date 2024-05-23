<style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    /* CSS for centering the mobile frame */

    .nfc-mobile-frame {
        width: 100%;
        max-width: 576px;
        min-height: 100vh;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame .card {
        background-color: var(--white);
        width: 100%;
        max-width: 576px;
        min-height: 100vh;
        border-radius: 20px;
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
    }

    /* Ensure last slide doesn't have margin */
    .slick-slide:last-child {
        margin-right: 0;
        border-radius: 10px;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 768px) {

        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        .mobile-profiles {
            padding-top: 65px;
        }

        .mobile-images-profile {
            margin-top: 0 !important;
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

<div class="qr_card_preview">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
            <div class="nfc-mobile-frame rounded-0">
                <div class="card p-0 rounded-0">
                    <div class="card-body p-0 rounded-0 row">
                        <div class="col-lg-6 pe-0 d-flex justify-content-center align-items-center"
                            style="
                        background-image: url(https://i.pinimg.com/736x/e7/63/24/e7632495dd8e76e42fad24de2fc92f26.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        object-fit: fill;
                      ">
                            <div class="text-center" style="position: relative; z-index: 1">
                                <div>
                                    <div class="py-3" style="background-color: rgba(0, 0, 0, 0.561)">
                                        <div>
                                            <img class="img-fluid"
                                                src="https://i.ibb.co/wNckFnj/Restaurant-logo-with-chef-drawing-template-on-transparent-background-PNG-removebg-preview.png"
                                                alt="" />
                                        </div>
                                        <h3 class="text-white mb-0"
                                            style="font-family: var(--tem-one-name-font-family)">
                                            Resturent
                                        </h3>
                                        <h1 class="text-white mb-0"
                                            style="
                                font-size: 80px;
                                font-family: var(--tem-one-name-font-family);
                              ">
                                            Menu
                                        </h1>
                                        <p class="p-3 text-white mb-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Omnis, ipsam.
                                        </p>
                                        <a href=""
                                            class="text-decoration-none text-black bg-white p-2 rounded-2">Call Now:
                                            01576614451</a>
                                        <div class="mt-4">
                                            <a href="" class="btn btn-danger">View Location</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0 d-flex flex-column justify-content-center align-items-center">
                            <h4>All Menus</h4>
                            <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                                <!-- First Menu -->
                                <div class="row align-items-center w-100 ps-2"
                                    style="
                            border-top: 1px dashed #e92c28;
                            background: white;
                          ">
                                    <div class="col-lg-3 px-0">
                                        <div style="background-color: white">
                                            <img width="60px" class="img-fluid"
                                                src="https://d3nvy39jvu7woe.cloudfront.net/static/images/restaurantmenu/breakfast.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-9 pe-0">
                                        <div>
                                            <p class="mb-0 text-black fw-bold">Breakfast</p>
                                            <small class="mb-0 text-black">07:00pm - 07:00pm</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Menu End -->
                                <!-- First Menu -->
                                <div class="row align-items-center w-100 ps-2"
                                    style="
                            border-top: 1px dashed #e92c28;
                            background: white;
                          ">
                                    <div class="col-lg-3 px-0">
                                        <div style="background-color: white">
                                            <img width="60px" class="img-fluid"
                                                src="https://d3nvy39jvu7woe.cloudfront.net/static/images/restaurantmenu/breakfast.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-9 pe-0">
                                        <div>
                                            <p class="mb-0 text-black fw-bold">Breakfast</p>
                                            <small class="mb-0 text-black">07:00pm - 07:00pm</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Menu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
