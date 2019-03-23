$(document).ready(function(){
    $("#first").click(function(){
        $('.result-first').toggle(400);
        $.ajax({
            url: 'app/Route.php',
            type: 'POST',
            dataType: "json",
            data: ({route: 'first'}),
            success: function (data) {
                let row = '';
                let res = $(".tbody-result-first");
                if (data.error) {
                    row += "<tr><td colspan='5'>"+data.error+"</td></tr>";
                    res.html(row);
                } else {
                    $.each(data, function(key, val){
                        let id = val.id;
                        let name = val.name;
                        let price = val.price;
                        let count = val.count;
                        let fio = val.fio;
                        row += "<tr><td>"+id+"</td><td>"+name+"</td><td>"+price+"</td><td>"+count+"</td><td>"+fio+"</td></tr>";
                    });
                    res.html(row);
                }
            }
        });
    })
    $("#second").click(function(){
        $('.result-second').toggle(400);
        $.ajax({
            url: 'app/Route.php',
            type: 'POST',
            dataType: "json",
            data: ({route: 'second'}),
            success: function (data) {
                let row = '';
                let res = $(".tbody-result-second");
                if (data.error) {
                    row += "<tr><td colspan='3'>"+data.error+"</td></tr>";
                    res.html(row);
                } else {
                    $.each(data, function(key, val){
                        let name = val.name;
                        let count = val.count;
                        let price = val.price;
                        row += "<tr><td>"+name+"</td><td>"+count+"</td><td>"+price+"</td></tr>";
                    });
                    res.html(row);
                }
            }
        });
    })
});