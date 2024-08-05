<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Services\PaymentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected PaymentService $paymentService,
    ) {}

    public function response(Request $request, Registration $registration): RedirectResponse
    {
        $data = $request['encData'];

        $jsonData = $this->paymentService->processResponse($data);

        if ($jsonData['payInstrument']['responseDetails']['statusCode'] == 'OTS0000') {
            $registration->transaction()->update([
                'bank_transaction_id' => $jsonData['payInstrument']['payModeSpecificData']['bankDetails']['bankTxnId'],
                'status' => 1,
            ]);

            return redirect()->route('export', $registration->id);
        } else {
            return redirect()->back()->with('status', 'Payment Failed!!');
        }
    }
}
