<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display the calendar page.
     */
    public function calendar()
    {
        return view('admin.calendar');
    }

    /**
     * Display the form elements page.
     */
    public function formElements()
    {
        return view('admin.form_elements');
    }

    /**
     * Display the login page.
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Display the table plugins page.
     */
    public function tablePlugins()
    {
        return view('admin.table_plugins');
    }

    /**
     * Display the modal notification page.
     */
    public function modalNotification()
    {
        return view('admin.ui_modal_notification');
    }
}
