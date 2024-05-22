{{-- Website Form Start --}}

<div class="form-container" id="website-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Website Form</h2>
        <p class="text-center mb-0">Paste a URL below to link with your QR code.</p>
    </div>
    <div class="row pt-4">
        <div class="mb-4">
            <x-metronic.label for="qr_data_website_url"
                class="form-label required">{{ __('Website Url') }}</x-metronic.label>
            <x-metronic.input id="qr_data_website_url" type="text" name="qr_data_website_url"
                placeholder="Website Url" />
        </div>
    </div>
</div>





{{-- PDF Form Start --}}
<div class="form-container" id="pdf-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">PDF Form</h2>
        <p class="text-center mb-0">Upload Your PDF File Here For QR Code.</p>
    </div>
    <div class="row pt-4">
        <div class="d-flex align-items-center">
            <x-metronic.label for="qr_data_pdf" class="form-label">{{ __('Upload Pdf') }}</x-metronic.label>
            <x-metronic.input id="qr_data_pdf" type="file" name="qr_data_pdf" :value="old('qr_data_pdf')"
                placeholder="Upload Pdf" />
        </div>
    </div>
</div>
{{-- Image Form Start --}}
<div class="form-container" id="image-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Image Form</h2>
        <p class="text-center mb-0">Upload Your Image or Link Here For QR Code.</p>
    </div>
    <div class="row pt-4">
        <div class="d-flex align-items-center">
            <x-metronic.label for="qr_data_image" class="form-label">{{ __('Upload Image') }}</x-metronic.label>
            <x-metronic.input id="qr_data_image" type="file" name="qr_data_image" :value="old('qr_data_image')"
                placeholder="Upload Image" />
        </div>
        <div class="pt-4">
            <x-metronic.label for="qr_data_image_link"
                class="form-label">{{ __('Or Upload Image Link') }}</x-metronic.label>
            <x-metronic.input id="qr_data_image_link" type="text" name="qr_data_image_link" :value="old('qr_data_image_link')"
                placeholder="Or Upload Image Link" />
        </div>
    </div>
</div>
{{-- SMS Form Start --}}
<div class="form-container" id="sms-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">SMS information</h2>
        <p class="text-center mb-0">Specify details of the text (SMS) to link your QR code to.</p>
    </div>
    <div class="row pt-4">
        <div class="pt-4">
            <x-metronic.label for="qr_data_sms_number"
                class="required form-label">{{ __('Phone Number') }}</x-metronic.label>
            <x-metronic.input id="qr_data_sms_number" type="text" name="qr_data_sms_number" :value="old('qr_data_sms_number')"
                placeholder="Phone Number" required />
        </div>
        <div class="pt-4">
            <label for="qr_data_sms_message" class="required form-label">Message</label>
            <textarea class="form-control form-control-solid" name="qr_data_sms_message" id="qr_data_sms_message" rows="3"
                required></textarea>
        </div>
    </div>
</div>
{{-- Email Form Start --}}
<div class="form-container" id="email-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Email information</h2>
        <p class="text-center mb-0">Specify details of the email message to link your QR code to.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_data_email_id"
                class="required form-label">{{ __('Receiver Email') }}</x-metronic.label>
            <x-metronic.input id="qr_data_email_id" type="text" name="qr_data_email_id" :value="old('qr_data_email_id')"
                placeholder="sample@mail.com" required />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_email_subject"
                class="form-label">{{ __('Email Subject') }}</x-metronic.label>
            <x-metronic.input id="qr_data_email_subject" type="text" name="qr_data_email_subject" :value="old('qr_data_email_subject')"
                placeholder="Email Subject" />
        </div>
        <div class="pb-4">
            <label for="qr_data_email_body" class="required form-label">Mail Body</label>
            <textarea class="form-control form-control-solid" name="qr_data_email_body" id="qr_data_email_body" rows="3"
                required></textarea>
        </div>
    </div>
</div>
{{-- Mobile App Form Start --}}
<div class="form-container" id="mobile_app-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Mobile App</h2>
        <p class="text-center mb-0">Redirect to app download or in-app pages for Android and iOS users.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_app_android"
                class="form-label">{{ __('Google Play store URL') }}</x-metronic.label>
            <x-metronic.input id="qr_app_android" type="text" name="qr_app_android" :value="old('qr_app_android')"
                placeholder="Google Play store URL" />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_app_iphone"
                class="form-label">{{ __('App store URL (iPhone)') }}</x-metronic.label>
            <x-metronic.input id="qr_data_app_iphone" type="text" name="qr_data_app_iphone" :value="old('qr_data_app_iphone')"
                placeholder="App store URL (iPhone)" />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_app_ipad"
                class="form-label">{{ __('App store URL (iPad and macOS)') }}</x-metronic.label>
            <x-metronic.input id="qr_data_app_ipad" type="text" name="qr_data_app_ipad" :value="old('qr_data_app_ipad')"
                placeholder="App store URL (iPad and macOS)" />
        </div>
    </div>
</div>
{{-- call Form Start --}}
<div class="form-container" id="call-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Call Information</h2>
        <p class="text-center mb-0">Specify details of the phone number to link your QR code to.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_data_call_number"
                class="form-label">{{ __('Phone Number') }}</x-metronic.label>
            <x-metronic.input id="qr_data_call_number" type="text" name="qr_data_call_number" :value="old('qr_data_call_number')"
                placeholder="Phone Number" />
        </div>
    </div>
</div>
{{-- location Form Start --}}
<div class="form-container" id="location-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Choose location</h2>
        <p class="text-center mb-0">Choose a location to link to your QR code.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_data_location_latitude"
                class="form-label">{{ __('Select Location Latitude') }}</x-metronic.label>
            <x-metronic.input id="qr_data_location_latitude" type="text" name="qr_data_location_latitude"
                :value="old('qr_data_location_latitude')" placeholder="Select Latitude" />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_location_longitude"
                class="form-label">{{ __('Select Location Longitude') }}</x-metronic.label>
            <x-metronic.input id="qr_data_location_longitude" type="text" name="qr_data_location_longitude"
                :value="old('qr_data_location_longitude')" placeholder="Select Longitude" />
        </div>
        <div class="mt-2">
            <div id="map" style="height: 400px;"></div>
        </div>
    </div>
</div>

{{-- Coupon Form Start --}}
<div class="form-container" id="coupon_code-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Coupon Code</h2>
        <p class="text-center mb-0">Create Coupon Code.</p>
    </div>
    <div class="pb-4 row">
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_header" class="form-label">{{ __('Header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_header" type="text" name="qr_data_coupon_header"
                :value="old('qr_data_coupon_header')" placeholder="30% Discount" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_message"
                class="form-label">{{ __('Message Line One') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_message" type="text" name="qr_data_coupon_message"
                :value="old('qr_data_coupon_message')" placeholder="Big Sale" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_description_body"
                class="form-label">{{ __('Message Line Two') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_description_body" type="text"
                name="qr_data_coupon_description_body" :value="old('qr_data_coupon_description_body')" placeholder="Discount" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_company"
                class="form-label">{{ __('Company Name') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_company" type="text" name="qr_data_coupon_company"
                :value="old('qr_data_coupon_company')" placeholder="GALAXXY MEDIA LLC." />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_code" class="form-label">{{ __('Coupon code') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_code" type="text" name="qr_data_coupon_code" :value="old('qr_data_coupon_code')"
                placeholder="Coupon code" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_logo" class="form-label">{{ __('Coupon Logo') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_logo" type="file" name="qr_data_coupon_logo" :value="old('qr_data_coupon_logo')"
                placeholder="Coupon Logo" />
        </div>

        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_expire_date"
                class="form-label">{{ __('Expires on') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_expire_date" type="date" name="qr_data_coupon_expire_date"
                :value="old('qr_data_coupon_expire_date')" placeholder="Expires on" />
        </div>

        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_description_header"
                class="form-label">{{ __('Description header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_description_header" type="text"
                name="qr_data_coupon_description_header" :value="old('qr_data_coupon_description_header')" placeholder="Holiday Season Sale" />
        </div>

        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_coupon_website"
                class="form-label">{{ __('Website URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_website" type="url" name="qr_data_coupon_website"
                :value="old('qr_data_coupon_website')" placeholder="http://www.website.com" />
        </div>

        <div class="col-lg-4 pb-4">
            <div class="row">
                <label for="secondary_color_text">Background color</label>
                <div class="col-lg-10 pe-0">
                    <div>
                        <input type="text" name="background_color_picker" id="secondary_color_text"
                            value="#000" class="form-control form-control-solid">
                    </div>
                </div>
                <div class="col-lg-2 ps-0">
                    <div>
                        <input type="color" name="qr_data_coupon_background_color" id="secondary_color_text_picker"
                            value="" style="width: 50px;height: 43px;" oninput="changecouponBackgroundColor()"
                            class="form-control form-control-solid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-4">
            <div class="row">
                <label for="secondary_color_text">Title color (With BG Include)</label>
                <div class="col-lg-10 pe-0">
                    <div>
                        <input type="text" name="title_color_picker" id="secondary_color_text" value="#000"
                            class="form-control form-control-solid">
                    </div>
                </div>
                <div class="col-lg-2 ps-0">
                    <div>
                        <input type="color" name="qr_data_coupon_title_color" id="secondary_color_text_picker"
                            value="" style="width: 50px;height: 43px;" oninput="changecouponTitleColor()"
                            class="form-control form-control-solid">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-4">
            <div class="row">
                <label for="buttonContact">Website Button Background Color</label>
                <div class="col-lg-10 pe-0">
                    <div>
                        <input type="text" name="buttonContact" id="buttonContact" value="#000"
                            class="form-control form-control-solid">
                    </div>
                </div>
                <div class="col-lg-2 ps-0">
                    <div>
                        <input type="color" name="qr_data_coupon_button_bg_color" id="button_color_picker"
                            value="" style="width: 50px;height: 43px;" oninput="changecouponwebsiteBgColor()"
                            class="form-control form-control-solid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-4">
            <div class="row">
                <label for="buttonContact">Website Button Title Color</label>
                <div class="col-lg-10 pe-0">
                    <div>
                        <input type="text" name="buttonContact" id="buttonContact" value="#000"
                            class="form-control form-control-solid">
                    </div>
                </div>
                <div class="col-lg-2 ps-0">
                    <div>
                        <input type="color" name="qr_data_coupon_button_title_color" id="button_color_picker"
                            value="" style="width: 50px;height: 43px;"
                            oninput="changecouponwebsiteTitleColor()" class="form-control form-control-solid">
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 col-lg-8">
            <x-metronic.label for="qr_data_coupon_policy"
                class="form-label">{{ __('Terms & conditions') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_policy" type="text" name="qr_data_coupon_policy"
                :value="old('qr_data_coupon_policy')" placeholder="Policy" />
        </div>

    </div>
</div>

{{-- Social Form Start --}}
<div class="form-container" id="social-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Social Media</h2>
        <p class="text-center mb-0">Link to your social media channels for more engagement.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_social_logo" class="form-label">{{ __('Logo') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_logo" type="file" name="qr_data_social_logo" :value="old('qr_data_social_logo')"
                placeholder="social Logo" />
        </div>
        <div class="col-lg-1 d-lg-block d-sm-none">
            <div class="fv-row my-3 pt-5">
                <div>
                    <img width="50px" height="50px" class="rounded-circle border banner_image"
                        id="profile_image_preview" src="https://i.ibb.co/BNBTVN4/logo.png" alt="">
                </div>
            </div>
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_social_header" class="form-label">{{ __('Header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_header" type="text" name="qr_data_social_header"
                :value="old('qr_data_social_header')" placeholder="Folow Us On !" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_social_title" class="form-label">{{ __('Title') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_title" type="text" name="qr_data_social_title" :value="old('qr_data_social_title')"
                placeholder="My Social Platform" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_social_message"
                class="form-label">{{ __('Body Message') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_message" type="text" name="qr_data_social_message"
                :value="old('qr_data_social_message')"
                placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, commodi!" />
        </div>

        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_social_background_image"
                class="form-label">{{ __('Background Image') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_background_image" type="file"
                name="qr_data_social_background_image" :value="old('qr_data_social_background_image')" placeholder="Social background image" />
        </div>
        <div class="col-lg-1 d-lg-block d-sm-none">
            <div class="fv-row my-3 pt-5">
                <div>
                    <img width="50px" height="50px" class="rounded-circle border banner_image"
                        id="profile_image_preview" src="https://i.ibb.co/BNBTVN4/logo.png" alt="">
                </div>
            </div>
        </div>

        {{-- <div class="pb-4 col-lg-6">
            <label for="exampleFormControlInput1" class="required form-label">Title</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
        </div>
        <div class="col-lg-6 pb-4">
            <div class="row gx-0">
                <div class="col-lg-8">
                    <label for="exampleFormControlInput1" class="required form-label">Title Color</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
                </div>
                <div class="col-lg-2">
                    <label for="exampleFormControlInput1" class="required form-label"></label>
                    <input type="color" class="form-control form-control-solid" placeholder="Enter Title"
                        style="width: 135px;
                    height: 40px;" />
                </div>
            </div>
        </div> --}}

        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">LINKS</h2>
            <p class="text-center mb-0">At least one field is mandatory *</p>
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_facebook"
                class="form-label">{{ __('Facebook URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_facebook" type="url" name="qr_data_social_facebook"
                :value="old('qr_data_social_facebook')" placeholder="http://www.website.com" />
        </div>
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_instagram"
                class="form-label">{{ __('Instagram URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_instagram" type="url" name="qr_data_social_instagram"
                :value="old('qr_data_social_instagram')" placeholder="http://www.website.com" />
        </div>
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_linkedin"
                class="form-label">{{ __('Linkedin URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_linkedin" type="url" name="qr_data_social_linkedin"
                :value="old('qr_data_social_linkedin')" placeholder="http://www.website.com" />
        </div>
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_twitter"
                class="form-label">{{ __('Twitter URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_twitter" type="url" name="qr_data_social_twitter"
                :value="old('qr_data_social_twitter')" placeholder="http://www.website.com" />
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_youtube"
                class="form-label">{{ __('Youtube URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_youtube" type="url" name="qr_data_social_youtube"
                :value="old('qr_data_social_youtube')" placeholder="http://www.website.com" />
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_pinterest"
                class="form-label">{{ __('Pinterest URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_pinterest" type="url" name="qr_data_social_pinterest"
                :value="old('qr_data_social_pinterest')" placeholder="http://www.website.com" />
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_website"
                class="form-label">{{ __('Website URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_website" type="url" name="qr_data_social_website"
                :value="old('qr_data_social_website')" placeholder="http://www.website.com" />
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_whatsapp"
                class="form-label">{{ __('Whatsapp URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_whatsapp" type="url" name="qr_data_social_whatsapp"
                :value="old('qr_data_social_whatsapp')" placeholder="http://www.website.com" />
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_snapchat"
                class="form-label">{{ __('Snapchat URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_snapchat" type="url" name="qr_data_social_snapchat"
                :value="old('qr_data_social_snapchat')" placeholder="http://www.website.com" />
        </div>
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_social_tiktok"
                class="form-label">{{ __('Tiktok URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_social_tiktok" type="url" name="qr_data_social_tiktok"
                :value="old('qr_data_social_tiktok')" placeholder="http://www.website.com" />
        </div>


    </div>
</div>

{{-- Audio Form Start --}}
<div class="form-container" id="audio-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">MP3/Audio</h2>
        <p class="text-center mb-0">Upload MP3/Audio File</p>
    </div>
    <div class="pt-5 ps-5">
        <h2>Upload audio</h2>
        <p>Upload audio file that your QR code should link to.</p>
    </div>
    <div class="pb-4 row">
        <x-metronic.label for="qr_data_audio_file"
            class="form-label">{{ __('Audio File (mp3,web)') }}</x-metronic.label>
        <x-metronic.input id="qr_data_audio_file" type="file" name="qr_data_audio_file" :value="old('qr_data_audio_file')"
            placeholder="Audio File (mp3,web)" />
        <div class="pt-4 col-lg-6">
            <x-metronic.label for="qr_data_audio_link"
                class="form-label">{{ __('Or Paste Link Below') }}</x-metronic.label>
            <x-metronic.input id="qr_data_audio_link" type="url" name="qr_data_audio_link" :value="old('qr_data_audio_link')"
                placeholder="Audio File link" />
        </div>
    </div>
</div>

{{-- Business Page Form Start --}}
<div class="row form-container" id="business_page-form">
    <div class="row text-center justify-content-center mb-5">
        <h2 class="text-center mb-0">Business Page</h2>
        <p class="text-center mb-0">Share a Card For Your Business</p>
    </div>
    <div class="pb-4 row">
        <div class="pb-4 col-lg-12">
            <x-metronic.label for="qr_data_business_page_logo"
                class="form-label">{{ __('Company Logo') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_logo" type="file" name="qr_data_business_page_logo"
                :value="old('qr_data_business_page_logo')" placeholder="Company Logo" />
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_business_page_business_name"
                class="form-label">{{ __('Business Name') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_business_name" type="text"
                name="qr_data_business_page_business_name" :value="old('qr_data_business_page_business_name')" placeholder="GOFLIXZAS STORE" />
        </div>


        {{-- <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_business_page_header"
                class="form-label">{{ __('Header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_header" type="text" name="qr_data_business_page_header"
                :value="old('qr_data_business_page_header')" placeholder="Hour" />
        </div> --}}

        <div>
            <h6 class="fw-bold pt-5 mb-0">Schedule Info</h6>
        </div>
        <div class="col-lg-12">
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Monday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_monday" type="time"
                        name="qr_data_business_page_start_time_monday" :value="old('qr_data_business_page_start_time_monday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_monday" type="time"
                        name="qr_data_business_page_end_time_monday" :value="old('qr_data_business_page_end_time_monday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Tuesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_tuesday" type="time"
                        name="qr_data_business_page_start_time_tuesday" :value="old('qr_data_business_page_start_time_tuesday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_tuesday" type="time"
                        name="qr_data_business_page_end_time_tuesday" :value="old('qr_data_business_page_end_time_tuesday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Wednesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_wednesday" type="time"
                        name="qr_data_business_page_start_time_wednesday" :value="old('qr_data_business_page_start_time_wednesday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_wednesday" type="time"
                        name="qr_data_business_page_end_time_wednesday" :value="old('qr_data_business_page_end_time_wednesday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Thursday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_thursday" type="time"
                        name="qr_data_business_page_start_time_thursday" :value="old('qr_data_business_page_start_time_thursday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_thursday" type="time"
                        name="qr_data_business_page_end_time_thursday" :value="old('qr_data_business_page_end_time_thursday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Friday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_friday" type="time"
                        name="qr_data_business_page_start_time_friday" :value="old('qr_data_business_page_start_time_friday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_friday" type="time"
                        name="qr_data_business_page_end_time_friday" :value="old('qr_data_business_page_end_time_friday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Saturday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_saturday" type="time"
                        name="qr_data_business_page_start_time_saturday" :value="old('qr_data_business_page_start_time_saturday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_saturday" type="time"
                        name="qr_data_business_page_end_time_saturday" :value="old('qr_data_business_page_end_time_saturday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-lg-3">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            Sunday
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_start_time_sunday" type="time"
                        name="qr_data_business_page_start_time_sunday" :value="old('qr_data_business_page_start_time_sunday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
                <div class="col-lg-4">
                    <x-metronic.input id="qr_data_business_page_end_time_sunday" type="time"
                        name="qr_data_business_page_end_time_sunday" :value="old('qr_data_business_page_end_time_sunday')"
                        placeholder="Audio File (mp3,web)" />
                </div>
            </div>
        </div>

        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_business_page_website"
                class="form-label">{{ __('Website URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_website" type="url" name="qr_data_business_page_website"
                :value="old('qr_data_business_page_website')" placeholder="http://www.website.com" />
        </div>

        {{-- <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_business_page_business_email"
                class="form-label">{{ __('Business Email') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_business_email" type="text" name="qr_data_business_page_business_email"
                :value="old('qr_data_business_page_business_email')" placeholder="example@example.com" />
        </div> --}}
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_business_page_business_phone"
                class="form-label">{{ __('Business Phone') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_business_phone" type="text"
                name="qr_data_business_page_business_phone" :value="old('qr_data_business_page_business_phone')" placeholder="01754*****0" />
        </div>
        {{-- <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_business_page_business_location"
                class="form-label">{{ __('Business Location') }}</x-metronic.label>
            <x-metronic.input id="qr_data_business_page_business_location" type="text" name="qr_data_business_page_business_location"
                :value="old('qr_data_business_page_business_location')" placeholder="Business Location" />
        </div> --}}





        {{-- <div>
            <h6 class="fw-bold pt-5 mb-0">Brand Info</h6>
        </div>
        <div class="pt-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Brand Logo</label>
            <x-metronic.label for="qr_data_image" class="form-label">{{ __('Upload Image') }}</x-metronic.label>
            <x-metronic.input id="qr_data_image" type="file" name="qr_data_image" :value="old('qr_data_image')"
                placeholder="Upload Image" />
        </div>
        <div class="pt-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Brand Image</label>
            <x-metronic.label for="qr_data_image" class="form-label">{{ __('Upload Image') }}</x-metronic.label>
            <x-metronic.input id="qr_data_image" type="file" name="qr_data_image" :value="old('qr_data_image')"
                placeholder="Upload Image" />
        </div> --}}
    </div>
</div>

{{-- Restaurant Form --}}
<div class="form-container" id="restaurant-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Restaurant Form</h2>
        <p class="text-center mb-0">Upload Your Menu Items For Generate QR Code</p>
    </div>
    <div class="pb-4 row">
        <div class="card card-flush h-xl-100">
            <div class="card-body pt-6">
                <ul class="nav nav-pills nav-pills-custom mb-3 d-flex justify-content-center align-items-center">
                    <li class="nav-item mb-3 me-3 me-lg-6">
                        <a href="#"
                            class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                            data-bs-toggle="modal" data-bs-target="#modalId">
                            <div class="nav-icon mb-3">
                                <i class="far fa-plus-square fs-1"></i>
                            </div>
                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Create Category </span>
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        </a>
                    </li>
                    <li class="nav-item mb-3 me-3 me-lg-6">
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                            id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#category">
                            <div class="nav-icon mb-3">
                                <i class="far fa-clone fs-1"></i>
                            </div>
                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Category </span>
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        </a>
                    </li>
                    <li class="nav-item mb-3 me-3 me-lg-6">
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#brandingMain">
                            <div class="nav-icon mb-3">
                                <i class="fas fa-paint-brush fs-1"></i>
                            </div>

                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Branding </span>

                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="category">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul
                                    class="nav nav-pills nav-pills-custom mb-3 row mt-10">
                                    <li class="nav-item mb-3 col-lg-2">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden"
                                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#brandingChild">
                                            <div class="text-end">
                                                <i class="fa-solid fa-pen-to-square text-primary" data-bs-toggle="modal" data-bs-target="#modalId"></i>
                                                <i class="fa-solid fa-trash text-danger" data-bs-toggle="modal" data-bs-target="#modalId"></i>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid" width="50px"
                                                    src="https://d3nvy39jvu7woe.cloudfront.net/static/images/restaurantmenu/dinner.png"
                                                    alt="">
                                            </div>
                                            <div class="p-2 text-center">
                                                <p class="mb-0 fw-bolder text-black">Dinner</p>
                                                <small style="font-size: 10px">06:00pm - 11:00pm</small> <br>
                                                <small>All Week</small>
                                            </div>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 col-lg-2">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden"
                                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#branding2Child">
                                            <div class="text-end">
                                                <i class="fa-solid fa-pen-to-square text-primary" data-bs-toggle="modal" data-bs-target="#modalId"></i>
                                                <i class="fa-solid fa-trash text-danger" data-bs-toggle="modal" data-bs-target="#modalId"></i>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid" width="50px"
                                                    src="https://d3nvy39jvu7woe.cloudfront.net/static/images/restaurantmenu/dinner.png"
                                                    alt="">
                                            </div>
                                            <div class="p-2 text-center">
                                                <p class="mb-0 fw-bolder text-black">Sweet</p>
                                                <small style="font-size: 10px">06:00pm - 11:00pm</small> <br>
                                                <small>All Week</small>
                                            </div>
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="brandingChild">
                                        <div class="col-lg-10">
                                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Upload Menu PDF</span></label>
                                                <input type="file" class="form-control form-control-lg form-control-solid"
                                                    name="name" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="branding2Child">
                                        <div class="col-lg-10">
                                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Upload Menu PDF</span></label>
                                                <input type="file" class="form-control form-control-lg form-control-solid"
                                                    name="name" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="brandingMain">
                        <div>
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Upload Logo</span></label>
                                            <input type="file" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">Preview</label>
                                            <img class="img-fluid rouded-crirlce " width="50px"
                                                src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Resturent Name</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="Goflixza">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Desctioption</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="About Your Resturent">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Phone</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="01*****">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Location</label>
                                            <input type="url" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="https://www.goflixza.com/">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Create Category Modal Start --}}
        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <form action="" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Create New Category
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Upload Icons</span></label>
                                        <input type="file" class="form-control form-control-lg form-control-solid"
                                            name="name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2"></label>
                                        <img class="img-fluid"
                                            src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Category Name</span></label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="name" placeholder="Lunch, Dinner, Snacks etc">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div data-kt-buttons="true"
                                        style="display: flex;
                                    justify-content: space-between;
                                    gap: 20px;">
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                                            <div class="d-flex align-items-center me-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                    <input class="form-check-input" type="radio" name="plan"
                                                        value="startup" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h2 class="d-flex align-items-center fs-6 fw-bold flex-wrap">
                                                        Available All Day
                                                    </h2>
                                                </div>
                                            </div>
                                        </label>

                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                                            <div class="d-flex align-items-center me-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                    <input class="form-check-input" type="radio" name="plan"
                                                        checked="checked" value="advanced" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h2 class="d-flex align-items-center fs-6 fw-bold flex-wrap">
                                                        Available All Week
                                                    </h2>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 text-primary ">
                                    {{-- <i class="fa-solid fa-plus-square fs-3 accordion-icon-off"></i> --}}
                                    <div class="accordion" id="kt_accordion_1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                                <button class="accordion-button fs-4 fw-semibold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#kt_accordion_1_body_3" aria-expanded="false"
                                                    aria-controls="kt_accordion_1_body_3">
                                                    Schedule a Time Range
                                                </button>
                                            </h2>
                                            <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                                aria-labelledby="kt_accordion_1_header_3"
                                                data-bs-parent="#kt_accordion_1">
                                                <div class="accordion-body row">
                                                    <p class="text-muted">Set a start and end date for this category
                                                    </p>
                                                    <div class="col-lg-6">
                                                        <label for="start" class="text-muted">Start</label>
                                                        <input type="time" name="start" id=""
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="" placeholder="Start">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="end" class="text-muted">End</label>
                                                        <input type="time" name="end" id=""
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="" placeholder="end">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Create Category Modal End --}}
    </div>
</div>
{{-- Facebook Page Form --}}
<div class="form-container" id="facebook_page-form">
    <div class="row text-center justify-content-center mb-5">
        <h2 class="text-center mb-0">Facebook Form</h2>
        <p class="text-center mb-0">Upload audio file that your QR code should link to.</p>
    </div>
    <div class="pb-4 row">
        <div class="pb-4 col-lg-10">
            <x-metronic.label for="qr_data_facebook_page_logo"
                class="form-label">{{ __('Logo') }}</x-metronic.label>
            <x-metronic.input id="qr_data_facebook_page_logo" type="file" name="qr_data_facebook_page_logo"
                :value="old('qr_data_facebook_page_logo')" placeholder="facebook_page Logo" />
        </div>
        {{-- <div class="col-lg-2 d-lg-block d-sm-none">
            <div class="fv-row my-3 pt-5">
                <div>
                    <img width="50px" height="50px" class="rounded-circle border banner_image"
                        id="profile_image_preview" src="https://i.ibb.co/BNBTVN4/logo.png" alt="">
                </div>
            </div>
        </div> --}}
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_facebook_page_header"
                class="form-label">{{ __('Header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_facebook_page_header" type="text" name="qr_data_facebook_page_header"
                :value="old('qr_data_facebook_page_header')" placeholder="Folow Us On !" />
        </div>
        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_facebook_page_title"
                class="form-label">{{ __('Title') }}</x-metronic.label>
            <x-metronic.input id="qr_data_facebook_page_title" type="text" name="qr_data_facebook_page_title"
                :value="old('qr_data_facebook_page_title')" placeholder="My facebook_page Platform" />
        </div>

        <div class="pb-4 col-lg-4">
            <x-metronic.label for="qr_data_facebook_page_facebook"
                class="form-label">{{ __('Facebook Page URL') }}</x-metronic.label>
            <x-metronic.input id="qr_data_facebook_page_facebook" type="url"
                name="qr_data_facebook_page_facebook" :value="old('qr_data_facebook_page_facebook')" placeholder="http://www.website.com" />
        </div>

        <div class="pb-4 col-lg-10">
            <x-metronic.label for="qr_data_facebook_page_background_image"
                class="form-label">{{ __('Banner Image') }}</x-metronic.label>
            <x-metronic.input id="qr_data_facebook_page_background_image" type="file"
                name="qr_data_facebook_page_background_image" :value="old('qr_data_facebook_page_background_image')"
                placeholder="facebook_page background image" />
        </div>

        {{-- <div class="col-lg-2 d-lg-block d-sm-none">
            <div class="fv-row my-3 pt-5">
                <div>
                    <img width="50px" height="50px" class="rounded-circle border banner_image"
                        id="profile_image_preview" src="https://i.ibb.co/BNBTVN4/logo.png" alt="">
                </div>
            </div>
        </div> --}}
    </div>
</div>
