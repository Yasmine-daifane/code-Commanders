<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\dashboardController;
use Carbon\Carbon;
use App\Models\Facture;
use App\Models\Machines;

class dashboardController extends Controller
{
    public function index(){

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Get the last month and year
        $lastMonth = Carbon::now()->subMonth()->month;
        $lastYear = Carbon::now()->subMonth()->year;

        // Get the total invoices for the current month
        $currentMonthTotal = Facture::where('utilisateur_id',  1)
                                    ->whereMonth('dateFacture', $currentMonth)
                                    ->whereYear('dateFacture', $currentYear)
                                    ->sum('montantFacture');

        // Get the total invoices for the last month
        $lastMonthTotal = Facture::where('utilisateur_id',  1)
                                 ->whereMonth('dateFacture', $lastMonth)
                                 ->whereYear('dateFacture', $lastYear)
                                 ->sum('montantFacture');

        // Calculate the difference
        $difference = $currentMonthTotal - $lastMonthTotal;

        $data = Machines::where('utilisateur_id',  1)->select('nomMachine', 'quantiteEau')->get();

        // Group the data by NomMachine
        $groupedData = $data->groupBy('nomMachine')->map(function ($group) {
            return $group->sum('quantiteEau');
        });
        $data = Facture::select('montantFacture', 'dateFacture')->get();
        $groupedData = $data->groupBy(function ($item) {
            return Carbon::parse($item->dateFacture)->format('F');
        })->map(function ($group) {
            return $group->sum('montantFacture');
        });
        // Prepare the data for the chart
        $labels = $groupedData->keys();
        $values = $groupedData->values();

    }
    public function store(Request $request){}
}
