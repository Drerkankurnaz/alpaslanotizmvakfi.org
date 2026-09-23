(function ($) {
    $(document).ready(function () {
        var $wizard = $('.scholarship-wizard');
        if (!$wizard.length) {
            return;
        }

        var $steps = $wizard.find('.wizard-step');
        var $progressItems = $wizard.find('.wizard-progress li');

        function showStep(step) {
            $steps.removeClass('active').hide();
            $wizard.find('.wizard-step[data-step="' + step + '"]').addClass('active').show();
            $progressItems.removeClass('active').filter('[data-step="' + step + '"]').addClass('active');

            var $progress = $wizard.find('.wizard-progress');
            if ($progress.length) {
                $('html, body').animate({ scrollTop: $progress.offset().top - 100 }, 300);
            }
        }

        $wizard.on('click', '.wizard-next', function () {
            var $currentStep = $(this).closest('.wizard-step');
            var valid = true;

            $currentStep.find('input, select, textarea').each(function () {
                if (!this.checkValidity()) {
                    this.reportValidity();
                    valid = false;
                    return false;
                }
            });

            if (!valid) {
                return;
            }

            showStep($(this).data('next'));
        });

        $wizard.on('click', '.wizard-prev', function () {
            showStep($(this).data('prev'));
        });

        showStep(1);

        // Karakter sayacı
        $wizard.find('[data-maxlength-counter]').each(function () {
            var $el = $(this);
            var max = $el.attr('maxlength');
            var $counter = $wizard.find($el.data('maxlength-counter'));

            function update() {
                $counter.text($el.val().length + '/' + max);
            }

            $el.on('input', update);
            update();
        });

        // Adım 4 — "Başvurunuzu Kontrol Edin" için canlı özet
        $wizard.find('[data-summary]').each(function () {
            var $el = $(this);
            var $target = $wizard.find('[data-summary-for="' + $el.attr('name') + '"]');

            function update() {
                var val = '';

                if ($el.is('select')) {
                    val = $el.find('option:selected').text();
                } else if ($el.is(':checkbox')) {
                    val = $el.is(':checked') ? 'Evet' : 'Hayır';
                } else if ($el.attr('type') === 'file') {
                    val = $el[0].files && $el[0].files.length ? $el[0].files[0].name : '';
                } else {
                    val = $el.val();
                }

                $target.text(val || '-');
            }

            $el.on('change input', update);
            update();
        });
    });
})(jQuery);
