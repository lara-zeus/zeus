<div class="py-4">
    @if(isset($data['url']))
        <img alt="{{ $data['alt'] ?? '' }}" src="{{ (str($data['url'])->startsWith('http')) ? $data['url'] : asset('storage/'.$data['url']) }}">
    @endif
</div>
