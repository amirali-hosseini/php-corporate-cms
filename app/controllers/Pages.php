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
        $services = $this->model('Service')->limit(6);
        $portfolios = $this->model('Portfolio')->limit(8);
        $plans = $this->model('Plan')->limit(3);
        $testimonials = $this->model('Testimonial')->limit(4);
        $members = $this->model('Member')->all();
        $articles = $this->model('Article')->limit(3);

        $this->view('pages/index',compact('services','portfolios','plans','testimonials','members','articles'));
    }

    /**
     * @throws Exception
     */
    public function blog(): void
    {
        $articles = $this->model('Article')->all();
        $categories = $this->model('Category')->all();

        $this->view('pages/blog',compact('articles','categories'));
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