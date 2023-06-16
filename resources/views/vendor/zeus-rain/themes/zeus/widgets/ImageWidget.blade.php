<div class="py-4">
    @if(isset($data['data']['url']))
        <img src="{{ asset('storage/'.$data['data']['url']) }}">
    @endif
</div>
