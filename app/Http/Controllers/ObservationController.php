<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        // Get all the posts ordered by published date
        $observations = Observation::orderBy('observed_at', 'desc')->get();

        return view('observations.index', compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        return view('observations.create');
    }
}
