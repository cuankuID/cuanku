<?php

namespace App\Jobs;

use App\Models\MeetConsultationOrder;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Stmt\Foreach_;

class RejectExpiredOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        MeetConsultationOrder::where('status', 'Menunggu Pembayaran')->where('due_date', '<=' , Carbon::now())->update([
            'status' => 'Ditolak',
            'information' => 'Pesanan telah melewati batas pembayaran'
        ]);

        info('RejectExpiredOrder executed succesfully');
    }
}
