<br><br>
<?php
  include_once('../core/config.php');
?>
<div class="gutter">
  <div class="gutter">
    <div class="heading">
      <h3>Categories list</h3>
      <p>you can see all added categories here</p>
    </div>
  </div>
</div>
<div id="list_products" class="window">
  <div class="card layer1">
    <table class="table responsive ultra_responsive">
      <thead>
        <tr>
          <th>title</th>
          <th>actions</th>
        </tr>
      </thead>
      <tbody id="categories_container">
        <?php
          function get_categories_list($parent_id=0,$level=0){
            global $link;

            $menu='';
            $pre='';
            for ($x = 0; $x < $level; $x++) {
                  $pre.="&nbsp&nbsp&nbsp--";
            }

            $sql="SELECT * from terms where type='category' and parent='$parent_id'";

            $result=mysqli_query($link,$sql);

            while ($row=mysqli_fetch_assoc($result)) {
              $menu.='<tr>';
              $menu.='<td>'.$pre.$row['name'].'</td>';
              $menu.='<td>'.'
              <a href="edit_categories.php?id='.$row['id'].'" class="anchor primary">edit</a>
              <a href="delete.php?route=category&id='.$row['id'].'&back_forth=list_categories" class="anchor ghost">delete</a>
              '.'</td>';
              $menu.='</tr>';
              $menu.='<tr>'.get_categories_list($row['id'],$level+1).'</tr>';
            }

            return $menu;
          }

          print_r(get_categories_list());
        ?>
      </tbody>
    </table>
  </div>
</div>
