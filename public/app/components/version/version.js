'use strict';

angular.module('restoApp.version', [
  'restoApp.version.interpolate-filter',
  'restoApp.version.version-directive'
])

.value('version', '0.1');
