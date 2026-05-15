<div class="row main_info">
	<div class="col-12 col-lg-6 d-flex align-items-center">
		<div class="main_info_wrap wow slideInLeft" data-wow-delay=".4s">
			<h1 class="main_info_title">
			Инвестиции в ОЭЗ Ступино Квадрат </h1>
			<p class="main_info_desc">
				 Это первая частная Особая Экономическая Зона в России, реализуемая за счет частных средств
			</p>
			<p class="main_info_desc">
				 Территория с развитой инфраструктурой, наделенная особым юридическим статусом и льготными экономическими условиями для предпринимателей
			</p>
			<p class="main_info_desc">
				 Кадровый потенциал региона позволяет обеспечить высококвалифицированными сотрудниками производственные предприятия на территории ОЭЗ
			</p>
			<p>
			</p>
			<div class="main_info_buttons">
 <a href="#invest_form" class="btn btn-primary">Стать инвестором</a> <a href="/upload/oez-stupino-kvadrat-prezentaciya-ru.pdf" class="btn btn-secondary">Скачать презентацию</a>
			</div>
		</div>
	</div>
	<div class="offset-lg-1 col-12 col-lg-5 mt-5 mt-lg-0">
		<div class="tax_info justify-content-start wow slideInRight" data-wow-delay=".4s">
			<div class="tax">
 <span class="counter_income"></span><span class="number1" data-max="20" data-min="2">0</span><span class="percent">%</span>
			</div>
			<div class="tax_desc_wrap">
				<div class="tax_img">
 <img src="/upload/images/tax1.svg">
				</div>
				<div class="tax_title">
					 Налог на прибыль
				</div>
				<div class="tax_desc">
					 первые 5 лет
				</div>
			</div>
		</div>
		<div class="tax_info justify-content-start wow slideInRight" data-wow-delay=".4s">
			<div class="tax">
 <span class="counter_transport"></span><span class="number1" data-max="15" data-min="0">0</span><span class="percent">%</span>
			</div>
			<div class="tax_desc_wrap">
				<div class="tax_img">
 <img src="/upload/images/tax2.svg"> <img src="/upload/images/tax3.svg"> <img src="/upload/images/tax4.svg">
				</div>
				<div class="tax_title">
					 Налог на транспорт землю имущество
				</div>
			</div>
		</div>
	</div>
	 <script>
    $(document).ready(function() {
    const wow = new WOW({
        callback: function(box) {
            if ($(box).find('.number1').length > 0) {
                setTimeout(function() {
                    $(box).find('.number1').each(function() {
                        animateCounter($(this));
                    });
                }, 1000);
            }
        }
    });
    wow.init();

    function animateCounter($number) {
        const max = parseInt($number.data('max'), 10); // Get the max value from data-max attribute
        const min = parseInt($number.data('min'), 10); // Get the min value from data-min attribute
        const duration = 2000; // Duration of the animation
        const stepTime = Math.abs(Math.floor(duration / (max - min))); // Time for each step
        let current = max; // Initialize current to start from the max value

        function step() {
            $number.text(current); // Update the displayed number
            current--; // Decrement the current value
            if (current >= min) { // Continue until reaching the min value
                setTimeout(step, stepTime);
            }
        }
        step();
    }
});


</script>
</div>
 <br>