<x-app-layout :title="'QR Code List - User Panel'">
    <div class="row">
        <div class="col-lg-12">
            <div class="card my-10 rounded-0">
                <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                    <div>
                        <h1 class="mb-0 mt-0 card-title fs-2 text-white">All QR List!</h1>
                        <div class="text-white fw-bold d-flex  pt-2">
                            @if (!empty($subscription->plan))
                                <strong class="mb-2"> Total Created QR: {{ $qrs->count() }} <span
                                        class="text-warning">/</span> QR Limitation:
                                    {{ $subscription->plan->qr }} <span class="text-warning">/</span> QR Remaining:
                                    {{ $subscription->plan->qr - $qrs->count() }} <span
                                        class="text-warning">/</span>Total Created QR: {{ $qrs->count() }}
                                </strong>
                            @else
                                <strong class="mb-2">Total Created QR: {{ $qrs->count() }} <span
                                        class="text-warning">/</span>
                                    QR Limitation: 10 (Trial Period) <span class="text-warning">/</span> QR Remaining:
                                    {{ 10 - $qrs->count() }}</strong>
                            @endif
                        </div>
                    </div>
                    <div>
                        @if (!empty($subscription->plan))
                            @if ($subscription->plan->qr - $qrs->count() > 0)
                                <a href="{{ route('user.qr-code.create') }}"
                                    class="btn btn-white btn-active-light-warning text-hover-inverse-white">
                                    <i class="fa-solid fa-user-plus me-2"></i> Create QR Codes
                                </a>
                            @endif
                        @else
                            @if (10 - $qrs->count() > 0)
                                <a href="{{ route('user.qr-code.create') }}"
                                    class="btn btn-white btn-active-light-warning text-hover-inverse-white">
                                    <i class="fa-solid fa-user-plus me-2"></i> Create QR Codes
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="card-body p-0 rounded-0 px-3">
                    <table class="table my-datatable table-striped table-row-bordered mt-0">
                        <thead>
                            <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0"
                                id="qr_code_admin">
                                <th width="5%" class="text-center">SL</th>
                                <th width="10%">Image</th>
                                <th width="35%">Content</th>
                                <th width="15%">Type</th>
                                <th width="10%">Scaned</th>
                                <th width="10%">Status</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600" style="vertical-align: middle">
                            @foreach ($qrs as $qr)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <img class="img-fluid w-50px" src="{{ $qr->qr_png_url }}" alt="">
                                    </td>
                                    <td data-order="2022-03-10T14:40:00+05:00">
                                        {{-- title --}}
                                        <span><span class="fw-bold text-black">Title :
                                            </span>{{ $qr->qr_name }}</span><br>
                                        <span><span class="fw-bold text-black">Link :
                                            </span><a class="text-primary" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#image-{{ $qr->id }}">Go
                                                to
                                                Link</a></span><br>
                                        <span><span class="fw-bold text-black">Org :
                                            </span>{{ Auth::user()->name }}</span><br>
                                        <span><span class="fw-bold text-black">Created at
                                                :</span>:{{ $qr->created_at }}</span><br>
                                        <div class="modal fade" id="image-{{ $qr->id }}" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                                role="document">

                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary py-3">
                                                        <h5 class="modal-title text-white" id="modalTitleId">
                                                            Scan Generated QR
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-8 offset-lg-2 mx-auto">
                                                                <div>
                                                                    <img class="img-fluid" src="{{ $qr->qr_png_url }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-start">
                                        <button class="btn btn-light-primary">{{ ucfirst($qr->qr_type) }}</button>
                                    </td>
                                    <td class="text-start">
                                        <a href="{{ route('user.qr.summary', $qr->code) }}"
                                            class="btn btn-light-primary">{{ $qr->qrScan->count() }}</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <a href="{{ route('user.qr-code.edit', $qr->code) }}"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-flip="top-end">
                                            Download
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
                                            data-kt-menu="true ">
                                            @if (!empty($qr->qr_png))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_png_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        PNG
                                                    </a>
                                                </div>
                                            @endif

                                            @if (!empty($qr->qr_svg))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_svg_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        SVG
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_eps))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_eps_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        EPS
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_jpg))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_jpg_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        JPG
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_pdf))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_pdf_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        PDF
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
