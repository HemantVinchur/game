var selected_vals = { 'col': 0 };


var col_a_eles = document.getElementById('col_a_eles').getElementsByTagName('LI');

for (var i = 0; i < col_a_eles.length; i++) {
    col_a_eles[i].addEventListener('click', function() {

        for (var i = 0; i < col_a_eles.length; i++) {
            col_a_eles[i].removeAttribute('active');
        }
        this.setAttribute('active', '');

        selected_vals.col = this.innerHTML;

        console.log(selected_vals);
    })
}

function place_bid(ele) {

    var col = selected_vals.col;

    ajax_req(
        'POST',
        'methods/place_bid_game_b.php',
        'col=' + col,
        function(e) {
            console.log(e.responseText);

            change_button_state(ele, 'done', true);
        },
        ele
    );
}
