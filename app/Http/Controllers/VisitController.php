<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisitRequest;
use App\Repositories\VisitRepository;
use App\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    protected $repository;

    public function __construct(VisitRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index(Request $request, Visit $visit)
    {
        $visits    = $this->repository->all($request);
        $isFiltred = $request->has('search');

        return view('visits.index', compact('visits', 'visit', 'isFiltred'));
    }

    public function store(VisitRequest $request)
    {
        $this->repository->create($request);

        return redirect('/visits');
    }

    public function update(VisitRequest $request,
        Visit $visit) {

        $this->repository->update($request, $visit);

        return redirect('/visits');
    }

    public function destroy(Request $request, Visit $visit)
    {
        $this->repository->delete($visit);

        return redirect('/visits');
    }
}
