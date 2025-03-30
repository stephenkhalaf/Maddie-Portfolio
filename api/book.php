<?php  include_once "./partials/header.php"?>
<style>
    .pagination {
    display: flex;
    justify-content: center;
    margin: 20px 0;
    }

    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        color: #007bff;
    }

    .pagination a:hover {
        text-decoration: underline;
    }

    .pagination strong {
        margin: 0 5px;
        color: #333;
    }

</style>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Books <button style="margin-left:30px; background:white;"><a href="add-book.php"><img src="assets/img/add.svg" alt="" style="font-weight:bold; font-size:100px;width:50px;height:50px;object-fit:cover;cursor:pointer"></a></button></h2> 
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Book Type</th>
                                    <th>title</th>
                                    <th>Description</th>
                                    <th>Link To Book</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    $sql = mysqli_query($conn, "SELECT * FROM books");

                                    $limit = 5;
                                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                    $offset = ($page - 1) * $limit;
                                    $total = mysqli_num_rows($sql);
                                    $totalPages = ceil($total / $limit);

                                    $sql = mysqli_query($conn, "SELECT * FROM books LIMIT $limit OFFSET $offset");

                                    $id = 1;
                                    if(mysqli_num_rows($sql) > 0){
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "
                                            <tr>
                                            <td>$id</td>
                                            <td>".$row['type']."</td>
                                            <td>".$row['title']."</td>
                                            <td>".$row['description']."</td>
                                            <td>".$row['link']."</td>
                                            <td><img src='../uploads/".$row['image']."' /></td>
                                            <td>
                                                <a href='update-book.php?book_id=".$row['id']."' class='btn btn-success' >Update</a>
                                                <a href='php/delete.php?book_id=".$row['unique_id']."' class='btn btn-danger'>Delete</a>
                                            </td>
                                            </tr>
                                            
                                            ";
                                            

                                            $id++;
                                        };
                                        
                                        
                                    }else{
                                        echo "No data";
                                    }

                                ?>
            
                            </tbody>

                        </table>


                        <div class="pagination">
                                    <?php if ($page > 1): ?>
                                        <a href="book.php?page=<?= $page - 1; ?>">Previous</a>
                                    <?php endif; ?>

                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <?php if ($i == $page): ?>
                                            <strong><?= $i; ?></strong>
                                        <?php else: ?>
                                            <a href="book.php?page=<?= $i; ?>"><?= $i; ?></a>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php if ($page < $totalPages): ?>
                                        <a href="book.php?page=<?= $page + 1; ?>">Next</a>
                                    <?php endif; ?>
                            </div>

                </div>
            </div>


            
        </div>
    </div>
<?php  include_once "./partials/footer.php"?>