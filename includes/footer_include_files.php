<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="main.js"></script>
<script>
var urlParams = new URLSearchParams(window.location.search);
var id_arr2 = urlParams.get('id_arr');
var id_arr=[];
if(id_arr2==null || id_arr2=="")
{

}
else
{
	var id_arr=id_arr2.split(",");
	$("#my_cart").html(id_arr.length);
}


function addCart(service_id,service_name)
{
    id_arr.push(service_id);
    $("#add_button_div_"+service_id).html('<input class="mt-5 " type="button" id="additem" value="Remove" class="btnAddAction btn" onclick="removeCart(\''+service_id+'\',\''+service_name+'\');"/>');
    $("#my_cart").html(id_arr.length);
    $("#service_list").val(id_arr);
}

function removeItemOnce(arr, value) 
{
    var index = arr.indexOf(value);
    if (index > -1) {
        arr.splice(index, 1);
    }
    return arr;
}


function removeCart(service_id,service_name)
{
    
    id_arr=removeItemOnce(id_arr, service_id); 
    $("#add_button_div_"+service_id).html('<input class="mt-5 " type="button" id="additem" value="ADD +" class="btnAddAction btn" onclick="addCart(\''+service_id+'\',\''+service_name+'\');"/>');
    $("#my_cart").html(id_arr.length);
    $("#service_list").val(id_arr);
    
}

function setUrl(category_id)
{
    window.location.href="services.php?category_id="+category_id+"&id_arr="+id_arr;
}

function getCart()
{
    window.location.href="cart.php?id_arr="+id_arr;
}

function redirectPage(page_name)
{
    window.location.href="index.php?id_arr="+id_arr+"&#"+page_name;
}
</script>