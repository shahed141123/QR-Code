<x-admin-app-layout :title="'NFC Templates'">
    <div class="row">
        <h3 class="text-center py-10">All NFC Templates</h3>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/images/nfc_template/template_one.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/images/nfc_template/template_two.png') }}"
                        alt="Second Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid"
                        src="https://www.goflixza.com/frontend/assets/images/nfc-templates/template_three.jpeg"
                        alt="Third Template">
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid"
                        src="https://www.goflixza.com/frontend/assets/images/nfc-templates/template_four.jpg"
                        alt="Fourth Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid"
                        src="https://www.goflixza.com/frontend/assets/images/nfc-templates/template_five.jpg"
                        alt="Fifth Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid"
                        src="https://www.goflixza.com/frontend/assets/images/nfc-templates/template_six.jpg"
                        alt="Sixth Template">
                </div>
            </div>
        </div> --}}
    </div>
</x-admin-app-layout>
