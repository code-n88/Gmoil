var app = angular.module('EmailApp', [
  'ngRoute'
]);

app.config(function ( $routeProvider ) {
  'use strict';
  // configure urls
  $routeProvider
    // inbox route
    .when('/inbox', {
      templateUrl: 'views/inbox.html',
      controller: 'InboxCtrl', // map js to html scope
    })
    .otherwise({ // default
      redirectTo: '/inbox'
    });
});