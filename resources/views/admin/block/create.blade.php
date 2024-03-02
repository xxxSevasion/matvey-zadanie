@seoTitle(__('Новая заявка'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новый отзыв') }}
            </h2>
            <a href="{{ route('block.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Посмотреть все заявки') }}</a>
        </div>
   </x-slot>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <x-splade-form action="{{ route('block.store') }}">
{{--                <x-splade-select label="Категория товара" name="category_id" :options="$forms"/>--}}
                <x-splade-textarea name="text" label="{{ __('Отзыв') }}" placeholder="{{ __('Картинка') }}"/>
                <x-splade-file name="img" label="{{ __('Картинка ') }}" />

{{--                <x-splade-select name="rating"  label="{{ __('Статус') }}">--}}
{{--                    <option value="1">{{ __('⭐️') }}</option>--}}
{{--                    <option value="2">{{ __('⭐️⭐️') }}</option>--}}
{{--                    <option value="3">{{ __('⭐️⭐️⭐️') }}</option>--}}
{{--                    <option value="4">{{ __('⭐️⭐️⭐️⭐️') }}</option>--}}
{{--                    <option value="5">{{ __('⭐️⭐️⭐️⭐️⭐️') }}</option>--}}
{{--                </x-splade-select>--}}

                <x-splade-select name="isActive"  label="{{ __('Статус услуги') }}">
                    <option value="0">{{ __('Не активен') }}</option>
                    <option value="1">{{ __('Активен') }}</option>
                </x-splade-select>

                <x-splade-submit class="mt-4" label="Сохранить" />
            </x-splade-form>
        </div>
</x-app-layout>
