<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品購入フォーム
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6">
        @if(session('message'))
            <div class="text-red-600 font-bold">
                {{session('message')}}
            </div>
        @endif
        <form method="post" action="{{ route('product.store' ) }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semibold mt-4">商品名</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md" id="name" value="{{old('name')}}">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="price" class="font-semibold mt-4">価格</label>
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                <input type="text" name="price" class="w-auto py-2 border border-gray-300 rounded-md" id="price">
          {{old('price')}}

            </div>
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
