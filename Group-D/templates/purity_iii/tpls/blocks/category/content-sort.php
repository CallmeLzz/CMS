<div class="content-sort">
    <div class="sort-bar">
        <div class="views-float">
            <form method="post" action="#" class="compare-form">
                <button type="submit" class="smooth02 btn btn-default button button-medium bt_compare bt_compare">
                    <span>Compare (
                        <strong
                            class="total-compare-val">
                        </strong>)
                    </span>
                </button>
                <input type="hidden" name="compare_product_count" class="compare_product_count" value=""> <input
                    type="hidden" name="compare_product_list" class="compare_product_list" value=""></form>
            <form id="productsSortForm" action="#" class="productsSortForm">
                <div class="select">
                    <label for="selectProductSort">Sort by</label>
                    <select id="selectProductSort" class="selectProductSort form-control">
                        <option value="position:desc" selected="selected">--</option>
                        <option value="price:asc">Price: Lowest first</option>
                        <option value="price:desc">Price: Highest first</option>
                        <option value="name:asc">Product Name: A to Z</option>
                        <option value="name:desc">Product Name: Z to A</option>
                        <option value="quantity:desc">In stock</option>
                        <option value="reference:asc">Reference: Lowest first</option>
                        <option value="reference:desc">Reference: Highest first</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="views dib">
            <a data-toggle="tab" href="#grid">
                <div class="view_btn dib smooth02 active" id="view_grid" title="grid" ></div>
            </a>
            <span class="grid_title">Grid</span>
            <a data-toggle="tab" href="#list">
                <div class="view_btn dib smooth02" id="view_list" title="list"></div>
            </a>
            <span class="list_title">List</span>
        </div>
    </div>
</div>
<!--<div class="tab-content">
    <div id="grid" class="tab-pane fade in active">
        <h3>HOME</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="list" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>-->