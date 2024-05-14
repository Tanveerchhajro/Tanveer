<?php
include("components/header.php");
?>
 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded  mx-0">
                    <div class="col-md">
                    
            <!-- Blank End -->
            <h6 class="mb-4">All Categories</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead> 
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">category Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col" class="px-5" 
                                            colspan="2">Action</th>
                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = $pdo->query("SELECT `product`.*, `category`.`CatName`
                                        FROM `product` 
                                            LEFT JOIN `category` ON `product`.`productCatid` = `category`.`catid`;");
                                        $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($row as $values){
                                                ?>
                                      <tr>
                                        <td><?php echo $values['prodcutid'] ?></td>
                                        <td><?php echo $values['prodcutname'] ?></td>
                                        <td><?php echo $values['prodcutprice'] ?></td>
                                        <td><?php echo $values['prodcutQuntiy'] ?></td>
                                        <td><?php echo $_values['productDesscription']?></td>
                                        <td><?php echo $_values['catName']?></td>
                                        <td><img src="<?php echo $proREF . $values
                                        ['produtImage'] ?>" alt="" width="90"</td>
                                            <td><a href="updatecategory.php?Cid=<?php echo $values['catid'] ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="?deleteKey=<?php echo $values['catid']?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                                <?php

                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            </div>
                </div>
            </div>   
<?php
include("components/footer.php");
?>