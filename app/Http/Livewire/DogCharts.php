<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Weight;
use App\Models\Dog;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class DogCharts extends Component
{
    public $dog;
    public $actualDog = 1;
    public $firstRun = true;
    
     /*   public function render()
        {
            $this->currency = Currency::where('id',$this->actualCurrency)->first();
            $bitcoin = Price::where('currency_id',$this->actualCurrency)->orderBy('date')->get();
            $lineChartModel = 
            (new LineChartModel())
                ->setTitle('Historial de Precio')
                ->setAnimated($this->firstRun);
            foreach ($bitcoin as $coin){
                $lineChartModel->addPoint($coin->date->format('d-m-Y'), $coin->price);
            }
            $this->firstRun = true;
            return view('livewire.currency-charts')
            ->with([
            'lineChartModel' => $lineChartModel,
            ]);
        }*/
        
    public function render()
    {
        $this->dog = Dog::where('id',$this->actualDog)->first();
        $weights = Weight::where('dog_id',$this->actualDog)->orderBy('date')->get();
        $lineChartModel = 
            (new LineChartModel())
                ->setTitle('Historial de Peso')
                ->setAnimated($this->firstRun);
            foreach ($weights as $weight){
                $lineChartModel->addPoint($weight->date->format('d-m-Y'), $weight->weight);
            }
            $this->firstRun = true;
            return view('livewire.dog-charts')
            ->with([
            'lineChartModel' => $lineChartModel,
            ]);
    }
}
