<div class="container">
    <div class="info-main">
        <div class="info-main__value wow fadeInUp" data-wow-delay=".3s">
            47+
        </div>
        <div class="info-main__desc wow fadeInUp" data-wow-delay=".5s">
            {{ __('asd.проектов реализовано') }}
        </div>
    </div>
    <?php $k = \Carbon\Carbon::now()->format('Y')-2017 ?>
    <div class="info-wrap info-wrap__numbers">
        <div class="info-numbers">
            <div class="info-numbers__value wow fadeInUp" data-wow-delay=".3s">
                {{ $k }}
            </div>
            <div class="info-numbers__desc wow fadeInUp" data-wow-delay=".5s">
                {{ __('asd.лет на рынке') }}
            </div>
        </div>
        <div class="info-numbers">
            <div class="info-numbers__value wow fadeInUp" data-wow-delay=".3s">
                27
            </div>
            <div class="info-numbers__desc wow fadeInUp" data-wow-delay=".5s">
                {{ __('asd.сотрудников в штате') }}
            </div>
        </div>
        <div class="info-numbers wow fadeInUp" data-wow-delay=".3s">
            <div class="info-numbers__value">
                4+
            </div>
            <div class="info-numbers__desc wow fadeInUp" data-wow-delay=".5s">
                {{ __('asd.Стран мира сотрудничают с нами') }}
            </div>
        </div>
        <div class="info-numbers wow fadeInUp" data-wow-delay=".3s">
            <div class="info-numbers__value">
                89%
            </div>
            <div class="info-numbers__desc wow fadeInUp" data-wow-delay=".5s">
                {{ __('asd.Клиентов остаются с нами навсегда') }}
            </div>
        </div>
    </div>
</div>
