'use strict';
/* Filters */

angular.module('mainApp.filters', []).
  filter('interpolate', ['version', function(version) {
    return function(text) {
      return String(text).replace(/\%VERSION\%/mg, version);
    }
  }])
  .filter('myDate',function($filter){
      return function(dateString){
          var mydate = new Date(dateString);
          var dateFormated = $filter('date')(mydate, 'yyyy-MM-dd');
          return dateFormated;
      };
  })
  .filter('myDateTime',function($filter){
      return function(dateString){
          var mydate = new Date(dateString);
          var dateFormated = $filter('date')(mydate, 'yyyy-MM-dd HH:mm a');
          return dateFormated;
      };
  })
  ;
