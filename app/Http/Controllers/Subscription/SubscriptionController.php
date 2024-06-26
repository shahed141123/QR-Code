<?php

namespace App\Http\Controllers\Subscription;

use App\Models\Admin\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    // $data['subscriptions'] = Subscription::with('plan', 'user')->get();
    public function index()
    {
        // Fetch all subscriptions with their associated plan and user
        $subscriptions = Subscription::with('plan', 'user')->get();

        // Initialize an array to hold the subscriptions with invoices
        $subscriptionsWithInvoices = [];

        // Loop through each subscription to fetch its invoices through the user
        foreach ($subscriptions as $subscription) {
            // Ensure the subscription has an associated user
            if ($subscription->user) {
                // Fetch the invoices for the user associated with the current subscription
                $invoices = $subscription->user->invoices();

                // Add the subscription and its invoices to the array
                $subscriptionsWithInvoices[] = [
                    'subscription' => $subscription,
                    'invoices' => $invoices,
                ];
            } else {
                // Add the subscription with an empty invoices collection if no user is associated
                $subscriptionsWithInvoices[] = [
                    'subscription' => $subscription,
                    'invoices' => collect(), // Empty collection
                ];
            }
        }

        // Pass the data to the view
        $data['subscriptionsWithInvoices'] = $subscriptionsWithInvoices;

        return view('admin.pages.user-subscription.index', $data);
    }


    public function showSubscriptionForm()
    {
        $data = [
            'monthly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'yearly')->get(),
        ];
        return view('frontend.pages.subscription_plan', $data);
    }

    public function subscribe(Request $request, $id)
    {

        $data['plan'] = Plan::where('slug', $id)->first();
        $data['intent'] = auth()->user()->createSetupIntent();
        // return view("frontend.pages.subscribe", $data);
        return view("user.pages.subscription.subscribe", $data);
    }



    public function subscription(Request $request)
    {
        // dd($request->all());
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($plan->slug, $plan->stripe_plan)->create($request->token);
        $request->user()->syncStripePlan();
        return view("frontend.pages.subscription_success");
    }

    public function cancelSubscription(Request $request)
    {
        $user = $request->user();

        $user->subscription('default')->cancel();

        return redirect()->route('home')->with('success', 'Subscription canceled!');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function retrievePlans()
    {
        $key = \config('services.stripe.secret');
        $stripe = new \Stripe\StripeClient($key);
        $plansraw = $stripe->plans->all();
        $plans = $plansraw->data;

        foreach ($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,
                []
            );
            $plan->product = $prod;
        }
        return $plans;
    }
    public function showSubscription()
    {
        $plans = $this->retrievePlans();
        $user = Auth::user();

        return view('seller.pages.subscribe', [
            'user' => $user,
            'intent' => $user->createSetupIntent(),
            'plans' => $plans
        ]);
    }
    public function processSubscription(Request $request)
    {
        $user = Auth::user();
        $paymentMethod = $request->input('payment_method');

        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = $request->input('plan');
        try {
            $user->newSubscription('default', $plan)->create($paymentMethod, [
                'email' => $user->email
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }

        return redirect('dashboard');
    }
}
