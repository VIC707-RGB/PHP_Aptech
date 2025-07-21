<?php 
    require_once('createConnection.php');

    function getAllChampionsDataAccess(){
        $query = '
            select c.id, c.name, c.avatar, n.name as nationality_name
            from Champion as c
            join Nationality as n on c.nationalityId = n.id
        ';

        $conneciton = createConnection();
        $prepareStatement = $conneciton -> prepare($query);
        //Khong co tham so nen khong can phai dua tham so vao
        $executor = $prepareStatement -> execute();
        if (!$executor) {
            // Xử lý lỗi khi không thể thực thi câu truy vấn
            die('Có lỗi xảy ra khi thực thi câu truy vấn: ' . $prepareStatement->error);
        }
    
        $result = $prepareStatement->get_result();
    
        if (!$result) {
            // Xử lý lỗi khi không thể lấy kết quả
            die('Có lỗi xảy ra khi lấy kết quả: ' . $prepareStatement->error);
        }
    
        $champions = [];
    
        while ($row = $result->fetch_assoc()) {
            array_push($champions, $row);
        }
    
        return $champions;
    }

    function getChampionDetailByIdDataAccess($id){
        $query = '
            select c.*, n.name as nationality_name
            from Champion as c
            join Nationality as n on c.nationalityId = n.id
            where c.id = ?
        ';
        $connection = createConnection();
        $prepareStatement = $connection -> prepare($query);
        $prepareStatement -> bind_param('i', $id);
        $executor = $prepareStatement -> execute();
        if (!$executor) {
            // Xử lý lỗi khi không thể thực thi câu truy vấn
            die('Có lỗi xảy ra khi thực thi câu truy vấn: ' . $prepareStatement->error);
        }
    
        $result = $prepareStatement->get_result();
    
        if (!$result) {
            // Xử lý lỗi khi không thể lấy kết quả
            die('Có lỗi xảy ra khi lấy kết quả: ' . $prepareStatement->error);
        }

        $champions = [];
        while ($row = $result->fetch_assoc()) {
            array_push($champions, $row);
        }
    
        // $champions[0];
        $connection -> close();

        $skills = getChampionSkillsByIdDataAccess($id);
        $roles = getChampionRoleByIdDataAccess($id);

        $kq = $champions[0];
        $kq['skills'] = $skills;
        $kq['roles'] = $roles;
        return $kq;

    }
    function getChampionSkillsByIdDataAccess($id){
        $query = '
            select * 
            from skill as s
            where s.championId = ?
        ';
        $connection = createConnection();
        $prepareStatement = $connection -> prepare($query);
        $prepareStatement -> bind_param('i', $id);
        $executor = $prepareStatement -> execute();
        if (!$executor) {
            // Xử lý lỗi khi không thể thực thi câu truy vấn
            die('Có lỗi xảy ra khi thực thi câu truy vấn: ' . $prepareStatement->error);
        }
    
        $result = $prepareStatement->get_result();
    
        if (!$result) {
            // Xử lý lỗi khi không thể lấy kết quả
            die('Có lỗi xảy ra khi lấy kết quả: ' . $prepareStatement->error);
        }

        $skills = [];
        while ($row = $result->fetch_assoc()) {
            array_push($skills, $row);
        }
        $connection -> close();
        return $skills;
        
    }

    function getChampionRoleByIdDataAccess($id){
        $query = '
            select * 
            from roles as r
            join ChampionInRole as rc on r.id = rc.roleId
            where rc.championId = ?
        ';
        $connection = createConnection();
        $prepareStatement = $connection -> prepare($query);
        $prepareStatement -> bind_param('i', $id);
        $executor = $prepareStatement -> execute();
        if (!$executor) {
            // Xử lý lỗi khi không thể thực thi câu truy vấn
            die('Có lỗi xảy ra khi thực thi câu truy vấn: ' . $prepareStatement->error);
        }
    
        $result = $prepareStatement->get_result();
    
        if (!$result) {
            // Xử lý lỗi khi không thể lấy kết quả
            die('Có lỗi xảy ra khi lấy kết quả: ' . $prepareStatement->error);
        }

        $roles = [];
        while ($row = $result->fetch_assoc()) {
            array_push($roles, $row);
        }
        $connection -> close();
        return $roles;
        
    }

    function createOrUpdateChampionDataAccess($champion){
        $conn = createConnection();
        $query = "insert into Champion (name, gender, nationalityId, avatar, mainStory) values (?,?,?,?,?)";
        $prepareStatement = $conn->prepare($query);
        $prepareStatement->bind_param("ssdss",$champion['name'], $champion['gender'], $champion['nationalityId'], $champion['avatar'], $champion['mainStory']);
        $executor = $prepareStatement->execute();



        //Lay ra duoc Id vua moi them vao
        $championId = $prepareStatement -> insert_id;
        $conn -> close();
        // Lap qua tung role => them du lieu vao
        foreach($champion['roles'] as $role){
            $conn = createConnection();
            $query = "insert into ChampionInRole(championId, roleId) values(? , ?)";
            $prepareStatement = $conn->prepare($query);
            $prepareStatement -> bind_param("dd",$championId, $role);
            $executor = $prepareStatement -> execute();
        }





        //Ti nua tra tiep
    }
?>