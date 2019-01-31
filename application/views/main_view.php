<form action="/" method="post" id="main_form">
    <div class="row">
        <div class="col-md-6 text-right"></div>
        <div class="col-md-3 text-right">
            <label for="list_filter">Type:</label>
            <select name="filter" id="list_filter" onchange="form_submit();">
                <option value="0">All</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="hidden" name="filter_now" id="filter_now" value="<?php echo $this->filter; ?>">
        </div>
        <div class="col-md-3 ">
            <label for="list_ordering">Order By:</label>
            <select name="order" id="list_ordering" onchange="form_submit();">
                <option value="ts ASC">Time ASC</option>
                <option value="ts DESC">Time DESC</option>
            </select>
            <input type="hidden" name="order_now" id="order_now" value="<?php echo $this->order; ?>">
        </div>
    </div>

    <br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th width="10%">ID</th>
            <th width="20%">Time</th>
            <th width="20%">Type</th>
            <th>Message</th>
        </tr>
        </thead>
        <tbody>
		<?php foreach ($this->items as $i => $item) : ?>
            <tr class="row<?php echo $i % 2; ?>">
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $this->convert_time($item['ts']); ?></td>
                <td><?php echo $item['type']; ?></td>
                <td><?php echo $item['message']; ?></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
        <div id="dark-pagination" class="pagination"></div>
        <input type="hidden" name="page" value="<?php echo $this->page ?>">
    </div>
</form>


<script>
    $(function () {
        $('#dark-pagination').pagination({
            items: <?php echo $this->items_count ?>,
            itemsOnPage: 100,
            cssStyle: 'dark-theme',
            currentPage: <?php echo $this->page; ?>,
            onPageClick: function(){changePage()},
            selectOnClick: true,
            useAnchors: false
        });
    });
</script>