myApp.controller("adminStatsCtrl", function($scope, $sce,$rootScope,$q, $interval) {

    $scope.numberOfPosts = 0;
    $scope.numberOfUsers = 0;
    $scope.numberOfUpvotes = 0;
    $scope.numberOfDownvotes = 0;
    $scope.numberOfComments = 0;

    $scope.initialise = function(){
        $scope.getAllStats();
    };

    $scope.getAllStats = function(){

        var url = document.getElementById('getStatsApiUrl').innerHTML;
        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'html',
            success : function(results, status){


                var stats = JSON.parse(results);
                console.log(stats);

                $scope.numberOfPosts = stats.number_of_posts;
                $scope.numberOfUsers = stats.number_of_users;
                $scope.numberOfUpvotes = stats.number_of_upvotes;
                $scope.numberOfDownvotes = stats.number_of_downvotes;
                $scope.numberOfComments = stats.number_of_comments;

                $scope.safeApply();

            },
            error : function(results, status, error){
                console.log(results);
                console.log(results.responseText);
            },
            complete : function(results, status){

            }
        });

    };

    $interval(function()
    {
        $scope.getAllStats();
        $scope.safeApply();
    }, 10000);


    $scope.safeApply = function(fn) {
        var phase = this.$root.$$phase;
        if (phase == '$apply' || phase == '$digest') {
            if (fn && (typeof(fn) === 'function')) {
                fn();
            }
        } else {
            this.$apply(fn);
        }
    };
    $scope.initialise();

});