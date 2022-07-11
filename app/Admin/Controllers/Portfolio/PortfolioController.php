<?php

namespace App\Admin\Controllers\Portfolio;

use App\Admin\Controllers\Controller;
use App\Admin\Requests\Portfolio\PortfolioRequest;
use Domain\Portfolio\Actions\DeletePortfolioAction;
use Domain\Portfolio\Actions\StorePortfolioAction;
use Domain\Portfolio\Actions\UpdatePortfolioAction;
use Domain\Portfolio\DataTransferObjects\PortfolioData;
use Domain\Portfolio\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::paginate(30);
        return view('admin.portfolio.index', [
            'portfolios' => $portfolios,
        ]);
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(PortfolioRequest $request, StorePortfolioAction $action)
    {
        $portfolioData = PortfolioData::fromRequest($request);
        $action->execute($portfolioData);
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio created successfully');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', [
            'portfolio' => $portfolio,
        ]);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', array('portfolio' => $portfolio));
    }

    public function update(Portfolio $portfolio, PortfolioRequest $request, UpdatePortfolioAction $action)
    {
        $portfolioData = PortfolioData::fromRequest($request);
        $action->execute($portfolio->id, $portfolioData);
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio have been updated successfully');
    }

    public function destroy(Portfolio $portfolio, DeletePortfolioAction $action)
    {
        $action->execute($portfolio->id);
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio have been deleted successfully');
    }
}
