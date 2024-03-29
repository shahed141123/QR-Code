<x-app-layout :title="'QR Code List'">
    <div class="row">
        <div class="col-lg-12 d-flex  justify-content-between align-items-center bg-white mb-6 p-3 rounded-2 ">
            <div>
                <h2>QR Codes</h2>
                <p class="mb-0">View and manage your QR Codes</p>
            </div>

            <div>
                <button type="button" class="btn btn-primary">
                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                    Create QR Codes
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 pt-0">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon fs-1 position-absolute ms-4">...</span>
                            <input type="text" data-kt-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
                        </div>
                        <div id="qr_code_1_export" class="d-none"></div>
                    </div>
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Export Report
                        </button>
                        <div id="qr_code_export_menu"
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="copy">
                                    Copy to clipboard
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="excel">
                                    Export as Excel
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="csv">
                                    Export as CSV
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                    Export as PDF
                                </a>
                            </div>
                        </div>

                        <div id="qr_code_buttons" class="d-none"></div>
                    </div>
                </div>
                <div class="card-body">
                    <table
                        class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                        id="qr_code">
                        <thead>
                            <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                                <th class="">SL</th>
                                <th class="">Image</th>
                                <th class="">Content</th>
                                <th class="">Type</th>
                                <th class="">Scaned</th>
                                <th class="">Status</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr class="odd">
                                <td>
                                    1
                                </td>
                                <td>
                                    <img class="img-fluid w-50px"
                                        src="https://b2024479.smushcdn.com/2024479/wp-content/uploads/2020/05/HelloTech-qr-code-1024x1024.jpg?lossy=1&strip=1&webp=1"
                                        alt="">
                                </td>
                                <td data-order="2022-03-10T14:40:00+05:00">
                                    {{-- title --}}
                                    <span><span class="fw-bold text-black">Title : </span>WEBSITE 27/03/2024</span><br>
                                    <span><span class="fw-bold text-black">Link :
                                        </span>https://qrcodes.pro/MpmtUh</span><br>
                                    <span><span class="fw-bold text-black">Org : </span>russel hossain</span><br>
                                    <span><span class="fw-bold text-black">Created at :</span>:March 27, 2024</span><br>
                                </td>
                                <td class="text-start">
                                    <button class="btn btn-light-primary">QR Code</button>
                                </td>
                                <td class="text-start">
                                    <button class="btn btn-light-primary">94</button>
                                </td>
                                <td>
                                    <div class="badge badge-light-success">Active</div>
                                </td>
                                <td class="pe-0">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-flip="top-end">
                                        Actions
                                        <span class="svg-icon fs-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                            <a href="#" class="menu-link px-3"
                                                data-kt-docs-table-filter="edit_row">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-docs-table-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>
                                    2
                                </td>
                                <td>
                                    <img class="img-fluid w-50px"
                                        src="https://b2024479.smushcdn.com/2024479/wp-content/uploads/2020/05/HelloTech-qr-code-1024x1024.jpg?lossy=1&strip=1&webp=1"
                                        alt="">
                                </td>
                                <td data-order="2022-03-10T14:40:00+05:00">
                                    {{-- title --}}
                                    <span><span class="fw-bold text-black">Title : </span>WEBSITE 27/03/2024</span><br>
                                    <span><span class="fw-bold text-black">Link :
                                        </span>https://qrcodes.pro/MpmtUh</span><br>
                                    <span><span class="fw-bold text-black">Org : </span>russel hossain</span><br>
                                    <span><span class="fw-bold text-black">Created at :</span>:March 27,
                                        2024</span><br>
                                </td>
                                <td class="text-start">
                                    <button class="btn btn-light-primary">Business Card</button>
                                </td>
                                <td class="text-start">
                                    <button class="btn btn-light-primary">20</button>
                                </td>
                                <td>
                                    <div class="badge badge-light-warning">Pending</div>
                                </td>
                                <td class="pe-0">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
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
                                            <a href="#" class="menu-link px-3"
                                                data-kt-docs-table-filter="edit_row">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-docs-table-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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

                // Hook export buttons
                var exportButtons = () => {
                    const documentTitle = 'Customer Orders Report';
                    var buttons = new $.fn.dataTable.Buttons(table, {
                        buttons: [{
                                extend: 'copyHtml5',
                                title: documentTitle
                            },
                            {
                                extend: 'excelHtml5',
                                title: documentTitle
                            },
                            {
                                extend: 'csvHtml5',
                                title: documentTitle
                            },
                            {
                                extend: 'pdfHtml5',
                                title: documentTitle
                            }
                        ]
                    }).container().appendTo($('#qr_code_buttons'));

                    // Hook dropdown menu click event to datatable export buttons
                    const exportButtons = document.querySelectorAll(
                        '#qr_code_export_menu [data-kt-export]');
                    exportButtons.forEach(exportButton => {
                        exportButton.addEventListener('click', e => {
                            e.preventDefault();

                            // Get clicked export value
                            const exportValue = e.target.getAttribute('data-kt-export');
                            const target = document.querySelector('.dt-buttons .buttons-' +
                                exportValue);

                            // Trigger click event on hidden datatable export buttons
                            target.click();
                        });
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
                        table = document.querySelector('#qr_code');

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
</x-app-layout>
