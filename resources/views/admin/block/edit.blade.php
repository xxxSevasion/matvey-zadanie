@seoTitle(__('Редактировать заявку'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование отзыв') }} "{{ $review->name }}"
            </h2>
            <a href="{{ route('block.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Посмотреть все заявки') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">

            <x-splade-form method="PUT" action="{{ route('block.update', $review->id) }}" :default="$block">

                <x-splade-input name="text"  label="{{ __('Название услуги') }}" placeholder="{{ __('Есть пробитие!') }}"/>
                <x-splade-file name="img"  label="{{ __('Название услуги') }}" placeholder="{{ __('Есть пробитие!') }}"/>

{{--                <x-splade-select name="rating"  label="{{ __('Рейтинг') }}">--}}
{{--                    <option value="1">{{ __('️⭐️') }}</option>--}}
{{--                    <option value="2">{{ __('⭐️⭐️') }}</option>--}}
{{--                    <option value="3">{{ __('⭐️⭐️⭐️') }}</option>--}}
{{--                    <option value="4">{{ __('⭐️⭐️⭐️⭐️') }}</option>--}}
{{--                    <option value="5">{{ __('⭐️⭐️⭐️⭐️⭐️') }}</option>--}}
{{--                </x-splade-select>--}}

                <x-splade-select name="isActive"  label="{{ __('Тип помещения') }}">
                    <option value="0">{{ __('Не Активен') }}</option>
                    <option value="1">{{ __('Активен') }}</option>
                </x-splade-select>

                <x-splade-submit class="mt-4" label="Сохранить" />
            </x-splade-form>
        </div>

</x-app-layout>

{{--<x-splade-form method="PUT" action="{{ route('form.update', $form->id) }}" :default="$form">--}}
{{--    <x-splade-input name="title"  label="{{ __('Название услуги') }}" placeholder="{{ __('Есть пробитие!') }}"/>--}}
{{--    <x-splade-textarea name="description" label="{{ __('Описание услуги') }}" placeholder="{{ __('Пробитие защищенной зоны вокруг дупла') }}" />--}}
{{--    <x-splade-file name="image" label="{{ __('Изображение услуги') }}" />--}}
{{--    <x-splade-input name="price" label="{{ __('Цена за услугу') }}" placeholder="{{ __('Квас!') }}"/>--}}
{{--    <x-splade-select name="isActive"  label="{{ __('Статус услуги') }}">--}}
{{--        <option value="0">{{ __('Не активен') }}</option>--}}
{{--        <option value="1">{{ __('Активен') }}</option>--}}
{{--    </x-splade-select>--}}
{{--    <x-splade-submit label="Сохранить" />--}}
{{--</x-splade-form>--}}
{{--</div>--}}
