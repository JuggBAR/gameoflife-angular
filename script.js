angular.module('app', []).controller('cont', ($scope, $rootScope)=>{
    $scope.matrix = (len) => {
        let mat = []
        for (let i=0 ; i<len; i++){
            let ref = []
            for(let v=0; v<len; v++){
                ref.push(Math.round(Math.random()*1))
            }
            mat.push(ref)
        }
        return mat
    }
    $scope.move_set = (pos, len)=>{
        let chances = [0, -1, 1]
        let move_set = []
        for (let i of chances){
            for (let v of chances){
                let tmp= [Number(pos[0]) + Number(i), Number(pos[1]) + Number(v)]
                if (!(tmp[0]==pos[0] && tmp[1] == pos[1]) & (tmp[0] > -1 && tmp[1] >-1) && (tmp[0]<len && tmp[1] < len)){
                    move_set.push(tmp)
                }
            }
        }
        return move_set
    }

    $scope.checkStatus =(pos, mat)=>{
        let neig = 0
        for(i of $scope.move_set(pos, mat.length)){
            if (mat[i[0]][i[1]] == 1){
                neig++
            }
        }

        if(mat[pos[0]][pos[1]] == 1){
            if(neig<2){
                return 0
            }else if(neig<=3){
                return 1
            }else{
                return 0
            }
        }else{
            if(neig == 3){
                return 1
            }else{
                return 0
            }
        }
    }
    $scope.mat = $scope.matrix(5)

    $scope.start = async ()=>{
        let cont = 0
        let tmp = $scope.mat.map(a=>a)
        console.log('Start Loop');
        console.table(tmp);
        while(cont<5){
            for (let i=0; i<$scope.mat.length; i++){
                for (let v=0; v<$scope.mat.length; v++){
                    tmp[i][v] = $scope.checkStatus([i,v], tmp)
                }
            }
            console.table(tmp)
            $scope.mat = tmp.map(a=>a)
            console.log($scope);
            await $scope.sleep(1000)
            cont++
        }
        console.log('eND LOOP');
    }
    $scope.sleep = (ms)=>{
        return new Promise(res => setTimeout(res, ms))
    }
    $scope.g = ()=>$scope.mat = $scope.matrix(5)
    
    console.log($scope.move_set([1,1], 3))
    console.log($scope.mat[0])
})
