var myApp = angular.module("smile", ['ngSanitize']);

myApp.filter('unsafe', ['$sce', function ($sce) {
    return function(html) {
        return $sce.trustAsHtml(html);
    };
}]);

myApp.filter('htmlLinky', function($sanitize, linkyFilter) {
    var ELEMENT_NODE = 1;
    var TEXT_NODE = 3;
    var linkifiedDOM = document.createElement('div');
    var inputDOM = document.createElement('div');

    var linkify = function linkify(startNode) {
        var i, ii, currentNode;

        for (i = 0, ii = startNode.childNodes.length; i < ii; i++) {
            currentNode = startNode.childNodes[i];

            switch (currentNode.nodeType) {
                case ELEMENT_NODE:
                    linkify(currentNode);
                    break;
                case TEXT_NODE:
                    linkifiedDOM.innerHTML = linkyFilter(currentNode.textContent);
                    i += linkifiedDOM.childNodes.length - 1
                    while(linkifiedDOM.childNodes.length) {
                        startNode.insertBefore(linkifiedDOM.childNodes[0], currentNode);
                    }
                    startNode.removeChild(currentNode);
            }
        }

        return startNode;
    };

    return function(input) {
        inputDOM.innerHTML = input;
        return linkify(inputDOM).innerHTML;
    };
});

myApp.filter('filterMultiple',['$filter',function ($filter) {
    return function (items, keyObj) {
        var filterObj = {
            data:items,
            filteredData:[],
            applyFilter : function(obj,key){
                var fData = [];
                if(this.filteredData.length == 0)
                    this.filteredData = this.data;
                if(obj){
                    var fObj = {};
                    if(angular.isString(obj)){
                        fObj[key] = obj;
                        fData = fData.concat($filter('filter')(this.filteredData,fObj));
                    }else if(angular.isArray(obj)){
                        if(obj.length > 0){
                            for(var i=0;i<obj.length;i++){
                                if(angular.isString(obj[i])){
                                    fObj[key] = obj[i];
                                    fData = fData.concat($filter('filter')(this.filteredData,fObj));
                                }
                            }

                        }
                    }
                    if(fData.length > 0){
                        this.filteredData = fData;
                    }
                }
            }
        };

        if(keyObj){
            angular.forEach(keyObj,function(obj,key){
                filterObj.applyFilter(obj,key);
            });
        }

        return filterObj.filteredData;
    }
}]);
myApp.filter('unique', function() {
    return function(input, key) {
        var unique = {};
        var uniqueList = [];
        for(var i = 0; i < input.length; i++){
            if(typeof unique[input[i][key]] == "undefined"){
                unique[input[i][key]] = "";
                uniqueList.push(input[i]);
            }
        }
        return uniqueList;
    };
});

myApp.directive('keyNavigation', function ($timeout) {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 38) {
                var target = $(event.target).prev();
                $(target).trigger('focus');
            }
            if (event.which === 40) {
                var target = $(event.target).next();
                $(target).trigger('focus');
            }
        });
    };
});





