'use-strict'

angular.module('full.stack.test.services', [])
    .service('carrouselImageService',['$http', function($http){
        this.getImages = function() {
            var request =  {
                method: 'GET',
                url: 'https://jsonplaceholder.typicode.com/photos',
                dataType: 'json',
                contentType: "application/json",
                headers: {
                    'Accept': 'application/json, text/javascript',
                    'Content-Type': 'application/json; charset=utf-8'
                },
            };

            return $http(request);
        }
    }])
    .service('modalService', ['$uibModal', function($uibModal){
        this.modal = function($scope) {
            var modalConfig = {
                animation: true,
                windowTemplateUrl: '../node_modules/ui-bootstrap4/template/modal/window.html',
                component: 'modalComponent',
                resolve: {
                    items: function () {
                    return $scope.items;
                    }
                }
            };
            return $uibModal.open(modalConfig).result;
        };
    }])