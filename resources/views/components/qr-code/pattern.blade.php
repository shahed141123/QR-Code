@props([
    'patterns' => [],
    'selectedQrPattern' => null, // Default to null if not provided
])

@foreach ($patterns as $pattern)
<div class="col-lg-2 pt-5">
    <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start py-5 px-3 mb-6">
        <div class="d-flex align-items-center">
            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                <input class="form-check-input" type="radio" name="qr_pattern" value="{{ $pattern['value'] }}" @checked($pattern['value'] == $selectedQrPattern)/>
            </div>
            <div class="flex-grow-1">
                <div class="fw-bold">
                    <img class="img-fluid" src="{{ $pattern['image'] }}" alt="" />
                </div>
            </div>
        </div>
    </label>
</div>
@endforeach
