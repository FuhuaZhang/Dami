/**
 * Created by PC on 2018/7/5.
 */

$('nav a').on('click', function(e) {
    e.preventDefault(); // ��ֹ������ת
    var url = this.href; // �������ĵ�ַ

    $('nav a.current').removeClass('current');
    $(this).addClass('current');

    $('#container').remove();
    $('#content').load('jq-load.html' + ' #container').fadeIn('slow'); // ����������,url��ַ��õ�ַ�µ�ѡ����֮��Ҫ�пո�,��ʾ��url�µ�#container
});

