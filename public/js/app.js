var app = angular.module('app', ['ngMaterial'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}).config(function ($mdThemingProvider) {
    $mdThemingProvider
        .theme('default')
        .primaryPalette(themeColor)
        .accentPalette('red');
});
app.controller('globalcontroller', function ($scope) {

});

$(function () {
    $('#notification-btn').webuiPopover({
        title:'Notification',
        placement:'bottom',
        height:'350',
        animation:'pop'
    })
    $('.scroll').slimScroll({
        height: '350px'
    })
})