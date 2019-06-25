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
            {nome: 'Brasil', sigla: 'BR'}
        ];

        $scope.states = [
            {nome: 'Minas Gerais', sigla: 'MG'}
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
                url: 'http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C',
                dataType: 'jsonp',
                data: data,
                contentType: "application/json",
                headers: {
                    "Accept": "application/json, text/javascript",
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Access-Control-Allow-Origin": "http://localhost",
                    "Access-Control-Allow-Origin": "POST",
                    "Access-Control-Allow-Origin": "Content-Type",
                },
            };

            $http(request).then(
                function(response) {
                    alertify.success('Formulário cadastrado.');
                },function(response) {
                    alertify.error('Não foi possível cadastrar.');
                }
            );
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
            {nome: 'Brasil', sigla: 'BR'}
        ];

        $scope.states = [
            {nome: 'Minas Gerais', sigla: 'MG'}
        ];

        $ctrl.sendForm = function() {
            var data = {
                "method":"createLeads",
                "params":{
                "objects":[
                    {
                        "ownerID": "313450362",
                        "leadStatus":"open",
                        "firstName": $ctrl.contact.firstName,
                        "lastName": $ctrl.contact.lastName,
                        "country": $ctrl.contact.country,
                        "street": $ctrl.contact.street,
                        "city": $ctrl.contact.city,
                        "emailAddress": $ctrl.contact.emailAddress,
                        "state": $ctrl.contact.state,
                        "mobilePhoneNumber": $ctrl.contact.mobilePhoneNumber
                    }
                ]
                },
                "id":"1"
            };

            var request =  {
                method: 'POST',
                url: 'http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C',
                dataType: 'jsonp',
                data: data,
                contentType: "application/json",
                headers: {
                    "Accept": "application/json, text/javascript",
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Access-Control-Allow-Origin": "http://localhost",
                    "Access-Control-Allow-Origin": "POST",
                    "Access-Control-Allow-Origin": "Content-Type",
                },
            };

            $http(request).then(
                function(response) {
                    alertify.success('Formulário cadastrado.');
                },function(response) {
                    alertify.error('Não foi possível cadastrar.');
                }
            );
        }
    }
})