function start() {
    var select_filter = $('#list_filter'),
        select_order = $('#list_ordering'),
        filter_now = $('#filter_now').val(),
        order_now = $('#order_now').val();

    $(select_filter).find('option[value="' + filter_now + '"]').attr('selected', 'selected');
    $(select_order).find('option[value="' + order_now + '"]').attr('selected', 'selected');

}

function changePage(pageNumber) {
    console.log(pageNumber);
    var pagination = $('#dark-pagination'),
        form = $('#main_form');

    var page_num = pagination.pagination('getCurrentPage');
    $('input[name=page]').val(page_num);
    console.log('weq');
    form.submit();

}

function form_submit() {
    var select_filter = $('#list_filter').val(),
        filter_now = $('#filter_now').val();

    if (select_filter != filter_now) {
        $('input[name=page]').val(1);
    }

    $('#main_form').submit();
}

$(document).ready(function () {
    start();
});
