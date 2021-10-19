<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = '<h1>Hello Pdf</h1>';
    $pdf= PDF::loadView('assesments.dme')->setPaper('a4'); 
    $pdf->setOrientation('portrait');
    $pdf->setOption('margin-bottom', 0);
    $pdf->setOption('footer-html',view('components.footer'));
    return $pdf->stream();
});
