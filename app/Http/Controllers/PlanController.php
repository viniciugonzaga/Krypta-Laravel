<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Exibe a lista de todos os planos.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    /**
     * Exibe o formulário para criar um novo plano.
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Salva um novo plano no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'features' => 'nullable|string',
        ]);

        Plan::create($request->all());

        return redirect()->route('plans.index')
                         ->with('success', 'Plano criado com sucesso!');
    }

    /**
     * Exibe os detalhes de um plano específico.
     */
    public function show(Plan $plan)
    {
        return view('plans.show', compact('plan'));
    }

    /**
     * Exibe o formulário para editar um plano específico.
     */
    public function edit(Plan $plan)
    {
        return view('plans.edit', compact('plan'));
    }

    /**
     * Atualiza um plano específico no banco de dados.
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'features' => 'nullable|string',
        ]);

        $plan->update($request->all());

        return redirect()->route('plans.index')
                         ->with('success', 'Plano atualizado com sucesso!');
    }

    /**
     * Remove um plano específico do banco de dados.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')
                         ->with('success', 'Plano excluído com sucesso!');
    }
}