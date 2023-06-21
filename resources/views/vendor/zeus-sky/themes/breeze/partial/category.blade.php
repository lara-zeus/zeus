<a href="{{ route('tags',[$category->type,$category->slug]) }}" class="px-2 py-1 text-sm text-secondary-600 inline-flex items-center justify-center">
    {{ $category->name ?? '' }}
</a>
