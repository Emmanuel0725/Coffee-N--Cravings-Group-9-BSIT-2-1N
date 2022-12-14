<?php

require __DIR__ . "../../../../database.php";
include "../../../system.php";
include "../../../data.php";

$CATEGORIES = GetCategories($database);
$ITEM = GetProduct($_POST["item"], $database);

?>


<div class="popup-container-parent">
    <div class="popup-background"></div>
    <div class="popup-content">
        <div class="popup-container">
            <div class="popup-header">
                <div class="icon-title">
                    <div class="icon">
                        <?php echo UseIcon("plus-circle") ?>
                    </div>
                    <div class="title">
                        <span>EDIT MENU ITEM</span>
                    </div>

                </div>
                <div class="preview-image">
                    <div class="preview">
                        <img src="<?php echo $PRODUCTIMAGEPATHUPLOADS . $ITEM["image"] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="popup-body">
                <form action="" class="popup-form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" value="<?php echo $ITEM["name"] ?>" name="name" placeholder="Item Name">
                    </div>
                    <div class="form-group">
                        <input type="number" value="<?php echo $ITEM["price"] ?>" name="price" placeholder="Item Price">
                    </div>

                    <div class="form-group">
                        <?php echo CreateComboBox("category", $ITEM["category"], ToKeysObj($CATEGORIES, "category_id", "category_name", "Category Name")) ?>
                    </div>

                    <div class="form-group">
                        <input type="file" class="image-upload" name="image" value="<?php echo $PRODUCTIMAGEPATHUPLOADS . $ITEM["image"] ?>" placeholder="Choose Image">
                    </div>

                </form>
            </div>
            <div class="popup-footer">
                <div class="center-container">
                    <div class="flex-content">
                        <div class="icon-button blue popup-save-button">
                            <div class="icon">
                                <?php echo UseIcon("check") ?>
                            </div>
                            <div class="text">
                                <span>Save</span>
                            </div>
                        </div>
                        <div class="icon-button red popup-cancel-button">
                            <div class="icon">
                                <?php echo UseIcon("back") ?>
                            </div>
                            <div class="text">
                                <span>Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>