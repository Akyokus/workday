var indexURL = "http://localhost/qtech/";

    $(".create").click(function(){
        var startDate = $("#started").val();
        var finishDate = $("#finished").val();
        alert(startDate);
        alert(finishDate);
        $.post(indexURL,{
            start: startDate,
            finish: finishDate
        },
            function (result){
                alert(result);
            });

    });

