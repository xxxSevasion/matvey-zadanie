@php
    $setting = App\Models\Setting::find(1);
    @endphp
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__inner">
            <div class="footer__img-section">
                <img  src="{{ Storage::url($setting->logo_img) }}" alt="" class="footer__img">
            </div>
            <div class="footer__number-section">
                <h2>Номер телефона:</h2>
                <p>{{ $setting->number }}</p>
            </div>
            <div class="footer__adres-section">
                <h3>Адрес:</h3>
                <p>{{ $setting->address }}</p>
            </div>
        </div>
    </div>
</footer>
