<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionListener extends Controller
{
    public function handleNotification(Request $request)
    {
        // $serverKey = env('MIDTRANS_SERVER_KEY');
        $serverKey = '123123123';//fake 
        $signatureKey = $request->signature_key;
        $orderId = $request->order_id;
        $grossAmount = $request->gross_amount;

        $hashed = hash("sha512", $serverKey . $orderId . $grossAmount);

        if ($hashed == $signatureKey) {
            $transaction = Transaction::where('snap_token', $request->transaction_id)->first();

            if ($transaction) {
                switch ($request->transaction_status) {
                    case 'capture':
                        // $transaction->status = 'success';
                        $transaction->status = 'settlement';//temp
                        $message = 'Transaksi berhasil.';
                        break;

                    case 'deny':
                        $transaction->status = 'failed';
                        $message = 'Transaksi ditolak.';
                        break;

                    case 'challenge':
                        $transaction->status = 'pending';
                        $message = 'Transaksi challenge.';
                        break;

                    default:
                        $transaction->status = 'unknown';
                        $message = 'Terjadi kesalahan pada data transaksi yang dikirim.';
                        break;
                }

                $transaction->save();
                return response()->json([
                    'message' => $message,
                    'transaction_status' => $request->transaction_status,
                    'order_id' => $request->order_id,
                    'details' => $request->all()
                ], 200);
            }
        }

        // return response()->json(['message' => 'Invalid notification signature'], 400);
        return response()->json(['message' => '$hashed'], 400);//temp
    }
    //belum dipake
    
}
