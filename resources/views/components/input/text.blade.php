@props(['title' => null, 'type' => 'text', 'placeholder' => null, 'name' => null])

<div {{ $attributes->merge(['class' => 'mb-5']) }}>
    <label for={{ $name }} class="block mb-2 text-sm font-medium text-gray-900 ">{{ $title }}</label>
    <input type={{ $type }} name={{ $name }} id={{ $name }}
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="{{ $placeholder }}" required />
</div>
