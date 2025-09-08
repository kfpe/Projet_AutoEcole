<div class="card">
    <div class="card-header"> 
        {{ $header ?? 'Ce Header par defaut'}}
    </div>
    {{ $slot}}
    <div class="card-footer">
        {{ $footer ?? 'Ce poieds de page'}}
    </div>
</div>