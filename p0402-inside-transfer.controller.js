(function () {
    'use strict';
    angular
        .module('swibApp')
        .controller('P0402InsideTransferController', P0402InsideTransferController);

    P0402InsideTransferController.$inject = ['$sessionStorage', 'P0402InsideTransferService', '$state', '$filter'];

    function P0402InsideTransferController($sessionStorage, P0402InsideTransferService, $state, $filter) {
        var vm = this;
        var service = P0402InsideTransferService;

        vm.transaction = {
            account: {},
            accounts: [],
            trustedList: [],
            amount: '',
            fee: '',
            content: '',
            saveAsTemplate: false,
            date: new Date()
        };

        vm.currency = 'VND';

        init();
        function init() {
            if($sessionStorage.transaction)
            {
                vm.transaction = $sessionStorage.transaction;
            }
            else
            {
                service.query().$promise.then(function(data) {
                    vm.transaction.accounts = data;
                });
                service.trustedList().$promise.then(function(data) {
                    vm.transaction.trustedList = data;
                    console.log(data);
                });

            }
        }

        vm.valid = function () {
            service.getValid().$promise.then(function(data) {
                if (angular.equals("00", data.responseCode)) {
                    $sessionStorage.transaction = vm.transaction;
                    $state.go("p0402-inside-transfer.verification");
                }
            })

        }

        vm.trustedList = function(){
            return service.trustedList();
        }

        vm.benSelected = function(ben){
            console.log(ben);
            //ben="vm.transaction.ben"
        }


        console.log(parse(20434));
        console.log(parse(21156));
        console.log(parse(206511078));
        function read(amount){

            var numbers = ["không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"];

            var tram = parseInt( amount / 100);
            var chuc = parseInt( (amount % 100) / 10);
            var donvi = amount % 10;
            var result = '';
            if( tram + chuc + donvi == 0) return '';

            if( tram != 0){

                result += numbers[tram] + " trăm";
            }
            if ((chuc == 0) && (donvi != 0)) result += " linh";
            if (chuc == 1) result += " mười";
            if ((chuc != 0) && (chuc != 1)) {
                if(result.length > 0)
                    result += ' ';
                result += numbers[chuc] + " mươi";
            }

            if (donvi != 0){
                donvi = numbers[donvi];
                switch (donvi)
                {
                    case 1:
                        if ( chuc > 2){
                            donvi = "mốt";
                        }
                        break;
                    case 5:
                        if (chuc != 0){
                            donvi = "lăm";
                        }
                        break;
                    default:
                        break;
                }
                result += ' ' + donvi;
            }
            return result;
        }

        function parse(amount)
        {
            var tmp = '';
            var result = '';
            var thousands = ["nghìn", "triệu", "tỷ", " nghìn tỷ"];

            if (amount < 0 || amount > 8999999999999999)
            {
                return result;
            }
            var formatAmount = String($filter('number')(amount, 0));
            console.log(formatAmount);
            var splits = formatAmount.split(',');
            var size = splits.length;
            for(var i = 0; i < size; i++){

                tmp = read(splits[i]);
                var thousand = thousands[size - 2 - i];
                if(thousand) tmp += ' ' + thousand + ', ';
                result += tmp;
            }

            result = result.substring(0, 1).toUpperCase() + result.substring(1);
            return result;
        }

    }
})();
