@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Заявки') }}
            </h2>
            <a href="{{ route('block.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый отзыв') }}</a>
        </div>
   </x-slot>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <x-splade-table :for="$blocks">

                @cell('action', $blocks)
                <div class="flex gap-2">
                    <Link href="{{ route('block.destroy', $blocks->id) }}" class="" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{ __('Удалить') }}</Link>
                    <Link  href="{{ route('block.edit', $blocks->id) }}">Редактировать</Link>
                </div>
                @endcell

                @cell('isActive', $blocks)
                @if($block->isActive == 0)
                    <div class="">
                        {{ __('Не активно') }}
                    </div>
                @elseif($block->isActive == 1)
                    <div class="">
                        {{ __('Активно') }}
                    </div>
                @endif
                @endcell

            </x-splade-table>
        </div>
</x-app-layout>
