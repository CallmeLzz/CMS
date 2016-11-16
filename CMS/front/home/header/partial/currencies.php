<div id="currencies_block_top" class="dib">
    <form>
        <div id="currencyHolder">
            <span class="dib smooth02">
                <span>Dollar</span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
            <ul class="dd_container">
                <li class="dropdown-option smooth02 main_bg_hvr"> 
                    <span class="currency-sign main_bg">
                        <span class="main_color">
                            €
                        </span>
                    </span>Euro
                </li>
                <li class="dropdown-option smooth02 main_bg_hvr" data-value="3" onclick="setCurrency($(this).data('value'));"> <span class="currency-sign main_bg"><span class="main_color">₤</span></span>Pound</li>
            </ul>
            <div><b></b></div>
        </div>
        <p> <input type="hidden" name="id_currency" id="id_currency" value=""> <input type="hidden" name="SubmitCurrency" value=""></p>
    </form>
</div>