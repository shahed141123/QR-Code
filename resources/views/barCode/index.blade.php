


    <div class="col-lg-12 mt-10">
        <div class="card card-p-0 card-flush p-3 pt-0">
            <div class="p-5 pb-2">
                <h4 class="mb-0">View and manage your BarCodes</h4>
            </div>
            <div class="card-body table-responsive">
                <table
                    class="table table-responisve align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                    id="bar_code_admin">
                    <thead>
                        <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                            <th width="5%">SL</th>
                            <th width="10%">Image</th>
                            <th width="10%">Virtual Card</th>
                            <th width="25%">Name </th>
                            <th width="10%">Link</th>
                            <th width="10%">VCARD</th>
                            <th width="15%">Address</th>
                            <th width="15%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @foreach ($bar_codes as $bar_code)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    @if ($bar_code->nfc_template == 'template-one')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/assets/images/nfc-templates/template_one.jpg') }}"
                                            alt="">
                                    @elseif ($bar_code->nfc_template == 'template-two')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/assets/images/nfc-templates/template_two.jpg') }}"
                                            alt="">
                                    @elseif ($bar_code->nfc_template == 'template-three')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/assets/images/nfc-templates/template_three.jpg') }}"
                                            alt="">
                                    @elseif ($bar_code->nfc_template == 'template-four')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                            alt="">
                                    @elseif ($bar_code->nfc_template == 'template-five')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                            alt="">
                                    @elseif ($bar_code->nfc_template == 'template-six')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                            alt="">
                                    @endif
                                </td>
                                <td>
                                    @if (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-one')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_1.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-two')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_2.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-three')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_3.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-four')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_4.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-five')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_5.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-six')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_6.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-seven')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_7.png') }}"
                                            alt="">
                                    @elseif (optional($bar_code->virtualCard)->virtual_card_template == 'virtual-card-eight')
                                        <img class="img-fluid w-50px"
                                            src="{{ asset('frontend/images/virtual_card/virtual_card_8.png') }}"
                                            alt="">
                                    @endif
                                </td>
                                <td>
                                    <div class="text-success">{{ optional($bar_code->nfcData)->first_name }}
                                        {{ optional($bar_code->nfcData)->last_name }}
                                    </div>
                                </td>
                                {{-- <td>
                                    <button class="btn btn-light-primary">94</button>
                                </td> --}}
                                <td>
                                    <a href="{{ $bar_code->nfc_url }}" target="_blank" class="text-primary">
                                        <button class="btn btn-sm btn-info">NFC <i
                                                class="fas fa-link ps-2"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#virtual_card_modal_{{ $bar_code->id }}" class="text-primary">
                                        <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                            CARD</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#shipping_address_modal_{{ $bar_code->id }}"
                                        class="text-primary">
                                        <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                            Shipping</button>
                                    </a>
                                </td>
                                <td class="pe-0 text-center">
                                    <a href="#" class="btn btn-light-primary btn-active-light-primary btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-flip="top-end">
                                        Actions
                                        <span class="svg-icon fs-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                        fill="currentColor" fill-rule="nonzero"
                                                        transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                        data-kt-menu="true" style="">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            {{-- <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#message_modal_{{ $bar_code->id }}">
                                                All messages
                                            </a> --}}
                                            <a href="{{ route('admin.nfc-card.show', $bar_code->code) }}"
                                                class="menu-link px-3">
                                                All messages
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.nfc-card.edit', $bar_code->code) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        {{-- <div class="menu-item px-3">
                                            <a href="{{ route('admin.nfc-card.destroy', $bar_code->id) }}"
                                                class="menu-link px-3 delete">
                                                Delete
                                            </a>
                                        </div> --}}
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@push('scripts')
    <script>
        "use strict";

        // Class definition
        var KTDatatablesExample = function() {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function() {
                // Check if the DataTable is already initialized
                if ($.fn.DataTable.isDataTable(table)) {
                    // Destroy the existing instance
                    $(table).DataTable().destroy();
                }

                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                        .format(); // select date from 4th column in table
                    dateRow[3].setAttribute('data-order', realDate);
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10,
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function(e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Public methods
            return {
                init: function() {
                    table = document.querySelector('#bar_code_admin_admin');

                    if (!table) {
                        return;
                    }

                    initDatatable();
                    exportButtons();
                    handleSearchDatatable();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTDatatablesExample.init();
        });
    </script>
@endpush