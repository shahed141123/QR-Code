<?php

namespace App\Http\Controllers\Admin;

use App\Models\BarCode;
use Milon\Barcode\DNS1D;
use App\Models\BarcodeImage;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Imports\BarcodesImport;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class BarCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();
        $subscription = $isUserRoute
            ? Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'barcode');
            })->active()->first()
            : null;
        $bar_codes = $isUserRoute ?
            BarCode::with('barCodeImages')->where('user_id', $user->id)->latest('id')->get() :
            BarCode::with('barCodeImages')->latest('id')->get();

        $view = $isUserRoute ? 'user.pages.bar-code.index' : 'admin.pages.bar-code.index';
        return view($view, [
            'bar_codes'    => $bar_codes,
            'subscription' => $subscription,
        ]);
        // if ($isUserRoute) {
        //     if (!empty($subscription->plan)) {

        //         return view($view, [
        //             'bar_codes'    => $bar_codes,
        //             'subscription' => $subscription,
        //         ]);
        //     } else {
        //         session()->flash('barcodeExceededModal', true);
        //         return redirect()->back();
        //     }
        // } else {
        //     return view($view, [
        //         'bar_codes'    => $bar_codes,
        //         'subscription' => $subscription,
        //     ]);
        // }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();

        // Determine the view file based on the route
        $view = $isUserRoute ? 'user.pages.bar-code.create' : 'admin.pages.bar-code.create';

        if ($isUserRoute) {
            // Fetch the subscription for the user with the necessary plan type
            $subscription = Subscription::with('plan')
                ->where('user_id', $user->id)
                ->whereHas('plan', function ($query) {
                    $query->where('type', 'barcode');
                })
                ->active()
                ->first();

            // Check if the subscription exists and has a plan
            if ($subscription && $subscription->plan) {
                return view($view);
            } else {
                session()->flash('barcodeExceededModal', true);
                return redirect()->back();
            }
        }

        // Return the view for admin routes
        return view($view);
    }


    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //     $request->validate([
    //         'product_id' => 'required|string',
    //         // 'barcode_pattern' => 'required|string',
    //     ]);

    //     $typePrefix = 'BAR';
    //     $today = date('dm');
    //     $userId = $isUserRoute ? Auth::user()->id : null;

    //     $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
    //         ->orderBy('id', 'desc')->first();
    //     $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
    //     $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

    //     $productId = $request->input('product_id');
    //     $barcodePattern = !empty($request->input('barcode_pattern')) ? $request->input('barcode_pattern') : 'C';
    //     $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000'));
    //     $barcodeWidth = $request->input('barcode_width', 2);
    //     $barcodeHeight = !empty($request->input('barcode_height')) ? $request->input('barcode_height') : 60;

    //     $d = new DNS1D();

    //     try {
    //         $formats = ['png', 'jpg', 'pdf'];
    //         $urls = [];

    //         foreach ($formats as $format) {
    //             $directory = public_path("storage/barcodes/$format/");
    //             if (!file_exists($directory)) {
    //                 mkdir($directory, 0777, true);
    //             }

    //             $filePath = "$directory$code.$format";

    //             switch ($format) {
    //                 case 'png':
    //                     $barCodeStringPng = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     file_put_contents($filePath, base64_decode($barCodeStringPng));
    //                     $urls['png'] = "storage/barcodes/png/$code.png";
    //                     break;
    //                 case 'jpg':
    //                     $barCodeStringPng = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     // $barCodeStringJpg = $d->getBarcodeJPG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     // file_put_contents($filePath, "data:image/jpeg;base64,' . $barCodeStringJpg . '");
    //                     $qrCodePath = '../public/storage/jpg/' . $code . '.jpg';
    //                     $base64ImageString = base64_encode($barCodeStringPng);
    //                     $imageContent = base64_decode($base64ImageString);
    //                     $image = Image::make($imageContent);
    //                     $image->encode('jpg', 100)->save($filePath);
    //                     $urls['jpg'] = "storage/barcodes/jpg/$code.jpg";
    //                     break;
    //                 case 'pdf':
    //                     $barCodeStringPdf = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //                     if (!$barCodeStringPdf) {
    //                         continue 2; // Correct usage of continue to skip to the next format
    //                     }

    //                     $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . $barCodeStringPdf . '" /></div>';

    //                     // Create DomPDF instance
    //                     $pdf = \App::make('dompdf.wrapper');
    //                     $pdf->loadHTML($htmlContent, 'UTF-8');
    //                     $pdf->save("$filePath");
    //                     $urls['pdf'] = "storage/barcodes/pdf/$code.pdf";
    //                     break;
    //             }
    //         }

    //         $bar_code = BarCode::create([
    //             'user_id'         => $isUserRoute ? Auth::user()->id : null,
    //             'admin_id'        => $isUserRoute ? null : Auth::guard('admin')->user()->id,
    //             'barcode_type'    => 'single_upload',
    //             'barcode_pattern' => $barcodePattern,
    //             'barcode_color'   => json_encode($barcodeColor), // Store as JSON string
    //             'code'            => $code,
    //             'product_name'    => $request->product_name,
    //             'product_id'      => $productId,
    //             'product_price'   => $request->product_price,
    //             'per_page'        => $request->per_page,
    //             'barcode_width'   => $barcodeWidth,
    //             'barcode_height'  => $barcodeHeight,
    //             'bulk_file'       => $request->bulk_file,
    //             'bar_code_jpg'    => $urls['jpg'] ?? null,
    //             'bar_code_pdf'    => $urls['pdf'] ?? null,
    //             'bar_code_svg'    => $urls['svg'] ?? null,
    //             'bar_code_png'    => $urls['png'] ?? null,
    //         ]);

    //         $routeName = $isUserRoute ? 'user.barcode.index' : 'admin.barcode.index';
    //         return redirect()->route($routeName)->with('success', 'You have successfully generated Bar Code.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withInput()->with('error', ['error' => $e->getMessage()]);
    //     }
    // }

    // public function store(Request $request)
    // {
    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

    //     // Validate request inputs
    //     $request->validate([
    //         'product_id' => 'required|string',
    //         'bar_code_quantity' => 'required|integer|min:1',
    //         'per_page' => 'required|integer|min:1',
    //     ]);

    //     // Get user ID based on route
    //     $typePrefix = 'BAR';
    //     $today = date('dm');
    //     $userId = $isUserRoute ? Auth::user()->id : null;

    //     $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
    //         ->orderBy('id', 'desc')->first();
    //     $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
    //     $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

    //     // Initialize barcode parameters
    //     $productId = $request->input('product_id');
    //     $barcodePattern = $request->input('barcode_pattern', 'PHARMA');
    //     $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000'));
    //     $barcodeWidth = $request->input('barcode_width', 2); // Adjusted to fixed width for simplicity
    //     $barcodeHeight = !empty($request->input('barcode_height')) ? $request->input('barcode_height') : '50';
    //     $quantity = $request->input('bar_code_quantity', 1);
    //     $perPage = $request->input('per_page', 36); // Default to 36 barcodes per page

    //     $d = new DNS1D();
    //     $urls = [];
    //     $barcodes = [];

    //     // Generate barcodes
    //     try {
    //         for ($i = 0; $i < $quantity; $i++) {
    //             // Generate barcode as PNG image (adjust parameters as needed)
    //             $barcode = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']], true);
    //             $barcodes[] = $barcode;
    //         }

    //         // Initialize variables for pagination
    //         $currentPage = 1;
    //         $totalPages = ceil(count($barcodes) / $perPage);
    //         $padding = 30; // Padding around each barcode and the main canvas
    //         $barcodesPerRow = 4; // Number of barcodes per row
    //         $barcodesPerPage = $perPage; // Barcodes per page
    //         $maximumwidth = 350;
    //         $maximumheight = 300;


    //         // Loop through barcodes and create canvases/pages
    //         while ($barcodes) {
    //             // Calculate canvas size based on the number of barcodes per page
    //             $rows = ceil($barcodesPerPage / $barcodesPerRow);
    //             $canvasWidth = $barcodesPerRow * ($maximumwidth + $padding * 2);
    //             $canvasHeight = $rows * ($maximumheight + $padding * 2);

    //             // Initialize canvas for combined image
    //             $canvas = Image::canvas($canvasWidth + $padding * 2, $canvasHeight + $padding * 2, '#ffffff');

    //             // Calculate positions for each barcode on the canvas
    //             $x = $padding;
    //             $y = $padding;
    //             $count = 0;

    //             foreach ($barcodes as $key => $barcode) {
    //                 if ($count >= $barcodesPerPage) {
    //                     break; // Stop if reached perPage limit
    //                 }

    //                 // Open each barcode image
    //                 $barcodeImage = Image::make($barcode);
    //                 $barcodeImage->resize($maximumwidth, $maximumheight, function ($constraint) {
    //                     $constraint->aspectRatio();
    //                 });
    //                 // Insert barcode into the canvas with padding
    //                 $canvas->insert($barcodeImage, 'top-left', (int)$x, (int)$y);

    //                 // Update positions for the next barcode (adjust as needed)
    //                 $x += $maximumwidth + $padding * 2; // Add spacing between barcodes
    //                 if ($x + $maximumwidth + $padding > $canvasWidth) { // Adjust canvas width if necessary
    //                     $x = $padding;
    //                     $y += $maximumheight + $padding * 2; // Add spacing between rows
    //                 }

    //                 $count++;
    //             }

    //             // Remove processed barcodes
    //             array_splice($barcodes, 0, $count);

    //             // Encode the canvas as PNG
    //             $mergedImage = $canvas->encode('png');

    //             $filename = 'barcode_page_' . $currentPage . '.png';
    //             Storage::put('public/barcodes/' . $filename, $mergedImage);

    //             // Save the record in the database
    //             $bar_code = BarCode::create([
    //                 'user_id'         => $isUserRoute ? Auth::user()->id : null,
    //                 'admin_id'        => $isUserRoute ? null : Auth::guard('admin')->user()->id,
    //                 'barcode_type'    => 'single_upload',
    //                 'barcode_pattern' => $barcodePattern,
    //                 'barcode_color'   => json_encode($barcodeColor), // Store as JSON string
    //                 'code'            => $code,
    //                 'product_name'    => $request->product_name,
    //                 'product_id'      => $productId,
    //                 'product_price'   => $request->product_price,
    //                 'per_page'        => $request->per_page,
    //                 'barcode_width'   => $barcodeWidth,
    //                 'barcode_height'  => $barcodeHeight,
    //                 'bulk_file'       => $request->bulk_file,
    //             ]);
    //             $directory = public_path("storage/barcodes/pdf/");
    //             if (!file_exists($directory)) {
    //                 mkdir($directory, 0777, true);
    //             }

    //             $filePath = "$directory$code.'pdf'";
    //             $htmlContent = '<div class="d-flex justify-content-center align-items-center text-center"><div><img src="data:image/png;base64,' . base64_encode($mergedImage) . '" alt="barcode"/></div><div>"<p>Page:'. $currentPage / $totalPages .'</p>"</div> "'. $currentPage++ .'"</div>';
    //             $pdf = \App::make('dompdf.wrapper');
    //             $pdf->loadHTML($htmlContent, 'UTF-8');
    //             $pdf->save($filePath);
    //             $urls['pdf'] = "storage/barcodes/pdf/$code.pdf";

    //             $barCode=BarcodeImage::create([
    //                 'barcode_id' => $bar_code ? $bar_code->id : null,
    //                 'page_number' => $currentPage,
    //                 'image' => 'barcodes/images/' . $filename,
    //                 'pdf'   => $urls['pdf'],

    //             ]);

    //             // Display or save the image
    //             echo '<img src="data:image/png;base64,' . base64_encode($mergedImage) . '" alt="barcode"/>';

    //             // Add pagination logic here if needed
    //             echo "<p>Page: $currentPage / $totalPages</p>";
    //             $currentPage++;
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withInput()->with('error', ['error' => $e->getMessage()]);
    //     }
    // }


    public function store(Request $request)
    {
        set_time_limit(300); // Increase the maximum execution time to 5 minutes

        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        // Validate request inputs
        $request->validate([
            'product_id' => 'required|string',
            'bar_code_quantity' => 'required|integer|min:1',
            'per_page' => 'required|integer|min:1',
        ]);

        // Get user ID based on route
        $typePrefix = 'BAR';
        $today = date('dm');
        $userId = $isUserRoute ? Auth::user()->id : null;
        $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
            ->orderBy('id', 'desc')->first();
        $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
        $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

        // Initialize barcode parameters
        $productId = $request->input('product_id');
        $barcodePattern = $request->input('barcode_pattern', 'C128');
        $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000'));
        $barcodeWidth = $request->input('barcode_width', 2);
        $barcodeHeight = !empty($request->input('barcode_height')) ? $request->input('barcode_height') : '50';
        $quantity = $request->input('bar_code_quantity', 1);
        $perPage = !empty($request->input('per_page')) ? $request->input('per_page') : '20';

        $d = new DNS1D();
        $barcodes = [];

        try {
            // Generate barcodes
            for ($i = 0; $i < $quantity; $i++) {
                $barcode = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, [$barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']]);
                $barcodes[] = base64_decode($barcode);
            }

            // Initialize variables for pagination
            $currentPage = 1;
            $totalPages = ceil(count($barcodes) / $perPage);
            $padding = 40;
            $barcodesPerRow = 4;
            $barcodesPerPage = $perPage;
            $maximumWidth = 1000; // 1K resolution width
            $maximumHeight = 1000; // 1K resolution height

            $pdf = \App::make('dompdf.wrapper');
            $bar_code = BarCode::create([
                'user_id' => $isUserRoute ? Auth::user()->id : null,
                'admin_id' => $isUserRoute ? null : Auth::guard('admin')->user()->id,
                'barcode_type' => 'single_upload',
                'barcode_pattern' => $barcodePattern,
                'barcode_color' => json_encode($barcodeColor),
                'code' => $code,
                'product_name' => $request->product_name,
                'product_id' => $productId,
                'product_price' => $request->product_price,
                'per_page' => $request->per_page,
                'barcode_width' => $barcodeWidth,
                'barcode_height' => $barcodeHeight,
                'bulk_file' => $request->bulk_file,
            ]);

            // Loop through barcodes and create canvases/pages
            while ($barcodes) {
                $rows = ceil($barcodesPerPage / $barcodesPerRow);
                $canvasWidth = $barcodesPerRow * ($maximumWidth + $padding * 2);
                $canvasHeight = $rows * ($maximumHeight + $padding * 2);

                $canvas = Image::canvas($canvasWidth + $padding * 2, $canvasHeight + $padding * 2, '#ffffff');

                $x = $padding;
                $y = $padding;
                $count = 0;

                foreach ($barcodes as $key => $barcode) {
                    if ($count >= $barcodesPerPage) {
                        break;
                    }

                    $barcodeImage = Image::make($barcode)->resize($maximumWidth, $maximumHeight, function ($constraint) {
                        $constraint->aspectRatio();
                    });

                    $canvas->insert($barcodeImage, 'top-left', (int)$x, (int)$y);

                    $x += $maximumWidth + $padding * 2;
                    if ($x + $maximumWidth + $padding > $canvasWidth) {
                        $x = $padding;
                        $y += $maximumHeight + $padding * 2;
                    }

                    $count++;
                }

                array_splice($barcodes, 0, $count);

                $mergedImage = $canvas->encode('png', 100); // 100 for high quality

                $filename = 'barcode_page_' . $currentPage . '.png';
                Storage::put('public/barcodes/images/' . $filename, $mergedImage);

                // Ensure the image path is correct
                $htmlContent = '<img width="350px" src="' . asset('storage/barcodes/images/' . $filename) . '" alt="barcode"/><p>Page: ' . $currentPage . ' / ' . $totalPages . '</p>';
                $pdf->loadHTML($htmlContent);

                BarcodeImage::create([
                    'barcode_id' => $bar_code ? $bar_code->id : null,
                    'page_number' => $currentPage,
                    'image' => 'barcodes/images/' . $filename,
                ]);

                $currentPage++;
            }

            $filePath = public_path("storage/barcodes/pdf/{$code}.pdf");
            $pdf->save($filePath);

            $bar_code->update([
                'bar_code_pdf' => "storage/barcodes/pdf/{$code}.pdf",
            ]);

            if ($isUserRoute) {
                return redirect()->route('user.barcode.index')->with('success', 'Barcodes created successfully.');
            } else {
                return redirect()->route('admin.barcode.index')->with('success', 'Barcodes created successfully.');
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Barcode generation error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the barcode: ' . $e->getMessage());
        }
    }









    public function barcodePreview(Request $request)
    {


        $productId = $request->input('product_id');
        $barcodePattern = !empty($request->input('barcode_pattern')) ? $request->input('barcode_pattern') : 'PHARMA';
        $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000')); // Default to black if no color is provided
        $barcodeWidth = $request->input('barcode_width', 2);
        $barcodeHeight = !empty($request->input('barcode_height')) ? $request->input('barcode_height') : 60;


        $d = new DNS1D();

        if (!file_exists(public_path('storage/barcodes/'))) {
            mkdir(public_path('storage/barcodes/'), 0777, true);
        }

        try {
            $barCodeString = $d->getBarcodePNG($productId, $barcodePattern, $barcodeWidth, $barcodeHeight, array($barcodeColor['r'], $barcodeColor['g'], $barcodeColor['b']), true);
            if ($barCodeString === false) {
                throw new \Exception('Barcode generation failed.');
            }

            $barCodeDataUrl = 'data:image/png;base64,' . $barCodeString;

            return response()->json(['bar_code' => $barCodeDataUrl]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function bulkStore(Request $request)
    {
        if (!$request->hasFile('bulk_file')) {
            return redirect()->back()->with('error', 'No file uploaded.');
        }

        $file = $request->file('bulk_file');
        if (!$file) {
            return redirect()->back()->with('error', 'Failed to receive the file.');
        }

        $request->validate([
            'bulk_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $filePath = $file->store('barcode/excel/');
        if (!$filePath) {
            return redirect()->back()->with('error', 'File upload failed.');
        }

        $file = Storage::path($filePath);

        try {
            $barcodes = Excel::toArray(new BarcodesImport, $file)[0];
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to read the Excel file.');
        }

        Log::info('Barcodes Data: ', $barcodes);

        $headers = array_shift($barcodes); // Extract the headers

        $d = new DNS1D();
        $barcodePattern = $request->input('barcode_pattern');
        // $barcodeColor = ['r' => 0, 'g' => 0, 'b' => 0];
        // $barcodeWidth = 2;
        $barcodeColor = $this->hexToRgb($request->input('barcode_color', '#000000'));
        $barcodeWidth = $request->input('barcode_width', 2);
        $barcodeHeight = 60;

        foreach ($barcodes as &$row) {
            // Convert the Product ID to a string
            $row[0] = (string) $row[0];
        }

        foreach ($barcodes as $row) {
            Log::info('Processing Row: ', $row);

            // Map headers to row values
            if (count($headers) !== count($row)) {
                $rowJson = json_encode($row);
                Session::flash('error', 'Mismatched headers and values in row: ' . $rowJson);
                Log::warning('Mismatched headers and values in row: ' . $rowJson);
                continue;
            }

            $row = array_combine($headers, $row);

            if ($row === false) {
                $rowJson = json_encode($row);
                Session::flash('error', 'Failed to combine headers and values in row: ' . $rowJson);
                Log::warning('Failed to combine headers and values in row: ' . $rowJson);
                continue;
            }

            if (!isset($row['Product ID']) || !isset($row['Product Name']) || !isset($row['Product Price'])) {
                $rowJson = json_encode($row);
                // Session::flash('error', 'Missing data in row: ' . $rowJson);
                // Log::warning('Missing data in row: ' . $rowJson);
                continue;
            }

            $productId = $row['Product ID'];
            $productName = $row['Product Name'];
            $productPrice = $row['Product Price'];
            // $perPage = $row['Per Page'];

            $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
            $typePrefix = 'BAR';
            $today = date('dm');
            $userId = $isUserRoute ? Auth::user()->id : null;

            $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
                ->orderBy('id', 'desc')->first();
            $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
            $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

            try {
                $urls = $this->generateBarcodes($d, $productId, $code, $barcodePattern, $barcodeWidth, $barcodeHeight, $barcodeColor);

                BarCode::create([
                    'user_id'            => $isUserRoute ? Auth::id() : null,
                    'admin_id'           => $isUserRoute ? null : Auth::guard('admin')->user()->id,
                    'barcode_type'       => 'bulk_upload',
                    'barcode_color'      => json_encode($barcodeColor),
                    'barcode_pattern'    => $barcodePattern,
                    'code'               => $code,
                    'product_id'         => $productId,
                    'product_name'       => $productName,
                    'product_price'      => $productPrice,
                    // 'per_page'           => $perPage,
                    'barcode_width'      => $barcodeWidth,
                    'barcode_height'     => $barcodeHeight,
                    'bulk_file'          => $file,
                    'bar_code_jpg'       => $urls['jpg'] ?? null,
                    'bar_code_pdf'       => $urls['pdf'] ?? null,
                    'bar_code_svg'       => $urls['svg'] ?? null,
                    'bar_code_png'       => $urls['png'] ?? null,
                ]);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $productId . ': ' . $e->getMessage());
                Log::error('Failed to generate barcode for product ID ' . $productId . ': ' . $e->getMessage());
            }
        }
        if ($isUserRoute) {
            return redirect()->route('user.barcode.index')->with('success', 'Barcodes created successfully.');
        } else {
            return redirect()->route('admin.barcode.index')->with('success', 'Barcodes created successfully.');
        }
    }

    private function generateBarcodes($dns1d, $productId, $code, $pattern, $width, $height, $color)
    {
        $formats = ['png', 'jpg', 'pdf'];
        $urls = [];

        foreach ($formats as $format) {
            $directory = public_path("storage/barcodes/$format/");
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $filePath = "$directory$code.$format";

            switch ($format) {
                case 'png':
                    $barCodeStringPng = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
                    file_put_contents($filePath, base64_decode($barCodeStringPng));
                    $urls['png'] = "storage/barcodes/png/$code.png";
                    break;
                case 'jpg':
                    $barCodeStringPng = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
                    $imageContent = base64_decode(base64_encode($barCodeStringPng));
                    $image = Image::make($imageContent);
                    $image->encode('jpg', 100)->save($filePath);
                    $urls['jpg'] = "storage/barcodes/jpg/$code.jpg";
                    break;
                case 'pdf':
                    $barCodeStringPdf = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
                    if (!$barCodeStringPdf) {
                        continue 2;
                    }
                    $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . $barCodeStringPdf . '" /></div>';
                    $pdf = \App::make('dompdf.wrapper');
                    $pdf->loadHTML($htmlContent, 'UTF-8');
                    $pdf->save($filePath);
                    $urls['pdf'] = "storage/barcodes/pdf/$code.pdf";
                    break;
            }
        }

        return $urls;
    }
    // public function bulkStore(Request $request)
    // {
    //     if (!$request->hasFile('bulk_file')) {
    //         return redirect()->back()->with('error', 'No file uploaded.');
    //     }

    //     $file = $request->file('bulk_file');
    //     if (!$file) {
    //         return redirect()->back()->with('error', 'Failed to receive the file.');
    //     }

    //     $request->validate([
    //         'bulk_file' => 'required|file|mimes:xlsx,xls,csv',
    //     ]);

    //     $filePath = $file->store('barcode/excel/');
    //     if (!$filePath) {
    //         return redirect()->back()->with('error', 'File upload failed.');
    //     }

    //     $file = Storage::path($filePath);

    //     try {
    //         $barcodes = Excel::toArray(new BarcodesImport, $file)[0];
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Failed to read the Excel file.');
    //     }

    //     Log::info('Barcodes Data: ', $barcodes);

    //     $headers = array_shift($barcodes); // Extract the headers

    //     $d = new DNS1D();
    //     $barcodePattern = $request->input('barcode_pattern');
    //     $barcodeColor = ['r' => 0, 'g' => 0, 'b' => 0];
    //     $barcodeWidth = 2;
    //     $barcodeHeight = 60;

    //     foreach ($barcodes as $row) {
    //         Log::info('Processing Row: ', $row);

    //         // Map headers to row values
    //         $row = array_combine($headers, $row);

    //         if (!isset($row['Product ID']) || !isset($row['Product Name']) || !isset($row['Product Price']) || !isset($row['Per Page'])) {
    //             $rowJson = json_encode($row);
    //             Session::flash('error', 'Missing data in row: ' . $rowJson);
    //             Log::warning('Missing data in row: ' . $rowJson);
    //             continue;
    //         }
    //         // dd($row['Product ID']);
    //         $productId = $row['Product ID'];
    //         $productName = $row['Product Name'];
    //         $productPrice = $row['Product Price'];
    //         $perPage = $row['Per Page'];

    //         $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //         $typePrefix = 'BAR';
    //         $today = date('dm');
    //         $userId = $isUserRoute ? Auth::id() : null;

    //         $lastCode = BarCode::where('code', 'like', $typePrefix . $today . $userId . '%')
    //             ->orderBy('id', 'desc')->first();
    //         $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
    //         $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

    //         try {
    //             $urls = $this->generateBarcodes($d, $productId, $code, $barcodePattern, $barcodeWidth, $barcodeHeight, $barcodeColor);

    //             BarCode::create([
    //                 'user_id'            => $isUserRoute ? Auth::id() : null,
    //                 'admin_id'           => $isUserRoute ? null : Auth::guard('admin')->user()->id,
    //                 'barcode_type'       => 'bulk_upload',
    //                 'barcode_color'      => json_encode($barcodeColor),
    //                 'barcode_pattern'    => $barcodePattern,
    //                 'code'               => $code,
    //                 'product_id'         => $productId,
    //                 'product_name'       => $productName,
    //                 'product_price'      => $productPrice,
    //                 'per_page'           => $perPage,
    //                 'barcode_width'      => $barcodeWidth,
    //                 'barcode_height'     => $barcodeHeight,
    //                 'bulk_file'          => $file,
    //                 'bar_code_jpg'       => $urls['jpg'] ?? null,
    //                 'bar_code_pdf'       => $urls['pdf'] ?? null,
    //                 'bar_code_svg'       => $urls['svg'] ?? null,
    //                 'bar_code_png'       => $urls['png'] ?? null,
    //             ]);
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', $productId . ': ' . $e->getMessage());
    //             Log::error('Failed to generate barcode for product ID ' . $productId . ': ' . $e->getMessage());
    //         }
    //     }
    //     if ($isUserRoute) {
    //         return redirect()->route('user.barcode.index')->with('success', 'Barcodes created successfully.');
    //     } else {
    //         return redirect()->route('admin.barcode.index')->with('success', 'Barcodes created successfully.');
    //     }
    // }

    // private function generateBarcodes($dns1d, $productId, $code, $pattern, $width, $height, $color)
    // {
    //     $formats = ['png', 'jpg', 'pdf'];
    //     $urls = [];

    //     foreach ($formats as $format) {
    //         $directory = public_path("storage/barcodes/$format/");
    //         if (!file_exists($directory)) {
    //             mkdir($directory, 0777, true);
    //         }

    //         $filePath = "$directory$code.$format";

    //         switch ($format) {
    //             case 'png':
    //                 $barCodeStringPng = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
    //                 file_put_contents($filePath, base64_decode($barCodeStringPng));
    //                 $urls['png'] = "storage/barcodes/png/$code.png";
    //                 break;
    //             case 'jpg':
    //                 $barCodeStringPng = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
    //                 $imageContent = base64_decode(base64_encode($barCodeStringPng));
    //                 $image = Image::make($imageContent);
    //                 $image->encode('jpg', 100)->save($filePath);
    //                 $urls['jpg'] = "storage/barcodes/jpg/$code.jpg";
    //                 break;
    //             case 'pdf':
    //                 $barCodeStringPdf = $dns1d->getBarcodePNG($productId, $pattern, $width, $height, [$color['r'], $color['g'], $color['b']], true);
    //                 if (!$barCodeStringPdf) {
    //                     continue 2;
    //                 }
    //                 $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . $barCodeStringPdf . '" /></div>';
    //                 $pdf = \App::make('dompdf.wrapper');
    //                 $pdf->loadHTML($htmlContent, 'UTF-8');
    //                 $pdf->save($filePath);
    //                 $urls['pdf'] = "storage/barcodes/pdf/$code.pdf";
    //                 break;
    //         }
    //     }

    //     return $urls;
    // }

    private function hexToRgb($hex)
    {
        $hex = ltrim($hex, '#');
        list($r, $g, $b) = sscanf($hex, "%02x%02x%02x");
        return ['r' => $r, 'g' => $g, 'b' => $b];
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
        BarCode::find($id)->delete();
    }
}
