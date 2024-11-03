<?php

namespace app\controllers;

use app\libraries\Controller;
use Exception;

class Pages extends Controller
{
    /**
     * @throws Exception
     */
    public function index(): void
    {
        $this->view('pages/index');
    }

    /**
     * @throws Exception
     */
    public function blog(): void
    {
        $this->view('pages/blog');
    }

    /**
     * @throws Exception
     */
    public function services(): void
    {
        $this->view('pages/services');
    }

    /**
     * @throws Exception
     */
    public function portfolios(): void
    {
        $this->view('pages/portfolios');
    }

    /**
     * @throws Exception
     */
    public function about(): void
    {
        $this->view('pages/about-us');
    }

    /**
     * @throws Exception
     */
    public function contact(): void
    {
        $this->view('pages/contact-us');
    }

    /**
     * @throws Exception
     */
    public function plans(): void
    {
        $this->view('pages/plans');
    }
}