<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\itemModel;
use Carbon\Carbon;


class UpdateBiddingStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     *
     * @return int
     */
    protected $signature = 'bidding:update-status';
    protected $description = 'Update bidding item status';

    public function handle()
    {
        $now = carbon::now();
        $items = itemModel::where('complete_at', '<=', $now)
            ->where('status', '!=', 0)
            ->get();

        foreach ($items as $item) {
            $item->status = 1;
            $item->save();
        }

        $this->info('Bidding item status updated successfully.');
    }
}
