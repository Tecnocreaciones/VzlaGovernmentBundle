'use strict';
var angularDependencies = [
    'mainApp.controllers',
    'mainApp.directives',
    'mainApp.filters',
    'mainApp.services',
    'notificationBarModule',
    'notifyModule',
    'tableFormat1',
    'ngSanitize'
];
angularDependencies = angularDependencies.concat(extraAngularDependencies);
var mainApp = angular.module('mainApp',angularDependencies);

mainApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});
