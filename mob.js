function mobileno() {
    alert("Start");
var table = document.getElementById("dataTables-example");
    alert(table);
    var num = "";
for (var i = 1, row; row = table.rows[i]; i++) {
   //iterate through rows
   //rows would be accessed using the "row" variable assigned in the for loop
    alert(row);
    var mvalue = row.querySelectorAll('td');
    var cb = mvalue[0].querySelector('input[type = "checkbox"]');
    alert(cb.checked);
    tof = cb.checked;
    if(tof == true )
    {
        num = num.concat(91);
        num = num.concat(mvalue[4].innerHTML);
        num = num.concat(",");
        alert(num);
        document.getElementById("hvn").value = num;
    }

}

}
