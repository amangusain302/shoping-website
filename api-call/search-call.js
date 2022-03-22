// live search in header
$(document).ready(function() {
    $("#search").keypress(function() {
        console.log(true);
        $.ajax({
            url: "http://fixebuy.in/api/search-api.php",
            type: "POST",
            data: { name: $("#search").val(), },
            success: function(data) {
                $("#search_item").html(data);
                console.log(data);
            }

        });
    });
});