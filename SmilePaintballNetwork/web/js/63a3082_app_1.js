var myApp = angular.module("smile", []);
myApp.module('filters-module', [])
    .filter('trustAsResourceUrl', ['$sce', function($sce) {
        return function(val) {
            return $sce.trustAsResourceUrl(val);
        };
    }]);








