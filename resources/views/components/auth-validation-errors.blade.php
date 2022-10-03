@props(['errors'])

@if ($errors->any())
<div {{ $attributes }}>
    <div class="font-medium text-red-600">
        {{ __('必要事項を記入、選択してください') }}
    </div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif