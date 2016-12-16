var app = angular.module('mobile', ['ngMaterial', 'md.data.table'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})


app.config(function ($mdThemingProvider) {
    $mdThemingProvider
        .theme('default')
        .primaryPalette('blue')
        .accentPalette('green');
});

app.controller('maincontroller', function ($scope) {

})

app.controller('usercontroller', function ($scope) {
    console.log(users)
    $scope.users = users.results;
})