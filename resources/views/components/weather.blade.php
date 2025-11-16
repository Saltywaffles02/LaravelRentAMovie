<div>
    <div class="p-4 bg-blue-200 rounded shadow w-64 flex items-center space-x-4">
        @if($icon)
            <img src="http://openweathermap.org/img/wn/{{ $icon }}@2x.png" alt="Weather icon">
        @endif
        <div>
            <div class="text-xl font-bold">{{ $temperature }}°C</div>
            <div class="text-gray-700 capitalize">{{ $description }}</div>
            <div class="text-sm text-gray-600">{{ $city }}</div>
        </div>
    </div>
</div>
