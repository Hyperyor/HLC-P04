
function Controller($scope) {
    $scope.comments = [];
    $scope.btn_post = function() {
        if ($scope.cmtName != '') {
            $scope.comments.push($scope.cmtName);
            $scope.cmtName = "";
        }
    }
    $scope.post_cmt = function($home) {
        $scope.comments.splice($home, 1);
    }
    
}