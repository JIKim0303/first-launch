const QUESTIONS = ['.q1', '.q2', '.q3'];
var qPage = 0;
var ans1 = '';
var ans2 = '';
var ans3 = '';

window.addEventListener('DOMContentLoaded', function start(){
    $('.btn-start').on('click', function() {
        $('.title-page-wrap').fadeOut(1000);
        $(QUESTIONS[qPage]).fadeIn(1000);
    });

/*各質問ページでYes/Noを選択したときの処理*/
    $(function gaming() {
        const SELECTING = $('.select').on('click', function(){
            $(this).toggleClass('counted');
            $(this).siblings($('.select')).not($(this)).removeClass('counted');
            $('.btn-next').prop('disabled', false);
            var count = $(this).parents(QUESTIONS[qPage]).find('.counted');
            var idName = '';
            idName = ($(this).attr('id'));
            if (idName === ('q1yes')) {
                ans1 = 1;
            } else if (idName === ('q1no')) {
                ans1 = 0;
            };
            if (idName === ('q2yes')) {
                ans2 = 1;
            } else if (idName === ('q2no')) {
                ans2 = 0;
            };
            if (idName === ('q3yes')) {
                ans3 = 1;
            } else if (idName === ('q3no')) {
                ans3 = 0;
            };
        });

        $('.btn-next').on('click', function nextPage() {
            $(QUESTIONS[qPage]).fadeOut(2000);
            qPage++;
            $(QUESTIONS[qPage]).fadeIn(1000);
            if ($(QUESTIONS[qPage]) >= $('.q3')) {
                ($('.btn-result')).prop('disabled', false);
            };

            $('.btn-result').on('click', function() {
                $(QUESTIONS[qPage]).hide();
                if(ans1 == 1 && ans2 == 1 && ans3 == 1) {
                    $('.a1').fadeIn(1000);
                } else if(ans1 == 1 && ans2 == 0 && ans3 == 1) {
                    $('.a2').fadeIn(1000);
                } else if(ans1 == 1 && ans2 == 1 && ans3 == 0) {
                    $('.a3').fadeIn(1000);
                } else if(ans1 == 1 && ans2 == 0 && ans3 == 0) {
                    $('.a4').fadeIn(1000);
                } else if(ans1 == 0 && ans2 == 0 && ans3 == 0) {
                    $('.a5').fadeIn(1000);
                } else if(ans1 == 0 && ans2 == 1 && ans3 == 0) {
                    $('.a6').fadeIn(1000);
                } else if(ans1 == 0 && ans2 == 0 && ans3 == 1) {
                    $('.a7').fadeIn(1000);
                } else if(ans1 == 0 && ans2 == 1 && ans3 == 1) {
                    $('.a8').fadeIn(1000);
                };
            });
        });

        $('.close-btn, .tool-btn.btn-finish').on('click', function() {
            $('.page-wrap').fadeOut(2000);
            location.reload();
        });
    });
});