<x-admin-app-layout :title="'NFC Card List'">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-transparent mt-10" data-bs-theme="light" style="background-color: #1C325E;">
                <div class="card-body row ps-xl-15">
                    <div class="m-0 col-lg-8">
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                            <span class="me-2">
                                You have Created Total
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="javascript:void(0)"
                                        class="text-danger opacity-75-hover">{{ $nfc_cards->count() }} NFC.</a>

                                    <span
                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                </span>
                            </span>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('admin.virtual-card.create') }}" class="btn btn-info fw-semibold me-2">
                                Create VCard <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 505.557 505.557" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.769 68.778H51.788C23.232 68.778 0 92.011 0 120.566v188.125h97.061c8.284 0 15 6.716 15 15v113.087h341.708c28.556 0 51.788-23.232 51.788-51.788V120.566c0-28.555-23.233-51.788-51.788-51.788zm-118.913 142.26c-5.834-5.882-5.796-15.379.086-21.213s15.378-5.797 21.213.086c34.056 34.333 33.68 90.121-.839 124.361a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.834-5.882-5.796-15.379.086-21.213 22.774-22.59 23.073-59.346.666-81.935zm34.442 118.587c43.251-42.901 43.792-112.733 1.206-155.666-5.834-5.882-5.796-15.379.086-21.213s15.378-5.795 21.213.086c54.235 54.678 53.617 143.541-1.378 198.092a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.835-5.882-5.797-15.379.085-21.213zm-76.515-94.01c-5.834-5.882-5.796-15.379.086-21.213 5.881-5.834 15.379-5.794 21.213.086 20.719 20.889 20.502 54.816-.483 75.633a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.834-5.882-5.796-15.379.086-21.213 9.24-9.167 9.38-24.063.31-33.207zM63.072 162.986c0-8.284 6.716-15 15-15h138.903c8.284 0 15 6.716 15 15s-6.716 15-15 15H78.072c-8.284 0-15-6.715-15-15zm20.706 73.412c-8.284 0-15-6.716-15-15s6.716-15 15-15h63.745c8.284 0 15 6.716 15 15s-6.716 15-15 15H83.778z"
                                                fill="#fff" opacity="1" data-original="#fff" class="">
                                            </path>
                                            <path
                                                d="M82.061 338.691H0v46.299c0 28.556 23.232 51.788 51.788 51.788H82.06v-98.087z"
                                                fill="#fff" opacity="1" data-original="#fff" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </a>

                            <a href="{{ route('admin.barcode.create') }}"
                                class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                                Create Barcode <span class="svg-icon svg-icon-2 pt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 426.667 426" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M74.668.332h-64C4.778.332 0 5.109 0 11v64c0 5.89 4.777 10.668 10.668 10.668S21.332 80.891 21.332 75V21.668h53.336c5.89 0 10.664-4.777 10.664-10.668S80.559.332 74.668.332zM74.668 320.332H21.332V267c0-5.89-4.773-10.668-10.664-10.668S0 261.109 0 267v64c0 5.89 4.777 10.668 10.668 10.668h64c5.89 0 10.664-4.777 10.664-10.668s-4.773-10.668-10.664-10.668zM416 .332h-64c-5.89 0-10.668 4.777-10.668 10.668S346.109 21.668 352 21.668h53.332V75c0 5.89 4.777 10.668 10.668 10.668S426.668 80.891 426.668 75V11c0-5.89-4.777-10.668-10.668-10.668zM416 256.332c-5.89 0-10.668 4.777-10.668 10.668v53.332H352c-5.89 0-10.668 4.777-10.668 10.668s4.777 10.668 10.668 10.668h64c5.89 0 10.668-4.777 10.668-10.668v-64c0-5.89-4.777-10.668-10.668-10.668zM74.668 64.332C68.778 64.332 64 69.109 64 75v192c0 5.89 4.777 10.668 10.668 10.668S85.332 272.891 85.332 267V75c0-5.89-4.773-10.668-10.664-10.668zM117.332 64.332h21.336c5.89 0 10.664 4.777 10.664 10.668v192c0 5.89-4.773 10.668-10.664 10.668h-21.336c-5.89 0-10.664-4.777-10.664-10.668V75c0-5.89 4.773-10.668 10.664-10.668zM181.332 64.332c-5.89 0-10.664 4.777-10.664 10.668v192c0 5.89 4.773 10.668 10.664 10.668S192 272.891 192 267V75c0-5.89-4.777-10.668-10.668-10.668zM224 64.332h21.332C251.222 64.332 256 69.109 256 75v192c0 5.89-4.777 10.668-10.668 10.668H224c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zM288 64.332c-5.89 0-10.668 4.777-10.668 10.668v192c0 5.89 4.777 10.668 10.668 10.668s10.668-4.777 10.668-10.668V75c0-5.89-4.777-10.668-10.668-10.668zM330.668 64.332H352c5.89 0 10.668 4.777 10.668 10.668v192c0 5.89-4.777 10.668-10.668 10.668h-21.332c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zm0 0"
                                                fill="#fff" opacity="1" data-original="#fff" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class=" col-lg-4">
                        <div class="">
                            <div class="d-flex align-items-center pt-20 justify-content-center ">
                                <a href="{{ route('admin.nfc-card.create') }}"
                                    class="btn btn-info shadow-sm w-50 pulse fs-3 d-flex justify-content-center align-items-center pulse pulse-warning me-5">
                                    <span class="pulse-ring"></span>
                                    <span class="pe-2 text-white">Create NFC</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path fill="#5faa46"
                                                    d="M480 288c-8.836 0-16-7.163-16-16 0-114.691-93.309-208-208-208-8.836 0-16-7.163-16-16s7.164-16 16-16c64.106 0 124.375 24.964 169.706 70.294S496 207.894 496 272c0 8.837-7.164 16-16 16z"
                                                    opacity="1" data-original="#5faa46" class=""></path>
                                                <path fill="#5faa46"
                                                    d="M416 288c-8.836 0-16-7.163-16-16 0-79.402-64.598-144-144-144-8.836 0-16-7.163-16-16s7.164-16 16-16c97.047 0 176 78.953 176 176 0 8.837-7.164 16-16 16z"
                                                    opacity="1" data-original="#5faa46" class=""></path>
                                                <path fill="#5faa46"
                                                    d="M352 288c-8.836 0-16-7.163-16-16 0-44.112-35.888-80-80-80-8.836 0-16-7.163-16-16s7.164-16 16-16c61.757 0 112 50.243 112 112 0 8.837-7.164 16-16 16z"
                                                    opacity="1" data-original="#5faa46" class=""></path>
                                                <path fill="#91c83c"
                                                    d="M414.39 129.61a15.95 15.95 0 0 1-11.315-4.688C363.798 85.636 311.565 64 256 64c-8.836 0-16-7.163-16-16s7.164-16 16-16c64.115 0 124.384 24.966 169.705 70.298 6.248 6.249 6.247 16.38-.002 22.628a15.952 15.952 0 0 1-11.313 4.684zM369.14 174.86a15.95 15.95 0 0 1-11.312-4.685C330.622 142.979 294.458 128 256 128c-8.836 0-16-7.163-16-16s7.164-16 16-16c47.004 0 91.202 18.306 124.452 51.545 6.249 6.247 6.251 16.378.003 22.627a15.949 15.949 0 0 1-11.315 4.688zM323.88 220.12a15.95 15.95 0 0 1-11.317-4.689C297.462 200.321 277.374 192 256 192c-8.836 0-16-7.163-16-16s7.164-16 16-16c29.925 0 58.051 11.652 79.197 32.81 6.247 6.25 6.244 16.381-.006 22.627a15.952 15.952 0 0 1-11.311 4.683z"
                                                    opacity="1" data-original="#91c83c" class=""></path>
                                                <path fill="#4182c3"
                                                    d="M288 480H64c-26.51 0-48-21.49-48-48V272c0-26.51 21.49-48 48-48h224c26.51 0 48 21.49 48 48v160c0 26.51-21.49 48-48 48z"
                                                    opacity="1" data-original="#4182c3"></path>
                                                <path fill="#64afe1"
                                                    d="M256 480H64c-26.51 0-48-21.49-48-48V272c0-26.51 21.49-48 48-48h192c26.51 0 48 21.49 48 48v160c0 26.51-21.49 48-48 48z"
                                                    opacity="1" data-original="#64afe1" class=""></path>
                                                <path fill="#463c4b"
                                                    d="M256 464H64c-17.673 0-32-14.327-32-32V272c0-17.673 14.327-32 32-32h192c17.673 0 32 14.327 32 32v160c0 17.673-14.327 32-32 32z"
                                                    opacity="1" data-original="#463c4b" class=""></path>
                                                <circle cx="256" cy="272" r="16" fill="#5faa46"
                                                    opacity="1" data-original="#5faa46" class=""></circle>
                                                <path fill="#91c83c"
                                                    d="M248 280a8 8 0 0 0 8-8v-16c-8.837 0-16 7.163-16 16a8 8 0 0 0 8 8z"
                                                    opacity="1" data-original="#91c83c" class=""></path>
                                                <g fill="#faa019">
                                                    <path
                                                        d="M112 312a8 8 0 0 0-8 8v30.111l-16.845-33.689A8 8 0 0 0 72 320v64a8 8 0 0 0 16 0v-30.111l16.845 33.689a8.002 8.002 0 0 0 8.993 4.208A8 8 0 0 0 120 384v-64a8 8 0 0 0-8-8zM176 312h-32a8 8 0 0 0-8 8v64a8 8 0 0 0 16 0v-24h8a8 8 0 0 0 0-16h-8v-16h24a8 8 0 0 0 0-16zM232 360a8 8 0 0 0-8 8c0 4.411-3.589 8-8 8s-8-3.589-8-8v-32c0-4.411 3.589-8 8-8s8 3.589 8 8a8 8 0 0 0 16 0c0-13.233-10.767-24-24-24s-24 10.767-24 24v32c0 13.233 10.767 24 24 24s24-10.767 24-24a8 8 0 0 0-8-8z"
                                                        fill="#faa019" opacity="1" data-original="#faa019"
                                                        class=""></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/sigma-1/17-dark.png"
                                    class="position-absolute me-3 bottom-0 end-0 create-img ps-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('virtualCard.virtualCard_index_partial')
    </div>

</x-admin-app-layout>
