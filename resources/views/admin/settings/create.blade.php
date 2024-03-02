@seoTitle(__('Новые настройки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новые настройки') }}
            </h2>
            <a href="{{ route('settings.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К настройкам') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
            <x-splade-form action="{{ route('settings.store') }}">
                <x-splade-input name="number" label="{{ __('Под заголовок reliable twice') }}" placeholder="{{ __('Есть пробитие!') }}"/>
                <x-splade-input name="address" label="{{ __('Под заголовок reliable twice') }}" placeholder="{{ __('Есть пробитие!') }}"/>
                <x-splade-file class="mb-5" name="logo_img" label="{{ __('Фото reliable') }}" />

                <x-splade-input name="welcome_text" label="{{ __('Под заголовок reliable twice') }}" placeholder="{{ __('Есть пробитие!') }}"/>
                <x-splade-file class="mb-5" name="welcome_img" label="{{ __('Фото reliable') }}" />

                <x-splade-input name="conductor_text" label="{{ __('Под заголовок reliable twice') }}" placeholder="{{ __('Есть пробитие!') }}"/>
                <x-splade-file class="mb-5" name="conductor_img" label="{{ __('Фото reliable') }}" />

                <x-splade-input name="musem_text" label="{{ __('Под заголовок reliable twice') }}" placeholder="{{ __('Есть пробитие!') }}"/>
                <x-splade-file class="mb-5" name="musem_img" label="{{ __('Фото reliable') }}" />

                <x-splade-input name="pred_footer_text" label="{{ __('Под заголовок reliable twice') }}" placeholder="{{ __('Есть пробитие!') }}"/>

                <x-splade-submit label="Сохранить" />
            </x-splade-form>
        </div>
</x-app-layout>
