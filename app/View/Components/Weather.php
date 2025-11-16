<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Weather extends Component
{
    public $temperature;
    public $description;
    public $icon;
    public $city;

    public function __construct($temperature, $description, $icon, $city)
    {
        $this->temperature = $temperature;
        $this->description = $description;
        $this->icon = $icon;
        $this->city = $city;
    }

    public function render()
    {
        return view('components.weather');
    }
}

