<?php

namespace App\Livewire;

use App\Models\Mapa as MapaModel;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Mapa extends Component
{

    public $latitude;
    public $longitude;
    public $address;
    protected $listeners = ['locationUpdated'];
    public function render()
    {
        return view('livewire.mapa');
    }

    public function updateLocation()
    {
        $this->validate([
            'address' => 'required',
        ]);

        $coordinates = $this->getCoordinates($this->address);

        if ($coordinates) {
            $this->latitude = $coordinates['lat'];
            $this->longitude = $coordinates['lng'];
        }
    }
  


    public function locationUpdated($data)
    {
        // Aqui você pode acessar a latitude e longitude e fazer o que quiser com elas
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];
        dd($latitude,$longitude);
        // Exemplo: salvar no banco de dados
        // Location::create(['latitude' => $latitude, 'longitude' => $longitude]);
    
        // Ou qualquer outra lógica que você precisa realizar
    }
}
