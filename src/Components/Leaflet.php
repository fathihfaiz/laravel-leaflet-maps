<?php

namespace FathihFaiz\LeafletMaps\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class Leaflet extends Component
{
    const DEFAULTMAPID = "defaultMapId";

    public int $zoomLevel;
    public int $maxZoomLevel;
    public array $centerPoint;
    public array $markers;
    public $tileHost;
    public $mapId;
    public string $attribution;
    public string $leafletVersion;

    public function __construct(
        $centerPoint = [0, 0],
        $markers = [],
        $zoomLevel = 13,
        $maxZoomLevel = 18,
        $tileHost = 'openstreetmap',
        $id = self::DEFAULTMAPID,
        $attribution = '',
        $leafletVersion = "1.7.1",
    )
    {
        $this->centerPoint = $centerPoint;
        $this->zoomLevel = $zoomLevel;
        $this->maxZoomLevel = $maxZoomLevel;
        $this->markers = $markers;
        $this->tileHost = $tileHost;
        $this->mapId = $id;
        $this->attribution = $attribution;
        $this->leafletVersion = $leafletVersion;
    }

    public function render(): View
    {
        return view('leaflet-maps::components.leaflet', [
            'centerPoint' => $this->centerPoint,
            'zoomLevel' => $this->zoomLevel,
            'maxZoomLevel' => $this->maxZoomLevel,
            'markers' => $this->markers,
            'tileHost' => $this->tileHost,
            'mapId' => $this->mapId === self::DEFAULTMAPID ? Str::random() : $this->mapId,
            'attribution' => $this->attribution,
            'leafletVersion' => $this->leafletVersion
        ]);
    }
}
