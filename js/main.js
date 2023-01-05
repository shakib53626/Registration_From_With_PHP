$(document).ready(function(){


    $('.login-form').hide();
    $('.singup-f').show();


    $('#btn-singup span').addClass('sing-up');

    $('#btn-login').click(function(){


        $('.login-form').show();
        $('.singup-f').hide();


        $('#btn-login span').addClass('sing-up');
        $('#btn-singup span').removeClass('sing-up');
    })

    $('#btn-singup').click(function(){


        $('.login-form').hide();
        $('.singup-f').show();


        $('#btn-login span').removeClass('sing-up');
        $('#btn-singup span').addClass('sing-up');
    })
    $('#login').click(function(){
        $('.login-box').show();
        $('.singup-f').hide();
        $('.login-form').show();
        $('#btn-login span').addClass('sing-up');
        $('#btn-singup span').removeClass('sing-up');
    })
    $('#singin').click(function(){
        $('.login-box').show();
        $('.singup-f').show();
        $('.login-form').hide();
        $('#btn-login span').removeClass('sing-up');
        $('#btn-singup span').addClass('sing-up');
    })
    $('#not-member-singup').click(function(){
        $('.singup-f').show();
        $('.login-form').hide();
        $('#btn-login span').removeClass('sing-up');
        $('#btn-singup span').addClass('sing-up');
    })

})

var login = document.getElementById('login');
var singin = document.getElementById('singin');
var notMemberSingup = document.getElementById('not-member-singup');
    login.addEventListener('click', function(){
        document.getElementById('login-box').style.display='flex';
    })
    singin.addEventListener('click', function(){
        document.getElementById('login-box').style.display='flex';
    })
    notMemberSingup.addEventListener('click', function(){
        document.getElementById('login-box').style.display='flex';
    })
