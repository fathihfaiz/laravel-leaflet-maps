# Laravel Leaflet Maps

A Laravel Blade component package to easily integrate LeafletJS maps into your Laravel application with full support for all map and marker attributes.

## 📦 Installation

Install the package using Composer:

```bash
composer require fathihfaiz/laravel-leaflet-maps
```

## 🚀 Usage

### Basic Map

```blade
<x-leaflet-maps::leaflet />
```

### Map with Center and Zoom

```blade
<x-leaflet-maps::leaflet 
    :centerPoint="['lat' => 4.17, 'long' => 73.5]" 
    :zoomLevel="12" />
```

### Map with Markers

```blade
<x-leaflet-maps::leaflet 
    :markers="[
        ['lat' => 4.17, 'long' => 73.5, 'info' => 'You are here!']
    ]" />
```

### Full Feature Example

```blade
<x-leaflet-maps::leaflet 
    :centerPoint="['lat' => 4.17, 'long' => 73.5]"
    :zoomLevel="12"
    :mapOptions="[
        'scrollWheelZoom' => false,
        'zoomControl' => true
    ]"
    :markerOptions="[
        'draggable' => true
    ]"
    :markers="[
        ['lat' => 4.17, 'long' => 73.5, 'info' => 'You are here!']
    ]"
/>
```

### 📌 Popups (bindPopup)

To show popup content on markers, pass an `info` field with the marker:

```blade
<x-leaflet-maps::leaflet 
    :markers="[
        ['lat' => 4.17, 'long' => 73.5, 'info' => 'This is Malé']
    ]"
/>
```

### 🟢 Open Popup by Default

To open the popup automatically on map load, add an `open` key set to `true`:

```blade
<x-leaflet-maps::leaflet 
    :markers="[
        [
            'lat' => 4.17,
            'long' => 73.5,
            'info' => 'Popup is open by default!',
            'open' => true
        ]
    ]"
/>
```

## ⚙️ Customization

To customize views:

```bash
php artisan vendor:publish --tag=leaflet-views
```

## 📄 License

This package is open-sourced software licensed under the [MIT license](LICENSE).
