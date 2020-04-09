var selected_vals = { 'cola': null, 'colb': null };


var col_a_eles = document.getElementById('col_a_eles').getElementsByTagName('LI');

for (var i = 0; i < col_a_eles.length; i++) {
    col_a_eles[i].addEventListener('click', function() {

        for (var i = 0; i < col_a_eles.length; i++) {
            col_a_eles[i].removeAttribute('active');
        }
        this.setAttribute('active', '');

        selected_vals.cola = this.innerHTML;

        console.log(selected_vals);
    })
}

var col_b_eles = document.getElementById('col_b_eles').getElementsByTagName('LI');
for (var i = 0; i < col_b_eles.length; i++) {
    col_b_eles[i].addEventListener('click', function() {

        for (var i = 0; i < col_b_eles.length; i++) {
            col_b_eles[i].removeAttribute('active');
        }
        this.setAttribute('active', '');
        selected_vals.colb = this.innerHTML;

        console.log(selected_vals);
    })
}


function place_bid(ele) {

    var cola = selected_vals.cola;
    var colb = selected_vals.colb;

    if (cola==null && colb==null) {

    }else {
      ajax_req(
        'POST',
        'methods/release_tickets.php',
        'cola=' + cola + '&colb=' + colb,
        function(e) {
          console.log(e.responseText);

          change_button_state(ele, 'done', true);
        },
        ele
      );
    }

}
