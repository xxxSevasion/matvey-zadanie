@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Заявки') }}
            </h2>
            <a href="{{ route('review.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый отзыв') }}</a>
        </div>
   </x-slot>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <x-splade-table :for="$reviews">

                @cell('action', $reviews)
                <div class="flex gap-2">
                    <Link href="{{ route('review.destroy', $reviews->id) }}" class="" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{ __('Удалить') }}</Link>
                    <Link  href="{{ route('review.edit', $reviews->id) }}">Редактировать</Link>
                </div>
                @endcell

                @cell('rating', $reviews)
                @if($reviews->rating == 1)
                    <div class="">
                        {{ __('⭐️') }}
                    </div>
                @elseif($reviews->rating == 2)
                    <div class="">
                        {{ __('⭐️⭐️') }}
                    </div>
                @elseif($reviews->rating == 3)
                    <div class="">
                        {{ __('⭐️⭐️⭐️') }}
                    </div>
                @elseif($reviews->rating == 4)
                    <div class="">
                        {{ __('⭐️⭐️⭐️⭐️') }}
                    </div>
                @elseif($reviews->rating == 5)
                    <div class="">
                        {{ __('⭐️⭐️⭐️⭐️⭐') }}
                    </div>
                @endif
                @endcell

                @cell('isActive', $reviews)
                @if($reviews->isActive == 0)
                    <div class="">
                        {{ __('Не активно') }}
                    </div>
                @elseif($reviews->isActive == 1)
                    <div class="">
                        {{ __('Активно') }}
                    </div>
                @endif
                @endcell

            </x-splade-table>
        </div>
</x-app-layout>
