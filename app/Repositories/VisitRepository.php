<?php

namespace App\Repositories;

use App\Visit;
use Illuminate\Http\Request;
use \DB;
use \Exception;

class VisitRepository
{
    public function all(Request $request)
    {
        try {
            $columns = [
                'id', 'user_id', 'description', 'name', 'is_visited',
            ];
            $filters = [];

            if ($request->has('search')) {
                $filters[] = [
                    'name', 'like', '%' . $request->search . '%',
                ];
            }

            return Visit::where('user_id', '=', $request->user()->id)
                ->where($filters)
                ->orderBy('is_visited')
                ->orderBy('name')
                ->paginate(setting()->get('records_per_page'), $columns);

        } catch (Exception $e) {
            alert()->danger($e->getMessage());
        }
    }

    public function create(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $request->user()->visits()->create($request->all());
                alert()->success('Visita incluida com sucesso.');
            });
        } catch (Exception $e) {
            alert()->danger($e->getMessage());

            return back()->withInput();
        }
    }

    public function update(Request $request, Visit $visit)
    {
        try {
            DB::transaction(function () use ($request, $visit) {
                $visit->update($request->all());
                alert()->success('Visita alterada com sucesso.');
            });
        } catch (Exception $e) {
            alert()->danger($e->getMessage());

            return back()->withInput();
        }
    }

    public function delete(Visit $visit)
    {
        try {
            DB::transaction(function () use ($visit) {
                $visit->delete();
                alert()->success('Visita excluida com sucesso.');
            });
        } catch (Exception $e) {
            alert()->danger($e->getMessage());

            return back()->withInput();
        }
    }
}
