<?php namespace Keepcloud\Mautic\Http\Controllers;

use App\Http\Controllers\Controller;
use Keepcloud\Mautic\Models\MauticConsumer;
use Keepcloud\Mautic\Facades\Mautic;


    class MauticController extends Controller
    {

        /**
         * Setup Applicaion.
         */
        public function initiateApplication()
        {

            $consumer = MauticConsumer::count();

            if($consumer == 0){
                Mautic::connection('main');
            }else{
                echo '<h1>Mautic App Already Register</h1>';
            }

        }

    }