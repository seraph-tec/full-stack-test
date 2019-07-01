angular.module('FullStackTestApp')
    .controller('FullStackTestController', ['$scope', '$http', '$log', '$document', 'modalService', 'carrouselImageService' , '$location', '$anchorScroll', function($scope, $http, $log, $document, modalService, carrouselImageService, $location, $anchorScroll) {

        $scope.contact = {
            firstName: null,
            lastName: null,
            country: null,
            street: null,
            city: null,
            emailAddress: null,
            state: null,
            mobilePhoneNumber: null
        }

        $scope.carrouselImageService.getImages().then(
            function(response) {
                $scope.getImages = [];
                var images = [];
                var cards = [];
                var qtdCards = $scope.size(response.data) / 500;
                var primeiroCardIndex = 0;
                var ultimoCardIndex = 3;
                for(i = 0; i <= qtdCards; i++) {
                    if(i == qtdCards)break;
                    for(j = primeiroCardIndex; j <= ultimoCardIndex; j++) {
                        images['url']   = response.data[j].url;
                        images['title'] = response.data[j].title;
                        cards.push({url: images['url'], title: images['title']});
                    }
                    $scope.getImages.push(cards);
                    cards = [];
                    primeiroCardIndex += 4;
                    ultimoCardIndex += 4;
                }
            },
            function(response){
                alertify.error('Não foi possível carregar as imagens.');
            }
        );

        $scope.openComponentModal = function () {
            $scope.modalService.modal($scope).then(function () {

            }, function () {
                $log.info('modal-component dismissed at: ' + new Date());
            });
        };

        $scope.countries = [
            {nome: 'Brasil', sigla: 'BR'},
            {nome: 'Argentina', sigla: 'AR'},
            {nome: 'Chile', sigla: 'CH'},
            {nome: 'Paraguay', sigla: 'PY'},
            {nome: 'Uruguay', sigla: 'UY'},
        ];

        $scope.states = [
            {nome: 'Minas Gerais', sigla: 'MG'},
            {nome: 'Buenos Aires', sigla: 'BA'},
            {nome: 'Atacama', sigla: 'AT'},
            {nome: 'Assunção', sigla: 'AS'},
            {nome: 'Montevidéu', sigla: 'MO'},
        ];

        $scope.goToForm = function(event) {
            $location.hash('contactForm');
            $anchorScroll();
        };

        $scope.sendForm = function() {
            var data = {
                "method":"createLeads",
                "params":{
                    "objects":[
                        {
                            "ownerID": "313450362",
                            "leadStatus":"open",
                            "firstName": $scope.contact.firstName,
                            "lastName": $scope.contact.lastName,
                            "country": $scope.contact.country,
                            "street": $scope.contact.street,
                            "city": $scope.contact.city,
                            "emailAddress": $scope.contact.emailAddress,
                            "state": $scope.contact.state,
                            "mobilePhoneNumber": $scope.contact.mobilePhoneNumber
                        }
                    ]
                },
                "id":"1"
            };

            var request =  {
                method: 'POST',
                url: 'http://'+window.location.hostname+'/full-stack-test/public/send',
                data: data,
            };

            $http(request).then(
                function(response) {
                    console.log(response);
                    alertify.success(response.data.mensagem);
                },function(response) {
                    alertify.error(response.data.mensagem);
                }
            );

            $scope.contact = {
                firstName: null,
                lastName: null,
                country: null,
                street: null,
                city: null,
                emailAddress: null,
                state: null,
                mobilePhoneNumber: null
            }
        }
    }]
).component('modalComponent', {
    templateUrl: 'component/modal-component.html',
    bindings: {
        resolve: '<',
        close: '&',
        dismiss: '&'
    },
    controller: function($scope, $http) {
        var $ctrl = this;
        $ctrl.contact = {
            firstName: null,
            lastName: null,
            country: null,
            street: null,
            city: null,
            emailAddress: null,
            state: null,
            mobilePhoneNumber: null
        }

        $ctrl.$onInit = function(){}
        $ctrl.okay = function () {
            $ctrl.close({$value: 'close'});
        };
        $ctrl.cancel = function () {
            $ctrl.dismiss({$value: 'cancel'});
        };

        $scope.countries = [
            {nome: 'Brasil', sigla: 'BR'},
            {nome: 'Argentina', sigla: 'AR'},
            {nome: 'Chile', sigla: 'CH'},
            {nome: 'Paraguay', sigla: 'PY'},
            {nome: 'Uruguay', sigla: 'UY'},
        ];

        $scope.states = [
            {nome: 'Minas Gerais', sigla: 'MG'},
            {nome: 'Buenos Aires', sigla: 'BA'},
            {nome: 'Atacama', sigla: 'AT'},
            {nome: 'Assunção', sigla: 'AS'},
            {nome: 'Montevidéu', sigla: 'MO'},
        ];

        $ctrl.sendForm = function() {
            var data = {
                "method":"createLeads",
                "params":{
                    "objects":[
                        {
                            "ownerID": "313450362",
                            "leadStatus":"open",
                            "firstName": $scope.contact.firstName,
                            "lastName": $scope.contact.lastName,
                            "country": $scope.contact.country,
                            "street": $scope.contact.street,
                            "city": $scope.contact.city,
                            "emailAddress": $scope.contact.emailAddress,
                            "state": $scope.contact.state,
                            "mobilePhoneNumber": $scope.contact.mobilePhoneNumber
                        }
                    ]
                },
                "id":"1"
            };

            var request =  {
                method: 'POST',
                url: 'http://'+window.location.hostname+'/full-stack-test/public/send',
                data: data,
            };

            $http(request).then(
                function(response) {
                    console.log(response);
                    alertify.success(response.data.mensagem);
                },function(response) {
                    alertify.error(response.data.mensagem);
                }
            );

            $ctrl.contact = {
                firstName: null,
                lastName: null,
                country: null,
                street: null,
                city: null,
                emailAddress: null,
                state: null,
                mobilePhoneNumber: null
            }
        }
    }
})
