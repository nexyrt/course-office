@props(['name'=>'', 'placeholder'=>''])

<div class="mb-4">
    <label for={{$name}} class="block mb-2 text-sm font-medium text-gray-700">Nomor Telepon</label>
    <input type="tel" name={{$name}} id={{$name}}
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="{{$placeholder}}" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
</div>
