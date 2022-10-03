/*table-layout: fixed; property keeps the table columns all width same according to the width of the table
but it effects different in safari browser so for that code 
    width:auto;
    max-width: none;
    min-width:100%;
    Reff: 
    https://github.com/filamentgroup/tablesaw/issues/58
    http://stackoverflow.com/questions/2943369/table-layoutfixed-rendering-differences-in-safari
*/
<style>
  .content{
    display: table;
    width:auto;
    max-width: none;
    min-width:100%;
    table-layout: fixed;
}

.left-space, .right-space{
    display: table-cell;
} 

</style>

<div class="content">
  <div class="left-space">gfgf</div>
  
</div>