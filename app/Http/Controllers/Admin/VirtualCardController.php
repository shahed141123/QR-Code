<?php

namespace App\Http\Controllers\Admin;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Invoice;
use App\Models\VirtualCard;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Admin\NfcShippingDetails;

class VirtualCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();
        $nfc_cards = $isUserRoute
            ? NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->where('user_id', $user->id)->latest('id')->get()
            : NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->latest('id')->get();

        $view = $isUserRoute ? 'user.pages.virtualCard.index' : 'admin.pages.virtualCard.index';

        return view($view, [
            'nfc_cards' => $nfc_cards,
        ]);
        // return view('user.pages.virtualCard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $data = [
            'nfc_cards' => NfcCard::with('nfcData')->where('user_id', $user->id)->latest('id')->get(),
        ];
        return view('user.pages.virtualCard.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            // Set Stripe API key
            // Stripe::setApiKey(env('STRIPE_SECRET'));

            // // Create charge
            // $charge = Charge::create([
            //     "amount" => 4999, // Amount in cents
            //     "currency" => "usd",
            //     "source" => $request->stripeToken,
            //     "description" => "NFC Card Payment"
            // ]);

            // // Create invoice
            // $invoice = Invoice::create([
            //     'customer' => $charge->customer,
            //     'billing' => 'send_invoice',
            //     // 'due_date' => now()->addDays(30)->timestamp,
            // ]);

            // // Send invoice through email
            // $email = $request->customer_email; // Use card_email field for sending invoice
            // Mail::send('emails.invoice', ['invoice' => $invoice], function ($message) use ($email) {
            //     $message->to($email)->subject('NFC Card Payment Invoice');
            // });
            $nfc = NfcCard::find($request->card_id);
            $code = $nfc->code;
            // Handle file uploads
            $files = [
                'card_logo'           => $request->file('card_logo'),
                'card_bg_front'       => $request->file('card_bg_front'),
                'card_bg_back'        => $request->file('card_bg_back'),
            ];

            $filePath = 'public/nfc/';
            $uploadedFiles = [];

            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $uploadedFiles[$key] = customUpload($file, $filePath, $code . '_' . $key);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        throw new \Exception("Error uploading file: " . $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create VirtualCard
            VirtualCard::create([
                'card_id'               => $request->card_id,
                'virtual_card_template' => $request->virtual_card_template,
                'card_logo'             => $uploadedFiles['card_logo']['status'] == 1 ? $uploadedFiles['card_logo']['file_name'] : null,
                'card_bg_front'         => $uploadedFiles['card_bg_front']['status'] == 1 ? $uploadedFiles['card_bg_front']['file_name'] : null,
                'card_bg_back'          => $uploadedFiles['card_bg_back']['status'] == 1 ? $uploadedFiles['card_bg_back']['file_name'] : null,
                'card_name'             => $request->card_name,
                'card_designation'      => $request->card_designation,
                'card_phone'            => $request->card_phone,
                'card_email'            => $request->card_email,
                'card_address'          => $request->card_address,
                'card_font_color'       => $request->card_font_color,
                'card_font_style'       => $request->card_font_style,
            ]);

            // Create NfcShippingDetails
            NfcShippingDetails::create([
                'card_id'              => $request->card_id,
                'shipping_name'        => $request->shipping_name,
                'shipping_phone'       => $request->shipping_phone,
                'shipping_address'     => $request->shipping_address,
                'shipping_city'        => $request->shipping_city,
                'shipping_state'       => $request->shipping_state,
                'shipping_zip_code'    => $request->shipping_zip_code,
                'shipping_country'     => $request->shipping_country,
                'shipping_instruction' => $request->shipping_instruction,
            ]);

            session()->forget('error');
            $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
            if ($isUserRoute) {
                return redirect()->route('user.nfc-card.index')->with('success', 'NFC Created successfully.');
            } else {
                return redirect()->route('admin.nfc-card.index')->with('success', 'NFC Created successfully.');
            }
        } catch (\Exception $e) {
            // Handle exceptions here
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
