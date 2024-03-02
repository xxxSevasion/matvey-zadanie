@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Заявки') }}
            </h2>
            <a href="{{ route('partner.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый партнер') }}</a>
        </div>
   </x-slot>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <x-splade-table :for="$partners">
                @cell('img', $partners)
                <img src="{{Storage::url($partners->img)}}" alt=>
                @endcell
                @cell('action', $partners)
                <div class="flex gap-2">
                    <Link href="{{ route('partner.destroy', $partners->id) }}" class="" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{ __('Удалить') }}</Link>
                    <Link  href="{{ route('partner.edit', $partners->id) }}">Редактировать</Link>
                </div>
                @endcell

                @cell('isActive', $partners)
                @if($partners->isActive == 0)
                    <div class="">
                        {{ __('Не активно') }}
                    </div>
                @elseif($partners->isActive == 1)
                    <div class="">
                        {{ __('Активно') }}
                    </div>
                @endif
                @endcell

            </x-splade-table>
        </div>
</x-app-layout>
