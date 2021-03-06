<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/tools/reset.css">
    <link rel="stylesheet" href="../styles/main_styles.css">
    <title>Product Add</title>
</head>
<body>
<div class="page-content-wrapper">
    <div class="add-product page-content">
        <header class="add-product_header page-content_header">
            <h2>Product Add</h2>
            <div>
                <button id="save-product-btn">Save</button>
                <button id="cancel-add-product-btn">Cancel</button>
            </div>
        </header>

        <div class="add-product_content main_content">
            <form id="product_form">
                <div class="item_properties">
                    <div>
                        <label for="sku">SKU</label>
                        <label for="name">Name</label>
                        <label for="price">Price ($)</label>
                    </div>

                    <div>
                        <input type="text" id="sku" placeholder="sku">
                        <input type="text" id="name" placeholder="name">
                        <input type="number" id="price" placeholder="price">
                    </div>
                </div>

                <div class="product-type-wrapper">
                    <label for="productType">Type Switcher</label>
                    <select name="productType" id="productType">
                        <option value="none" selected disabled hidden>Type Switcher</option>
                        <option value="#dvd">DVD</option>
                        <option value="#book">Book</option>
                        <option value="#furniture">Furniture</option>
                    </select>
                </div>

                <div class="product-description">
                    <div class="dvd-description">
                        <p>Please provide size in MB</p>
                        <label for="size">Size (MB)</label>
                        <input type="number" placeholder="size" id="size">
                        <p>"Product description"</p>
                    </div>

                    <div class="furniture-description">
                        <p>Please provide dimensions in HxWxL format</p>
                        <div class="furniture-description-content">
                            <div>
                                <label for="height">Height (CM)</label>
                                <label for="width">Width (CM)</label>
                                <label for="length">Length (CM)</label>
                            </div>

                            <div>
                                <input type="number" name="height" id="height" placeholder="height">
                                <input type="number" name="width" id="width" placeholder="width">
                                <input type="number" name="length" id="length" placeholder="length">
                            </div>
                        </div>
                        <p>"Product description"</p>
                    </div>

                    <div class="book-description">
                        <p>Please provide product weight in KG</p>
                        <label for="weight">Weight (CM)</label>
                        <input type="number" name="weight" id="weight" placeholder="weight">
                        <p>"Product description"</p>
                    </div>
                </div>
            </form>
        </div>

        <footer class="add-product_footer page-content_footer">
            <p>Scandiweb Test Assignment</p>
        </footer>
    </div>
</div>
</body>
</html>