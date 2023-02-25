<?php

namespace App\Observers;

use App\Models\ItemModel;
use Carbon\Carbon;
class ItemObserver
{
    /**
     * Handle the ItemModel "created" event.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return void
     */
    public function created(ItemModel $itemModel)
    {
        //
    }

    /**
     * Handle the ItemModel "updated" event.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return void
     */
    public function updated(ItemModel $itemModel)
    {
        if ($itemModel->complete_at < Carbon::now()) {
            $itemModel->status = 1;
            $itemModel->save();
        }
    }

    /**
     * Handle the ItemModel "deleted" event.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return void
     */
    public function deleted(ItemModel $itemModel)
    {
        //
    }

    /**
     * Handle the ItemModel "restored" event.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return void
     */
    public function restored(ItemModel $itemModel)
    {
        //
    }

    /**
     * Handle the ItemModel "force deleted" event.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return void
     */
    public function forceDeleted(ItemModel $itemModel)
    {
        //
    }
}
