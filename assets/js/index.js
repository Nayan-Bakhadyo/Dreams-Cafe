                                                                                             
     function Show_password() {                                     // for login password section
     let x = document.getElementById("password");
     if (x.type === "password") {         
       x.setAttribute("type", "text");
     } else if(x.type ==="text") {
       x.setAttribute ("type", "password");
     }
   }

   function Order_status(order_id){
     console.log(order_id);
     let x = document.getElementById("status")
       if (x.className=="badge-dot badge-brand mr-1"){
         x.setAttribute("class","badge-dot badge-success mr-1");
       }
       else if (x.className=="badge-dot badge-success mr-1"){
         x.setAttribute("class", "badge-dot badge-brand mr-1")
       }
       update_flag(order_id, 1);
     }

    function update_flag(order_id, flag){
     
      window.location.href = "../flag.php?order_id=" + order_id + "&flag=" + flag ;

    }

    function update_flag2(order_id, flag, bill, table){
      console.log("inside update flag2");
      window.location.href = "../flag_bill.php?order_id=" + order_id + "&flag=" + flag + "&bill=" + bill +"&table=" + table ;

    }
    function swap_table(order_id, swap_count, init_table, table){
      window.location.href = "../swap_table.php?order_id=" + order_id + "&swap_count=" + swap_count +"&table=" + table +"&init_table="+ init_table;

    }

    function Special_status(special_id, flag){
      console.log(special_id);
      window.location.href = "flag_special.php?special_id=" + special_id + "&flag=" + flag ;
    }
  
    function test(){
      console.log("order_id");
    

    }