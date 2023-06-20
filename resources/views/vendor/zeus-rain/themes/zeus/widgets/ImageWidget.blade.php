<div class="py-4">
    @if(isset($data['url']))
        <img src="{{ asset('storage/'.$data['url']) }}">
    @endif
</div>
