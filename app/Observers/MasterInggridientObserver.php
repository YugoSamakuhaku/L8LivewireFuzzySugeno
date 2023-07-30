<?php

namespace App\Observers;

use App\Models\MasterInggridient;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MasterInggridientObserver
{
    use LivewireAlert;
    
    /**
     * Handle the MasterInggridient "created" event.
     *
     * @param  \App\Models\MasterInggridient  $masterInggridient
     * @return void
     */
    public function created(MasterInggridient $masterInggridient)
    {
        $this->flash('success', 'Successfully Added Data', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Inggridient data added successfully.',
        ], route('master_inggridient.index'));
    }

    /**
     * Handle the MasterInggridient "updated" event.
     *
     * @param  \App\Models\MasterInggridient  $masterInggridient
     * @return void
     */
    public function updated(MasterInggridient $masterInggridient)
    {
        $this->flash('success', 'successfully Changed Data', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Inggridient data successfully changed.',
        ], route('master_inggridient.index'));
    }

    /**
     * Handle the MasterInggridient "deleted" event.
     *
     * @param  \App\Models\MasterInggridient  $masterInggridient
     * @return void
     */
    public function deleted(MasterInggridient $masterInggridient)
    {
        $this->flash('success', 'Successfully Deleting Data', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Inggridient data has been successfully deleted.',
        ], route('master_inggridient.index'));
    }

    /**
     * Handle the MasterInggridient "restored" event.
     *
     * @param  \App\Models\MasterInggridient  $masterInggridient
     * @return void
     */
    public function restored(MasterInggridient $masterInggridient)
    {
        //
    }

    /**
     * Handle the MasterInggridient "force deleted" event.
     *
     * @param  \App\Models\MasterInggridient  $masterInggridient
     * @return void
     */
    public function forceDeleted(MasterInggridient $masterInggridient)
    {
        //
    }
}
