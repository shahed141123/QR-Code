<x-frontend-app-layout :title="'Pricing'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url(https://img.freepik.com/free-photo/high-angle-cash-calculator_23-2149103926.jpg?t=st=1711992497~exp=1711996097~hmac=cba674665bb01df3d0bf2d4b9dcb482d199fafdfc976f1390185593de8dbb984&w=1380);
      height: 400px;">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    Our Pricing
                </h1>
            </div>
        </div>
    </section>
    <section class="pricing-three-area bgp-bottom pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-45 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>QR Code & NFC Generator
                            Pricing & Plans</h2>
                        <p>Choose a QR Code pricing plan that best suits your business.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tap-five-content rmb-55 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <ul class="nav advanced-tab style-fours mb-40 d-flex justify-content-center mx-auto"
                            role="tablist">
                            <li class="">
                                <button class="nav-link active text-decoration-none pt-3 text-black"
                                    data-bs-toggle="tab" data-bs-target="#tabFour1">
                                    <i class="fa fa-user" aria-hidden="true"></i> QR CODE </button>
                            </li>
                            <li class="">
                                <button class="nav-link text-decoration-none pt-3 text-black" data-bs-toggle="tab"
                                    data-bs-target="#tabFour2">
                                    <i class="fa fa-user" aria-hidden="true"></i> NFC WITH VIRTUAL CARD</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tabFour1">
                                <div class="row justify-content-center">
                                    @foreach ($individual_plans as $individual_plan)
                                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="pricing-item style-five">
                                                <div class="title-price">
                                                    <h5 class="title">{{ $individual_plan->title }}</h5>
                                                    <div class="price"><span
                                                            class="prev">$</span>{{ $individual_plan->price }}<span
                                                            class="next">/
                                                        @if ($individual_plan->billing_cycle == 'yearly')
                                                            yearly
                                                        @elseif ($individual_plan->billing_cycle == 'monthly')
                                                            monthly
                                                        @elseif ($individual_plan->billing_cycle == 'half_yearly')
                                                            Half Yearly
                                                        @else
                                                            Trial Period
                                                        @endif
                                                        </span></div>
                                                </div>
                                                <hr>
                                                {{-- <div class="text">For small businesses looking to reach more consumers
                                                </div> --}}
                                                @php
                                                    $descriptions = is_array($individual_plan->descriptions)
                                                        ? $individual_plan->descriptions
                                                        : json_decode($individual_plan->descriptions);
                                                @endphp
                                                @if (!empty($descriptions))
                                                    <ul class="icon-list">
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="ion-checkmark"></i> {{ $description }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user_subscribe.register', $individual_plan->slug) }}"
                                                    class="theme-btn style-two">Buy Now <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabFour2">
                                <div class="row justify-content-center">
                                    @foreach ($business_plans as $business_plan)
                                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="pricing-item style-five">
                                                <div class="title-price">
                                                    <h5 class="title">{{ $business_plan->title }}</h5>
                                                    <div class="price"><span
                                                            class="prev">$</span>{{ $business_plan->price }}<span
                                                            class="next">/{{ $business_plan->billing_cycle }}</span></div>
                                                </div>
                                                <hr>
                                                {{-- <div class="text">For small businesses looking to reach more consumers
                                                </div> --}}
                                                @php
                                                    $descriptions = is_array($business_plan->descriptions)
                                                        ? $business_plan->descriptions
                                                        : json_decode($business_plan->descriptions);
                                                @endphp
                                                @if (!empty($descriptions))
                                                    <ul class="icon-list">
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="ion-checkmark"></i> {{ $description }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user_subscribe.register', $business_plan->slug) }}"
                                                    class="theme-btn style-two">Buy Now <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-three-shapes">
            <div class="shape one">
                <img src="https://webtendtheme.net/html/2024/akpager/assets/images/shapes/price1.png" alt="Shape">
            </div>
            <div class="shape two">
                <img src="https://webtendtheme.net/html/2024/akpager/assets/images/shapes/price2.png" alt="Shape">
            </div>
        </div>
    </section>
    @push('scripts')
    @endpush
</x-frontend-app-layout>
