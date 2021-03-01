var arrLang = {
    'en': {
        'first': ' Development of websites, mobile applications, automated systems, CRM systems',
        'word' : '“If your business is not on the Internet, then you are not in the business” Bill Gates',
    },
    'ru': {
        'first': 'Разработка web-сайтов, мобильных приложений, автоматизированных систем, CRM систем',
        'word' : '«Если Вашего бизнеса нет в интернете, то Вас нет в бизнесе» Билл Гейтс',
    }

}



$(function() {
   $('.translate').click(function(){
       var lang = $(this).attr('id');

       $('.lang').each(function(index, item){
           $(this).text(arrLang[lang][$(this).attr('key')]);
       });
   });

});