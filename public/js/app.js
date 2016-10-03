var app = angular.module('app', ['ngMaterial'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}).config(function ($mdThemingProvider) {
    $mdThemingProvider
        .theme('default')
        .primaryPalette(themeColor)
        .accentPalette('red');
});
//https://peer-server-poosan.herokuapp.com
app.controller('globalcontroller', function ($scope) {

    var socialIcon = [
        "zmdi-facebook-box",
        "zmdi-google-plus-box",
        "zmdi-twitter-box",
        "zmdi-pinterest-box",
        "zmdi-instagram",
        "zmdi-skype",
        "zmdi-linkedin-box",
        "zmdi-whatsapp",
        "zmdi-youtube"
    ];
    var soc_color = [
        "#3b5998",
        "#dd4b39",
        "#55acee",
        "#bd081c",
        "#e4405f",
        "#00AFF0",
        "#007bb6",
        "#25D366",
        "#bb0000",
    ]
    var fA = [];

    for (i = 0; i < socialIcon.length; i++) {
        var o = {
            "icon" : socialIcon[i],
            "color" : soc_color[i]
        }

        fA.push(o);
    }

    $scope.socI = fA;

});

$(function () {
    $('.notification-btn').webuiPopover({
        title: 'Notification',
        placement: 'bottom',
        height: '350',
        width: '320',
        animation: 'pop'
    })

    $('.apps-btn').webuiPopover({
        title: 'Application',
        placement: 'bottom',
        height: '350',
        width: '350',
        animation: 'pop'
    })
    $('.scroll').slimScroll({
        height: '350px'
    })
})