<?php

namespace App\Livewire\Donasi;

use Livewire\Component;
use Auth;
use App\Models\Transaction;

class Success extends Component
{
    public $orderId;
    public $statusCode;
    public $transactionStatus;
    public $title;

    public function mount()
    {
        $this->orderId = request()->query('order_id');
        $this->title = request()->query('title');
        $this->statusCode = request()->query('status_code');
        $this->transactionStatus = request()->query('transaction_status');
        $user = Auth::user();


        if ($this->statusCode == 200) {
            $transaction = Transaction::where('order_id', $this->orderId)->first();
            if ($transaction) {
                if ($transaction->status == 'pending') {
                    $transaction->status = $this->transactionStatus;
                    $transaction->save();
                }
                else {
                    return redirect()->route('campaign');
                }
            } else {
                return redirect()->route('campaign');
            }
        }

    }

    public function goCampaign()
    {
        return redirect()->route('campaigns.show', $this->title);
    }

    public function render()
    {
        return view('livewire.donasi.success')->layout('layouts.none');
    }
}

