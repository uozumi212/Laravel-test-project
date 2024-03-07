<h1>商品ページ</h1>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            一覧表示
        </h2>
    </x-slot>
    <div class="mx-auto px-6">

        @foreach($products as $product)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
                <h1 class="p-4 text-lg font-semibold">
                    商品名；
                    <a href="#" class="text-blue-600">
                        {{$product->name}}</a>
                </h1>
                <hr class="w-full">
                <p class="mt-4 p-4">
                   価格： {{$product->price}}
                </p>
                <div class="p-4 text-sm font-semibold">
                    <p>
                      登録日時：  {{$product->created_at}}
                        {{-- {{$post->user->name}} --}}
{{--                        {{$product->user->name??'匿名'}}--}}
                    </p>
                </div>
            </div>
        @endforeach
        <div class="mb-4">
            {{--            {{ $posts->links() }}--}}
        </div>
    </div>
</x-app-layout>


