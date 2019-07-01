'use-strict'
// Arquivo para uso global de funções
var moduloApp = angular.module('FullStackTestApp', [
    'ui.bootstrap',
    'ngTouch',
    'ngAnimate',
    'full.stack.test.services',
]).config(['$httpProvider', '$interpolateProvider', function ($httpProvider, $interpolateProvider) {
    //Change default interplotation
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

    //Enable cross domain calls
    $httpProvider.defaults.useXDomain = true;

    //Remove the header containing XMLHttpRequest used to identify ajax call
    //that would prevent CORS from working
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
    $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
}])
.run(function($rootScope, carrouselImageService, modalService){
    //Aplica o serviço para uso de modo global
    $rootScope.carrouselImageService = carrouselImageService;
    $rootScope.modalService = modalService;

    /**
     * @description
     * Determines the number of elements in an array, the number of properties an object has, or
     * the length of a string.
     *
     * @param {Object|Array|string} obj Object, array, or string to inspect.
     * @param {boolean} [ownPropsOnly=false] Count only "own" properties in an object
     * @returns {number} The size of `obj` or `0` if `obj` is neither an object nor an array.
     */
    $rootScope.size = function size(obj, ownPropsOnly) {
        var count = 0, key;
        if (angular.isArray(obj) || angular.isString(obj)) {
            return obj.length;
        } else if (angular.isObject(obj)) {
            for (key in obj)
                if (!ownPropsOnly || obj.hasOwnProperty(key))
                    count++;
        }
        return count;
    };
})
