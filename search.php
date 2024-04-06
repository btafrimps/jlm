<html>

<body>
    <?php include('connection.php');?>


    <div class="search_container">
        <?php
                 $sql ="SELECT * FROM signin";
                 $result = mysqli_query($conn, $sql);
                 $queryResults =mysqli_num_rows($result);

                 if ($queryResults > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='search_box'>
                        <p>" .$row['chef_name']."</p>
                        <p>" .$row['recipe_name']."</p>
                        </div>";

                    }
                 }
                ?>
    </div>
    <?php
    if (isset($_POST['search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM signin WHERE chef_name LIKE '%$search%' or recipe_name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class='search_box'>
                        <p>" .$row['chef_name']."</p>
                        <p>" .$row['recipe_name']."</p>
                        </div>";
            }

        }
        else{
            echo "There is no result matching your search";
        }
    }
?>
</body>

</html>